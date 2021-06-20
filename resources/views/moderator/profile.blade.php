@extends('layouts.master')

@section('header')
<title>MCC | {{$moderatorData['name']}}</title>
<!-- Bootstrap DatePicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Bootstrap DatePicker -->
<script type="text/javascript">
$(function () {
    $('#dp2').datepicker({
        format: "dd-MM-yyyy"
    });
});
</script>
<link rel="stylesheet" href="{{URL::asset('css/member_profile.css')}}">
@endsection

@section('content')

@php
// $x = session()->all()['LoggedUser'][1];
// dd($x);
// dd($moderatorData);
$name = $moderatorData['name'];
$email = $moderatorData['email'];
$fact_id = $moderatorData['faculty_id'];
$dept = $moderatorData['department'];
$phone = $moderatorData['phone_no'];
$address = $moderatorData['address'];
$picture= $moderatorData['picture'];
@endphp

<div class="container">
<div class="main-body">
    <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">

                     <script>
                        UPLOADCARE_PUBLIC_KEY = "a51f2657278fde93b5e2";
                        UPLOADCARE_EFFECTS = 'crop';
                        UPLOADCARE_IMAGES_ONLY = true;
                        UPLOADCARE_PREVIEW_STEP = true;
                        UPLOADCARE_CLEARABLE = true;
                    </script>
                    <script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js" charset="utf-8"></script>
                    <script src="https://ucarecdn.com/libs/widget-tab-effects/1.x/uploadcare.tab-effects.js"></script>
                   
                    <form action="/upload/moderator/{{$fact_id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <img src="{{$picture}}" alt="" id="preview" width=300 height=300 />
                        <br><br>
                        <input type="hidden" name="picture" role="uploadcare-uploader" data-crop="1:1" data-images-only>
                        <!-- Your preview will be put here -->
                        <input class="btn btn-success btn-sm" type="submit" value="Save" style="display: inline-block">
                    </form>

                    <!-- The input element below will turn into the widget -->
                </div>
            </div>
            <div class="card mt-3">
                <ul class="list-group list-group-flush">

                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h5 class="mb-0">User Type:</h5>
                        <span class="text-secondary">Moderator</span>
                    </li>

                    {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h5 class="mb-0">Committee</h5>
                        <span class="text-secondary">SINGLE</span>
                    </li> --}}
                </ul>
            </div>
        </div>


        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-body">
                    <form action="" method="post">
                    @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @csrf
                    <p style="background: #FFDE7D;">GENERAL INFORMATION</p>
                    <div class="row">
                        <div class="col-sm-3">
                            <h5 class="mb-0">Full Name</h5>
                        </div>
                        <div class="col-sm-9 text-secondary">
                             <input type="text" class="form-control" value="{{$name}}" name="name"> 
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h5 class="mb-0">Address</h5>
                        </div>
                        <div class="col-sm-9 text-secondary">
                             <input type="text" class="form-control" value="{{$address}}" name = "address"> 
                        </div>
                    </div>
                    
                    <hr>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h5 class="mb-0">Department</h5>
                        </div>
                        @php
                        $all_depts = [
                            "CSE" => "Computer Science and Engineering", 
                            "EECE" => "Electrical, Electronic and Communication Engineering",
                            "ME" => "Mechanical Engineering",
                            "CE" => "Civil Engineering",
                            "AE" => "Aeronautical Engineering",
                            "NAME" => "Naval Architecture and Marine Engineering",
                            "IPE" => "Industrial and Production Engineering",
                            "NSE" => "Nuclear Science & Engineering",
                            "EWCE" => "Civil, Environmental, Water Resources & Coastal Engineering",
                            "ARCHITECTURE" => "Architecture",
                            "PME" => "Petroleum & Mining Engineering"
                        ];
                        @endphp
                        <div class="col-sm-9 text-secondary">
                            <select name="department" class="form-control">
                                <option value="" disabled selected>Choose option</option>
                                @foreach (array_keys($all_depts) as $dept_name)
                                    <option value="{{$dept_name}}" @if ($dept == $dept_name) selected @endif>
                                    {{$all_depts[$dept_name]}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>

                    <p style="background: #FFDE7D;">ACCOUNT INFORMATION</p>

                    
                    <div class="row">
                        <div class="col-sm-3">
                            <h5 class="mb-0">Email</h5>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{$email}}" name = "email">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h5 class="mb-0">Phone</h5>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{$phone}}" name = "phone">
                        </div>
                    </div>
                    
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h5 class="mb-0">Faculty ID</h5>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" value="{{$fact_id}}" name = "fact_id" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h5 class="mb-0">Old Password</h5>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" class="form-control" value="" name="old_password">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h5 class="mb-0">New Password</h5>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" class="form-control" value="" name="new_password">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h5 class="mb-0">Confirm New Password</h5>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="password" class="form-control" value="" name="confirm_new_password">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-info" href="{{route('moderator.profile.update')}}">Save</button>
                            <a class="btn btn-info " href="{{route('auth.logout')}}">Log out</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
// Getting an instance of the widget.
const widget = uploadcare.Widget('[role=uploadcare-uploader]');
// Selecting an image to be replaced with the uploaded one.
const preview = document.getElementById('preview');
// "onUploadComplete" lets you get file info once it has been uploaded.
// "cdnUrl" holds a URL of the uploaded file: to replace a preview with.
widget.onUploadComplete(fileInfo => {
preview.src = fileInfo.cdnUrl;
})

</script>

@endsection

