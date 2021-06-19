<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminTable extends Controller
{
    public function index(){

        $send = Admin::all()->toArray();
        return view('Admin',compact('send'));

    }
}
