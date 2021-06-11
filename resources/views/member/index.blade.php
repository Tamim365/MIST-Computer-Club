@extends('master')

@section('content')

<div class="row mx-auto">
    <div class="col-md-12">
        <br>
        <h3 class="align-middle"> {{$table_name}} </h3>
        <table class="table table-bordered">
            <tr>
                <?php
                    $columns = Schema::getColumnListing('members');
                    // dd($columns);
                    for($i = 0; $i < count($columns); $i++)
                    echo "<th>".$columns[$i]."</th>";
                ?>

                {{-- @foreach ($columns as $item)
                    {{$item}}
                @endforeach --}}
                {{-- <th>Club ID</th>
                <th>Name</th>
                <th>Student ID</th>
                <th>Department</th>
                <th>Email</th>
                <th>Phone No.</th> --}}
            </tr>
            @foreach ($member as $row)
             <tr>
                <?php
                    $columns = Schema::getColumnListing('members');
                // dd($columns);
                    for($i = 0; $i < count($columns); $i++)
                    {
                        try {
                            echo "<td>".$row[$columns[$i]]."</td>";
                        } catch (\Throwable $th) {
                            //throw $th;
                        }
                    }
                ?>
                 {{-- <td>{{ $row['club_id'] }}</td>
                 <td>{{ $row['name'] }}</td>
                 <td>{{ $row['student_id'] }}</td>
                 <td>{{ $row['department'] }}</td>
                 <td>{{ $row['email'] }}</td>
                 <td>{{ $row['phone_no'] }}</td> --}}

             </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
