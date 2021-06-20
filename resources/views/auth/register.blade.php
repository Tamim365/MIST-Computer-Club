<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/auth.css')}}">
</head>
<body>
    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome To MCC</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <form action="login.html"><input type="submit" name="" value="Login"></form><br/>
                {{-- <div class="text-center">Already have an account? <a href="{{route('auth.login')}}">Log in</a></div> --}}
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Faculty</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register As A Student</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
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
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span> 
                                        </label>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                     <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                                     <span class="text-danger">@error('confirm_password'){{ $message }} @enderror</span>
                                </div>
                                {{-- <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" />
                                </div> --}}
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Register As A Faculty</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
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
                                    <select class="form-control">
                                        <option class="hidden"  selected disabled>DEPT</option>
                                        <option>CSE</option>
                                        <option>EECE</option>
                                        <option>CE</option>
                                        <option>ME</option>
                                        <option>NAME</option>
                                        <option>NSE</option>
                                        <option>ARCHI</option>
                                        <option>IPE</option>
                                        
                                    </select>
                                </div>


                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                     <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                                     <span class="text-danger">@error('confirm_password'){{ $message }} @enderror</span>
                                </div>
                                
                                <input type="submit" class="btnRegister"  value="Register"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>