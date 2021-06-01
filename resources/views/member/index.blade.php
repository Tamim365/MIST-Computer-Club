@extends('master')

@section('content')

<div class="row mx-auto">
    <div class="col-md-12">
        <br>
        <h3 class="align-middle">Member Data</h3>
        <table class="table table-bordered">
            <tr>
                <th>Club Id</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Department</th>
                <th>Email</th>
                <th>Phone No.</th>
            </tr>
            @foreach ($member as $row)
             <tr>
                 <td>{{ $row['club_id'] }}</td>
                 <td>{{ $row['name'] }}</td>
                 <td>{{ $row['student_id'] }}</td>
                 <td>{{ $row['department'] }}</td>
                 <td>{{ $row['email'] }}</td>
                 <td>{{ $row['phone_no'] }}</td>

             </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
