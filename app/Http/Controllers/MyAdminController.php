<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class MyAdminController extends Controller
{
    function save(Request $req){
       //print_r($req->input());

         $Admin =new Admin;
         $Admin->admin_name = $req->Admin_Name;
         $Admin->admin_email = $req->Admin_Email;
         $Admin->admin_password = $req->Admin_Password;
         $Admin->admin_phone = $req->Admin_Phone;
         $Admin->access_time = $req->Access_Time;
         
         $Admin->save();

        //  $send = Budget::all()->toArray();
         //return view('Coursetable',compact('send'));
         return redirect()->back();

    }

    function update(Request $req,$id){

        $file = DB::table('admins')
                ->where('admin_id',$id)
                ->update(
                    ['admin_name' => $req->Admin_Name,
                    'admin_email' => $req->Admin_Email,
                    'admin_password' => $req->Admin_Password,
                    'admin_phone' => $req->Admin_Phone,
                    'access_time' => $req->Access_Time]
                );
                return redirect()->back();


    }
    function delete($id){

        DB::table('admins')->where('admin_id', $id)->delete();
        return redirect()->back();

    }
}
