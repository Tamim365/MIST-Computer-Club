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

       if($req->filled('budget_id')){
        $course =new Course;
         $course->budget_id = (int)$req->budget_id;
         $course->course_name = $req->Course_name;
         $course->start_date=$req->start;
         $course->course_info = $req->info;
         $course->mentor_fee= (int)$req->mentor_fee;
         $course->course_materialsfee = (int)$req->mat_fee;
         $course->save();
       }
       else{
        $course =new Course;
        // $course->budget_id = (int)$req->budget_id;
         $course->course_name = $req->Course_name;
         $course->start_date=$req->start;
         $course->course_info = $req->info;
         $course->mentor_fee= (int)$req->mentor_fee;
         $course->course_materialsfee = (int)$req->mat_fee;
         $course->save();
       }



         $send = Course::all()->toArray();
         //return view('Coursetable',compact('send'));
         return redirect()->back();

    }
    function update(Request $req,$id){

        if($req->filled('budget_id')){
            $file = DB::table('courses')
                ->where('course_id',$id)
                ->update(
                    ['course_name' => $req->Course_name,
                    'start_date' => $req->start,
                    'end_date' => $req->end,
                    'course_status' => $req->status,
                    'course_materialsfee' => $req->mat_fee,
                    'budget_id' => $req->budget_id]

                );
        }
        else{
            $file = DB::table('courses')
                ->where('course_id',$id)
                ->update(
                    ['course_name' => $req->Course_name,
                    'start_date' => $req->start,
                    'end_date' => $req->end,
                    'course_status' => $req->status,
                    'course_materialsfee' => $req->mat_fee]

                );
        }
                return redirect()->back();


    }
    function delete($id){

        DB::table('courses')->where('course_id', $id)->delete();
        return redirect()->back();

    }

    function index(){
        $all_courses = Course::all();
        return view('course/index', ['all_courses'=>$all_courses]);
    }
}
