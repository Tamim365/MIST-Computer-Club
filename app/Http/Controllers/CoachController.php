<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Coach;

class CoachController extends Controller
{
    function save(Request $req){
        //print_r($req->input());

          $coach =new Coach();
          $coach->coach_name = $req->coach_name;
          $coach->coach_address = $req->coach_address;
          $coach->coach_university = $req->coach_university;
          $coach->coach_email = $req->coach_email;
          $coach->coach_phone = (int)$req->coach_phone;

          $coach->save();

         //  $send = Budget::all()->toArray();
          //return view('Coursetable',compact('send'));
          return redirect()->back();

     }

     function update(Request $req,$id){

         $file = DB::table('coaches')
                 ->where('coach_id',$id)
                 ->update(
                     ['coach_address' => $req->coach_address,
                     'coach_email' => $req->coach_email,
                     'coach_phone' => (int)$req->coach_phone,
                     ]

                 );
                 return redirect()->back();


     }
     function delete($id){

         DB::table('coaches')->where('coach_id', $id)->delete();
         return redirect()->back();

     }
}
