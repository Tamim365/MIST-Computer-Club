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
      border: none;
      border: 2px solid #30e3ca;
      border-radius: 4px;
      color: black;
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
    <form action="{{route('tables.load')}}" method="post" class="mb-3">
    @csrf
      <div class="select-block">
        <select name="Tables">
          <option value="" disabled selected>Choose option</option>
          @foreach ($all_table_names as $item)
              <option value="{{$item}}">{{$item}}</option>
          @endforeach
          {{-- <option value="Members">Members</option>
          <option value="Customer">Customer</option> --}}
        </select>
      </div>
      <br><br>
      <input type="submit" name="submit" value="Load"/>
    </form>

    <?php
      if(isset($_POST['submit'])){
        if(!empty($_POST['Tables'])) {
          $table_name = $_POST['Tables'];
        //   echo 'You have chosen: ' . $table_name;
        } else {
          echo 'Please select the value.';
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
                    // echo $table_name;
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
                <?php $columns = Schema::getColumnListing($table_name);?>
                    @foreach ($columns as $item)
                    {
                      <?php
                      try {
                        echo "<td>".$row[$item]."</td>";
                      } catch (Throwable $th) {
                        echo "<td>null</td>";
                      }
                      ?>
                    }
                    @endforeach 
             </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection
