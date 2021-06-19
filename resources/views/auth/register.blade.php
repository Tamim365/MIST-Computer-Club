@extends('layouts.master')

@section('header')
<title>MCC - Registration</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link rel="stylesheet" href="{{URL::asset('css/register.css')}}">
@endsection

@section('content')
    <div class="signup-form">
        <form action="{{ route('auth.save') }}" method="post">
            <h2>Register</h2>
            <p class="hint-text">Create your account.</p>
            
            @if(Session::get('success'))
             <div class="alert alert-success">
                {{ Session::get('success') }}
             </div>
            @endif

            @csrf
            <div class="form-group">
                <input type="name" class="form-control" name="name" placeholder="Name" value="{{old('name')}}">
                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>
            
            <div class="form-group">
                <input type="Student ID" class="form-control" name="Student_ID" placeholder="Student ID" value="{{old('Student_ID')}}">
                <span class="text-danger">@error('Student_ID'){{ $message }} @enderror</span>
            </div>
            
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            
            <div class="form-group">
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                <span class="text-danger">@error('confirm_password'){{ $message }} @enderror</span>
            </div>
                 

            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" name = "terms_and_conditions"> I accept the <a
                        href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Register Now</button>
            </div>
        </form>

        <div class="text-center">Already have an account? <a href="{{route('auth.login')}}">Log in</a></div>
    </div>
@endsection
