<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    //
    function save(Request $req){
       //print_r($req->input());

         $course =new Course;
         $course->course_name = $req->Course_name;
         $course->start_date=$req->start;
         $course->course_info = $req->info;
         $course->mentor_fee= (int)$req->mentor_fee;
         $course->course_materialsfee = (int)$req->mat_fee;
         $course->save();

         $send = Course::all()->toArray();
         //return view('Coursetable',compact('send'));
         return redirect()->back();

    }
    function update(Request $req,$id){

        $file = DB::table('courses')
                ->where('course_id',$id)
                ->update(
                    ['course_name' => $req->Course_name,
                    'start_date' => $req->start,
                    'end_date' => $req->end,
                    'course_status' => $req->status,
                    'course_materialsfee' => $req->mat_fee]

                );
                return redirect()->back();


    }
    function delete($id){

        DB::table('courses')->where('course_id', $id)->delete();
        return redirect()->back();

    }
}
