<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fest;
use Illuminate\Support\Facades\DB;

class FestController extends Controller
{
    function save(Request $req){
        //print_r($req->input());

          $fest =new Fest;
          //$fest->budget_id = (int)$req->budget_id;
          $fest->fest_title = $req->fest_title;
          $fest->fest_date = $req->fest_date;
          $fest->fest_description  = $req->fest_description;
          $fest->fest_expenses = (int)$req->fest_expenses;
          $fest->picture = (string)$req->picture;

          $fest->save();

         //  $send = fest::all()->toArray();
          //return view('Coursetable',compact('send'));
          return redirect()->back();

     }
     function update(Request $req,$id){

        $file = DB::table('fests')
                ->where('fest_id',$id)
                ->update(
                    ['fest_title' => $req->fest_title,
                    'fest_date' => $req->fest_date,
                    'fest_expenses' =>(int)$req->fest_expenses

                    ]

                );
                return redirect()->back();


    }
    function delete($id){

        DB::table('fests')->where('fest_id', $id)->delete();
        return redirect()->back();

    }
}
