<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fest;

class FestShow extends Controller
{
    public function show(){
        $send = Fest::all()->toArray();
        return view('fest',compact('send'));
    }
}
