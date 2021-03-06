<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //
    public function index(){
        $member = Member::all()->toArray();
        $table_name = 'Customer';
        return view('member/index',['member'=>$member, 'table_name'=>$table_name]);
    }
    function member_profile(){
        $member = session('LoggedUser')[0];
        $data = ['memberData'=>Member::where('club_id','=', $member->club_id)->first()];
        return view('member.profile', $data);
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'student_id' => 'required|numeric',
        ]);
        try {
            $member = Member::where('club_id','=', $request->club_id)->first();
            $member = DB::table('members')
                    ->where('club_id', $member->club_id)
                    ->update([
                        'Name'=>(string)$request->name,
                        'Student_Id'=>(string)$request->student_id,
                        'Department'=>(string) $request->department,
                        'Level'=> (int)$request->level,
                        'Email'=>(string)$request->email,
                        'Phone_No'=>(string) $request->phone,
                        'Address'=>(string) $request->address,
                        'dob'=> (string) $request->dob,
                    ]);
            return back()->with('success','Profile update Successfully!');
            // dd($request->name);
            // $member->Name = (string)$request->name;
            // $member->Email = (string)$request->email;
            // $member->Department = (string) $request->department;
            // $member->Level = (int) $request->level;
            // $member->Phone_No = (string) $request->phone;
            // $member->Address = (string) $request->address;
            // $member->dob = (string) $request->dob;
            // $member->Student_ID = (string)$request->Student_ID;
        }
        catch(exception $e) {
            DB::rollback();
            return back()->with('fail','Something went wrong, try again later');
        }
    }
    public function uploadImage(Request $request, $id)
    {
        try {
            $fileName =  (string) $request->picture;
            // dd($fileName, $id);
            DB::table('members')
                ->where('club_id', $id)
                ->update(['picture'=> $fileName]);
        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect('member/profile');
    }
    public function delete($id){
        DB::table('members')->where('club_id', $id)->delete();
        return redirect()->back();
    }
    public function update_panel(Request $request){
        $request->validate([
            'club_id'=>'required|exists:members,club_id',
            'panel_role' => 'required',
        ]);
        DB::table('members')
        ->where('club_id', '=' , $request->club_id)
        ->update([
            'committe_name' => $request->committee_name,
            'panel_role' => $request->panel_role,
        ]);
        return redirect()->back();
    }
}
