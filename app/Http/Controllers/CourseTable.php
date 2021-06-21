<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Course;
class CourseTable extends Controller
{
    //
    public function index(){

        $send = Course::all()->toArray();
        return view('dashboard/course',compact('send'));

    }
}
