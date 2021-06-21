<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;

class BudgetTable extends Controller
{
    public function index(){

        $send = Budget::all()->toArray();
        return view('dashboard/budget',compact('send'));

    }
}
