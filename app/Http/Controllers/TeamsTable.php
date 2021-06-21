<?php

namespace App\Http\Controllers;
use App\Models\Team;

use Illuminate\Http\Request;

class TeamsTable extends Controller
{
    public function index(){

        $send = Team::all()->toArray();
        return view('dashboard/team',compact('send'));

    }

}
