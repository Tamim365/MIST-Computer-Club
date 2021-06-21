<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnrollController extends Controller
{
    public function index(){
        $send = DB::select('select club_id, name,course_id,course_name,participation_role from members natural join  enrolls natural join courses ');
        return view('enroll',['send'=>$send]);
    }
}
