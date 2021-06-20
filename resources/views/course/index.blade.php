@extends('layouts.master')
@section('header')
<title>Courses</title>
<link rel="stylesheet" href="{{URL::asset('css/courses.css')}}">
@endsection

@section('content')


<div class="courses-container">
    @foreach ($all_courses as $course)
    <div class="course">
    @php
        $course_id = $course['course_id'];
        $course_name = $course['course_name'];
        $course_status = $course['course_status'];
        $course_info = $course['course_info'];
        $start_date = $course['start_date'];
        $course_materialsFee = $course['course_materialsfee'];
    @endphp
        <div class="course-preview">
            <h6>Course</h6>
            <h2>{{$course_name}}</h2>
            <!-- <a href="#">View all chapters <i class="fas fa-chevron-right"></i></a> -->
        </div>
        <div class="course-info">
            <div class="progress-container">
                <span class="progress-text">
                    {{$course_status}}
                </span>
            </div>
            <h2>Details</h2>
            <p>
                {{$course_info}}
            </p>
            
            <h4>Starting Date: {{$start_date}}</h4>
            <h4>Material-Fee: {{$course_materialsFee}}Tk.</h4>
            <hr>

            @if (session()->has('LoggedUser') && session()->all()['LoggedUser'][1] == 'member')
                @php
                    $member = session('LoggedUser')[0];
                @endphp
                @if (DB::table('enrolls')->where('club_id', '=', $member->club_id)->where('course_id', '=', $course_id)->doesntExist())
                    <form action="{{route('course.enroll.participant')}}" method="POST">@csrf<button class="btn" type="submit" name="course_id" value="{{$course_id}}">Enroll</button></form>
                @else    
                    <div class="checkmark"></div> <span>You are enrolled in this course.</span> 
                @endif
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection