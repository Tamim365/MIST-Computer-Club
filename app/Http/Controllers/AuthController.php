<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Moderator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function save_member(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:members|unique:moderators',
            'Student_ID' => 'required|numeric',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6',
        ]);
        try {
            $member = new member;
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
    function save_moderator(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:moderators|unique:members',
            'faculty_id' => 'required|unique:moderators',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6',
        ]);
        try {
            $moderator = new Moderator;
            $moderator->Name = (string)$request->name;
            $moderator->Email = (string)$request->email;
            $moderator->Password = (string)Hash::make($request->password);
            $moderator->Faculty_Id = (string)$request->faculty_id;
            $moderator->Department = (string) $request->department;
            $save = $moderator->save();
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
            $userInfo = Moderator::where('email','=', $request->email)->first();
            if(!$userInfo){
                return back()->with('fail','Incorrect Email or Password');
            }else{
                if(Hash::check($request->password, $userInfo->password)){
                    $request->session()->put('LoggedUser', [$userInfo->email, 'moderator']);
                    return redirect('member/profile');
    
                }else{
                    return back()->with('fail','Incorrect Email or Password');
                }
            }
        } else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', [$userInfo->email, 'member']);
                return redirect('member/profile');

            }else{
                return back()->with('fail','Incorrect Email or Password');
            }
        }
    }
    function logOut(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
}
