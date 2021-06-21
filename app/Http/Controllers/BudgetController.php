<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
use Illuminate\Support\Facades\DB;

class BudgetController extends Controller
{
    function save(Request $req){

         $Budget =new Budget;
         $Budget->budget_amount = (int)$req->Budget_Amount;
         $Budget->budget_proposal_Info = $req->Budget_Proposal_Info;
         $Budget->remarks = $req->remarks;

         $Budget->save();

         if($req->filled('course_id')){
            $file = DB::table('courses')
                ->where('course_id',$req->course_id)
                ->update(
                    ['budget_id' => (int) $Budget->budget_id]
                );
            }
            else if($req->filled('project_id')){
                $file = DB::table('r_n_d_s')
                    ->where('project_id',$req->project_id)
                    ->update(
                        ['budget_id' => (int) $Budget->budget_id]
                    );
                }
             else if($req->filled('fest_id')){
                    $file = DB::table('fests')
                        ->where('fest_id',$req->fest_id)
                        ->update(
                            ['budget_id' => (int) $Budget->budget_id]
                        );
                    }
        //  $send = Budget::all()->toArray();
         //return view('Coursetable',compact('send'));
         return redirect()->back();

    }

    function update(Request $req,$id){

        $file = DB::table('budgets')
                ->where('budget_id',$id)
                ->update(
                    ['budget_amount' => (int)$req->Budget_Amount,
                    'budget_remain' => (int)$req->Budget_Remain,
                    'budget_transaction_date' => $req->Budget_Transaction_Date,
                    'budget_proposal_info' => $req->Budget_Proposal_Info,
                    'remarks' => $req->remarks]

                );
                return redirect()->back();


    }
    function delete($id){

        DB::table('budgets')->where('budget_id', $id)->delete();
        return redirect()->back();

    }

    function accept($id){
        DB::table('budgets')
        ->where('budget_id', '=', $id)
        ->update([
            'budget_status' => 'Accepted',
        ]);
        return redirect()->back();
    }
    function decline($id){
        DB::table('budgets')
        ->where('budget_id', '=', $id)
        ->update([
            'budget_status' => 'Declined',
        ]);
        return redirect()->back();
    }
}
