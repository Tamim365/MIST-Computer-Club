<?php

namespace App\Http\Controllers;
use App\Models\Volunteer;

use Illuminate\Http\Request;

class Volunteertable extends Controller
{
    public function index(){
        $send = Volunteer::all()->toArray();
        return view('volunteer',compact('send'));
    }
}

