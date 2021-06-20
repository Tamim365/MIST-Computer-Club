@extends('layouts.master')

@section('header')
<title>Login</title>
<link rel="stylesheet" href="{{URL::asset('css/auth.css')}}">
@endsection

@section('content')
<div class="container login-container">
    <div class="row">
        <div class="col-md-10 login-form-1">
            <img src="{{URL::asset('mcc_logo.png') }}" alt="" style="width: 40%; margin: auto; padding: 20px">
            <h3>Login</h3>
            <form action="{{ route('auth.check') }}" method="post">
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email *" value="" name="email" />
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" value="" name="password" />
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget Password?</a>
                </div>
                <div class="form-group">
                    <a href="{{route('auth.register')}}" class="ForgetPwd">Do not have any account? Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection



