<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>

<h1>Member Page</h1>


{{-- @foreach ($LoggedUserInfo as $user)
    <h4>Hi {{$user}}</h4>
@endforeach --}}

{{-- <form>
<div class="form-row">
    <div class="form-group col-md-6">
    <label>Name</label>
    <input type="name" class="form-control" id="inputEmail4" placeholder="Email" value="{{ $LoggedUserInfo['name'] }}">
    </div>
    <div class="form-group col-md-6">
    <label>Email</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" value="{{ $LoggedUserInfo['email'] }}">
    </div>
</div>
<div class="form-group">
    <label for="inputAddress2">Club ID</label>
    <input type="text" class="form-control" id="inputAddress2" value="{{ $LoggedUserInfo['club_id'] }}">
</div>
<div class="form-group">
    <label for="inputAddress">Student ID</label>
<input type="text" class="form-control" id="inputAddress" value="{{$LoggedUserInfo['student_id']}}">
</div>
<div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputCity">City</label>
    <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
    <label for="inputState">State</label>
    <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
    </select>
    </div>
    <div class="form-group col-md-2">
    <label for="inputZip">Zip</label>
    <input type="text" class="form-control" id="inputZip">
    </div>
</div>
<button type="submit" class="btn btn-primary">Sign Out</button>
</form> --}}

</body>
</html>