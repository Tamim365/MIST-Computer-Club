@extends('master')

@section('content')
<style>
    /* .container {
      max-width: 350px;
      margin: 50px auto;
      text-align: center;
    } */

    input[type="submit"] {
      margin-bottom: 20px;
    }

    .select-block {
      width: 50%
      /* margin: 110px auto 30px; */
      /* position: relative; */
    }

    select {
      width: 100%;
      height: 50px;
      font-size: 100%;
      font-weight: bold;
      cursor: pointer;
      border-radius: 0;
      background-color: rgb(65, 225, 172);
      border: none;
      border: 2px solid burlywood;
      border-radius: 4px;
      color: white;
      appearance: none;
      padding: 8px 38px 10px 18px;
      -webkit-appearance: none;
      -moz-appearance: none;
      transition: color 0.3s ease, background-color 0.3s ease, border-bottom-color 0.3s ease;
    }

    /* For IE <= 11 */
    select::-ms-expand {
      display: none;
    }

    .selectIcon {
      top: 7px;
      right: 15px;
      width: 30px;
      height: 36px;
      padding-left: 5px;
      pointer-events: none;
      position: absolute;
      transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .selectIcon svg.icon {
      transition: fill 0.3s ease;
      fill: white;
    }

    select:hover,
    select:focus {
      color: #000000;
      background-color: white;
    }

    select:hover~.selectIcon,
    select:focus~.selectIcon {
      background-color: white;
    }

    select:hover~.selectIcon svg.icon,
    select:focus~.selectIcon svg.icon {
      fill: #1A33FF;
    }
  </style>

<div class="container mt-5">
    <form action="" method="get" class="mb-3">
      <div class="select-block">
        <select name="Tables">
          <option value="" disabled selected>Choose option</option>
          <option value="Apple">Apple</option>
          <option value="Banana">Banana</option>
          <option value="Coconut">Coconut</option>
          <option value="Blueberry">Blueberry</option>
          <option value="Strawberry">Strawberry</option>
        </select>
        {{-- <div class="selectIcon">
          <svg focusable="false" viewBox="0 0 104 128" width="25" height="35" class="icon">
            <path d="m2e1 95a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm0-3e1a9 9 0 0 1 -9 9 9 9 0 0 1 -9 -9 9 9 0 0 1 9 -9 9 9 0 0 1 9 9zm14 55h68v1e1h-68zm0-3e1h68v1e1h-68zm0-3e1h68v1e1h-68z"></path>
          </svg>
        </div> --}}
      </div>
      <br><br>
      <input type="submit" name="submit" vlaue="Choose options">
    </form>

    <?php
      if(isset($_GET['submit'])){
        if(!empty($_GET['Tables'])) {
          $selected = $_GET['Tables'];
        //   echo 'You have chosen: ' . $selected;
        // } else {
        //   echo 'Please select the value.';
        // }
      }
    }
    ?>
</div>

<div class="row mx-auto">
    <div class="col-md-12">
        <br>
        <h3 class="align-middle"> {{$table_name}} </h3>
        <table class="table table-bordered">
            <tr>
                <?php
                    $columns = Schema::getColumnListing($table_name);
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
                    $columns = Schema::getColumnListing($table_name);
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
