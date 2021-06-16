<!DOCTYPE html>
<html lang="en">

<head>
    <link href="img1.png" rel="icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="img1.png" rel="icon">
    <title>MCC | {{$memberData['name']}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

<style>
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 3rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.uploadcare--jcrop-holder>div>div, #preview {
  border-radius: 50%;
}

/* Styles and stuff for the page */
#preview {
  margin-top: 1rem;
}
p {
 text-align: center;
 color: rgb(22, 13, 139);
  font-size: large;
  max-width: 700px;
  padding: 0.5em;
  background: rgb(255, 255, 255);
}
h1 {
  text-align: center;
} 
</style>

</head>

<body>

@php
    // dd($memberData);
    $name = $memberData['name'];
    $email = $memberData['email'];
    $st_id = $memberData['student_id'];
    $dept = $memberData['department'];
    $dob = $memberData['dob'];
    $phone = $memberData['phone_no'];
    $address = $memberData['address'];
    $club_id = $memberData['club_id'];
    $faculty_id = $memberData['faculty_id'];
    $level = $memberData['level'];
    $picture= $memberData['picture'];
    $panel_role = $memberData['panel_role'];
    $committe_name= $memberData['committe_name'];
@endphp

<div class="container">
    <div class="main-body">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="member.html">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li> -->
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
        </nav>
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">

                         <script>
                            UPLOADCARE_PUBLIC_KEY = "demopublickey";
                        </script>
                        <script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js" charset="utf-8"></script>
                        
                       
                        <!-- The input element below will turn into the widget -->
                        <input type="hidden" role="uploadcare-uploader" data-crop="1:1" data-images-only>
                        <!-- Your preview will be put here -->
                        <div>
                            <img src="" alt="" id="preview" width=300 height=300 />
                        </div>
                        
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h4 class="mb-0">Panel Role</h4>
                            <span class="text-secondary">SINGLE</span>
                        </li>


                        {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                     class="feather feather-github mr-2 icon-inline"> 

                                    <path
                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                    </path>
                                </svg>Committee_Name</h6>
                            <span class="text-secondary">dummy</span>
                        </li> --}}


                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h4 class="mb-0">Committee Name</h4>
                            <span class="text-secondary">SINGLE</span>
                        </li>


                        {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-instagram mr-2 icon-inline text-danger">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>Instagram</h6>
                            <span class="text-secondary">siri2.0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-facebook mr-2 icon-inline text-primary">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>Facebook</h6>
                            <span class="text-secondary">shiary</span>
                        </li> --}}
                    </ul>
                    <div class="row">
                        <div class="col-sm-12">
                            <a class="btn btn-info " href="{{route('auth.logout')}}">Log out</a>
                        </div>
                    </div>
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
                        <div class="row">
                            <p>GENERAL INFORMATION</p>
                            <div class="col-sm-3">

                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <!-- <div class="col-sm-9 text-secondary">
                                Shiary 
                            </div> -->
                            <div class="col-sm-9 text-secondary">
                                 <input type="text" class="form-control" value="{{$name}}" name="name"> 
                            </div>
                        </div>
                        <hr>

                        <br>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Student ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="{{$st_id}}" name = "student_id">
                                <span class="text-danger">@error('student_id'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <br>
                       

                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                 <input type="text" class="form-control" value="{{$address}}" name = "address"> 
                            </div>
                        </div>
                        
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date of Birth</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name = "dob" data-date-format="dd-mm-yyyy" value="{{$dob}}" id="dp2">
                            </div>
                        </div>




                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Department</h6>
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
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Level</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="{{$level}}" name = "level">
                                <span class="text-danger">@error('level'){{ $message }} @enderror</span>
                            </div>
                        </div>
                      

                        <p>ACCOUNT INFORMATION</p>

                        
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="{{$email}}" name = "email">
                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="{{$phone}}" name = "phone">
                            </div>
                        </div>
                        
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Club ID</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="{{$club_id}}" name = "club_id" readonly>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Old Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password" class="form-control" value="" name="old_password">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">New Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password" class="form-control" value="" name="new_password">
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Confirm New Password</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="password" class="form-control" value="" name="confirm_new_password">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-info" href="{{route('member.profile.update')}}">Save</button>
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


 </body>
</html>