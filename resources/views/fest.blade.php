@extends('layouts.master')
@section('header')
    <title>Fest</title>
    <link rel="stylesheet" href="{{URL::asset('css/fest/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/fest/style.css')}}">
@endsection
@section('content')
    <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>EVENTS</h2>
                </div>
            </div>
        </div>

    @foreach ($send as $row)

    <div id="blog" class="how_it">
        <div class="container-fluid paddimg_ouu">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padding-right1">
                    <div class="two-box">
                        <figure><img src="{{ $row['picture'] }}" alt="#" /></figure>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padding-left1">
                    <div class="two-box_text">
                    <!-- <div class="two-box"> -->
                        <div class="travel">

                            <h3>{{ $row['fest_title'] }}</h3>
                            <p> {{ $row['fest_description'] }} </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @endforeach


    {{-- <div id="blog" class="how_it">
        <div class="container-fluid paddimg_ouu">
            <div class="row">

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padding-right1">
                    <div class="two-box_text">
                        <!-- <div class="two-box"> -->
                        <div class="travel">

                            <h3>how it all started</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                voluptate velit esse Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit in voluptate velit esse </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 padding-left1">

                    <div class="two-box">
                        <figure><img src="{{URL::asset('img/rsz_codewar.jpg')}}" alt="#" /></figure>
                    </div>


                </div>
            </div>
        </div>

    </div> --}}
@endsection

