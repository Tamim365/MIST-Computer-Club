<?php

namespace App\Http\Controllers;

use App\Models\Moderator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ModeratorController extends Controller
{
    function moderator_profile(){
        $moderator = session('LoggedUser')[0];
        $data = ['moderatorData'=>Moderator::where('email','=', $moderator->email)->first()];
        // dd($moderator->faculty_id);
        return view('moderator.profile', $data);
    }
    public function update(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'fact_id' => 'required',
            'department'=>'required',
            'email'=>'required',
        ]);
        try {
            $moderator = Moderator::where('faculty_id','=', $request->fact_id)->first();
            $moderator = DB::table('moderators')
                    ->where('faculty_id', $moderator->faculty_id)
                    ->update([
                        'Name'=>(string)$request->name,
                        'Department'=>(string) $request->department,
                        'Email'=>(string)$request->email,
                        'Phone_No'=>(string) $request->phone,
                        'Address'=>(string) $request->address,
                    ]);
            return back()->with('success','Profile update Successfully!');
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
            DB::table('moderators')
                ->where('faculty_id', $id)
                ->update(['picture'=> $fileName]);
        } catch (\Throwable $th) {
            //throw $th;
        }
        return redirect('moderator/profile');
    }
}
