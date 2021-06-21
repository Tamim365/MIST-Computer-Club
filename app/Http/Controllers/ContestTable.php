<?php

namespace App\Http\Controllers;
use App\Models\Contest;

use Illuminate\Http\Request;

class ContestTable extends Controller
{
    public function index(){

        $send = Contest::all()->toArray();
        return view('dashboard/contest',compact('send'));

    }

}
