<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;

class VounteerController extends Controller
{
    function save(Request $req){
        //print_r($req->input());

          $voulunteer =new Volunteer();
          $voulunteer->volunteer_name = $req->volunteer_name;
          $voulunteer->volunteer_address = $req->volunteer_address;
          $voulunteer->volunteer_level = (int)$req->volunteer_level;
          $voulunteer->volunteer_dept = $req->volunteer_dept;
          $voulunteer->volunteer_email = $req->volunteer_email;
          $voulunteer->volunteer_phone = (int)$req->volunteer_phone;
          $voulunteer->volunteer_role = $req->volunteer_role;

          $voulunteer->save();

         //  $send = Budget::all()->toArray();
          //return view('Coursetable',compact('send'));
          return redirect()->back();

     }
}
