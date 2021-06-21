<?php

namespace App\Http\Controllers;
use App\Models\Contest;
use Illuminate\Http\Request;

class ContestController extends Controller
{
    function save(Request $req){
        //print_r($req->input());

          $contest =new Contest();
          $contest->contest_name = $req->contest_name;
          $contest->university= $req->university;
          $contest->contest_date = $req->contest_date;
          $contest->save();

         //  $send = Budget::all()->toArray();
          //return view('Coursetable',compact('send'));
          return redirect()->back();

     }
}
