<?php

namespace App\Http\Controllers;
use App\Models\RND;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RNDController extends Controller
{
    function save(Request $req){
        //print_r($req->input());

          $project =new RND;
          //$project->budget_id = (int)$req->budget_id;
          $project->project_title = $req->project_title;
          $project->project_equipment = (int)$req->project_equipment;
          $project->project_labor = (int)$req->project_labor;
          $project->project_management = (int)$req->project_management;

          $project->save();

         //  $send = project::all()->toArray();
          //return view('Coursetable',compact('send'));
          return redirect()->back();

     }

     function update(Request $req,$id){

         $file = DB::table('r_n_d_s')
                 ->where('project_id',$id)
                 ->update(
                     ['project_equipment' => (int)$req->project_equipment,
                     'project_labor' => (int)$req->project_labor,
                     'project_management' =>(int)$req->project_management

                     ]

                 );
                 return redirect()->back();


     }
     function delete($id){

         DB::table('r_n_d_s')->where('project_id', $id)->delete();
         return redirect()->back();

     }
}
