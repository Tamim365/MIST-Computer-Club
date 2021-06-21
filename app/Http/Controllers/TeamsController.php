<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Team;
use Illuminate\Support\Facades\DB;

class TeamsController extends Controller
{
    //
    function save(Request $req){
        //print_r($req->input());

          $team =new Team();
          $team->team_name = $req->team_name;
          $team->team_leader = $req->team_leader;
          $team->coach_id = (int)$req->coach_id;

          $team->save();

         //  $send = Budget::all()->toArray();
          //return view('Coursetable',compact('send'));
          return redirect()->back();

     }

     function update(Request $req,$id){

         $file = DB::table('teams')
                 ->where('team_id',$id)
                 ->update(
                     ['team_name' => $req->team_name,
                     'team_leader' => $req->team_leader,
                     'coach_id' => (int)$req->coach_id,
                     ]

                 );
                 return redirect()->back();


     }
     function delete($id){

         DB::table('teams')->where('team_id', $id)->delete();
         return redirect()->back();

     }
    }
