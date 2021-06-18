@extends('layouts.master')

@section('header')
    <link rel="stylesheet" href="{{URL::asset('home/assets/css/style.css')}}">
    <title>MIST Computer Club</title>
@endsection

@section('content')
    @include('layouts.home')
@endsection
