<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RND;

class RNDTable extends Controller
{
    public function index(){
        $send = RND::all()->toArray();
        return view('dashboard/rnd',compact('send'));
    }
    }

