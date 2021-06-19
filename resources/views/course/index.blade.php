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
            <a href=""><button class="btn" type="submit">Enroll</button></a>
        </div>
    </div>
    @endforeach
</div>
@endsection