@extends('layouts.master')

@section('header')
    <title>Login</title>
@endsection

@section('content')
<div class="row" style="margin-top:45px">
    <div class="col-md-4 col-md-offset-4">
         <h4>Login</h4><hr>
         <form action="{{ route('auth.check') }}" method="post">

          @if(Session::get('fail'))
              <div class="alert alert-danger">
              {{ Session::get('fail') }}
              </div>
          @endif
          @csrf
            <div class="form-group">
               <label>Email</label>
               <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
               <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>

            <div class="form-group">
               <label>Password</label>
               <input type="password" class="form-control" name="password" placeholder="Enter password">
               <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>

            <button type="submit" class="btn btn-block btn-primary">Sign In</button>
            <br>
            <a href="{{ route('auth.register') }}">I don't have an account, create new</a>
         </form>
    </div>
 </div>
@endsection
