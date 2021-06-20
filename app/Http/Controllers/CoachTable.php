<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class CoachTable extends Controller
{
    //
    public function index(){
    $send = Coach::all()->toArray();
    return view('coachtable',compact('send'));
    }

}
