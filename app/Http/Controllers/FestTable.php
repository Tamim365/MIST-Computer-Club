<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fest;

class FestTable extends Controller
{
    public function index(){

        $send = Fest::all()->toArray();
        return view('festtable',compact('send'));

    }
}
