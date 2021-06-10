<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:members',
            'Student_ID' => 'required|numeric',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6',
        ]);

        // return $request->input();
        try {
            $member = new member;
            // $member->Club_ID = (string)$request->Student_ID;
            $member->Name = (string)$request->name;
            $member->Email = (string)$request->email;
            $member->Password = (string)Hash::make($request->password);
            $member->Student_ID = (string)$request->Student_ID;
            $save = $member->save();
            if($save){
                return back()->with('success','Registration Successful');
            }else{
                return back()->with('fail','Something went wrong, try again later');
            }
            return;
        }
        catch(exception $e) {
            DB::rollback();
            return;
        }

    }
    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
       ]);

       $userInfo = Member::where('email','=', $request->email)->first();
        if(!$userInfo){
            return back()->with('fail','Incorrect Email or Password');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->Club_ID);
                return redirect('member/profile');

            }else{
                return back()->with('fail','Incorrect Email or Password');
            }
        }
    }
    function member_profile(){
        $data = ['LoggedUserInfo'=>Member::where('email','=', 'LoggedUser')->first()];
        // dd($data);
        return view('member.profile', $data);
    }
}
