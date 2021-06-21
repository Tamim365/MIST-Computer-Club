@extends('dashboard.master')
@section('header')
<title> Dashboard|volunteer</title>
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
    <link rel="stylesheet" href="{{ asset('css/team table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        tfoot {
            display: table-header-group;
        }
    </style>
    <!-- END CSS for this page -->
@endsection
@section('content')
@php
$i=1;
$j='a';
@endphp
    <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Volunteer Tables</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Volunteer Tables</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-table"></i> Volunteer </h3>

                                </div>

                                <div class="card-body">
                                    <div style="display:flex ; align-content:center;">

                                        <div class="w3-container" style="display: inline-block; margin-top:20px">
                                          <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Add Volunteer</button>

                                          <div id="id02" class="w3-modal">
                                            <div class="w3-modal-content w3-animate-zoom">
                                              <!-- <header class="w3-container w3-teal">
                                                <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                                <h2>Modal Header</h2>
                                              </header> -->
                                              <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                              <form id="contact" action="submit_volunteer" method="post">
                                                @csrf
                                                <h3> New Volunteer Registration </h3><br>
                                                <fieldset>
                                                  <input placeholder="volunteer Name" type="text" name="volunteer_name" tabindex="1" required autofocus>
                                                </fieldset>
                                                <fieldset>
                                                    <input placeholder="Address" type="text" name="volunteer_address" tabindex="1" required autofocus>
                                                  </fieldset>

                                                  <fieldset>
                                                    <input placeholder="Level" type="text" name="volunteer_level" tabindex="1" required autofocus>
                                                  </fieldset>

                                                <fieldset>
                                                  <input placeholder="Department" type="text" name="volunteer_dept" tabindex="4" required autofocus>
                                                </fieldset>
                                                <fieldset>
                                                    <input placeholder="E-Mail" type="email" name="volunteer_email" tabindex="4" required autofocus>
                                                  </fieldset>
                                                  <fieldset>
                                                    <input placeholder="Phone" type="text" name="volunteer_phone" tabindex="4" required autofocus>
                                                  </fieldset>
                                                  <fieldset>
                                                    <input placeholder="Role" type="text" name="volunteer_role" tabindex="4" required autofocus>
                                                  </fieldset>
                                                <fieldset>
                                                  <button type="submit">Submit</button>
                                                </fieldset>

                                              </form>

                                              <!-- <footer class="w3-container w3-teal">
                                                <p>Modal Footer</p>
                                              </footer> -->
                                            </div>
                                          </div>
                                        </div>

                                      </div>

                                      <br>

                                    <div class="table-responsive">

                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Volunteer Id</th>
                                                <th>Name</span></th>
                                                <th>Address</th>
                                                <th>Department</th>
                                                <th>Level</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>

                                              </tr>
                                              <tr>
                                                @foreach ($send as $row )
                                              @php
                                                  $volunteer_id = $row['volunteer_id'];
                                              @endphp
                                              <td>{{ $row['volunteer_id'] }}</td>
                                              <td>{{ $row['volunteer_name'] }}</td>
                                              <td>{{ $row['volunteer_address'] }}</td>
                                              <td>{{ $row['volunteer_dept'] }}</td>
                                              <td>{{ $row['volunteer_level'] }}</td>
                                              <td>{{ $row['volunteer_email'] }}</td>
                                              <td>{{ $row['volunteer_phone'] }}</td>
                                              <td>{{ $row['volunteer_role'] }}</td>
                                              {{-- <td >
                                                {{-- Update Form --}}
                                                {{-- <div class="w3-container" style="display: inline-block; margin-left:1px">
                                                  <button onclick="document.getElementById('{{ $j }}').style.display='block'" class="w3-button w3-green w3-round">Edit</button>

                                                  <div id="{{ $j }}" class="w3-modal">
                                                    <div class="w3-modal-content w3-animate-zoom">
                                                      <!-- <header class="w3-container w3-teal">
                                                        <span onclick="document.getElementById('id02').style.display='none'"
                                                        class="w3-button w3-display-topright">&times;</span>
                                                        <h2>Modal Header</h2>
                                                      </header> -->
                                                      <span onclick="document.getElementById('{{ $j }}').style.display='none'"
                                                        class="w3-button w3-display-topright">&times;</span>
                                                      <form id="contact" action="update_volunteer/{{ $volunteer_id }}" method="post">
                                                        @csrf
                                                        <h3> Update volunteer Information</h3><br>
                                                        <fieldset>
                                                          <label for="">Address </label>
                                                          <input placeholder="Address" type="text" name="volunteer_address" tabindex="1" value="{{  $row['volunteer_address']  }}" >
                                                        </fieldset>
                                                        <br>



                                                        <fieldset>
                                                          <label for="hello">Email:</label>
                                                          <input placeholder="email" type="email" name="volunteer_email" tabindex="4" autofocus value="{{ $row['volunteer_email'] }}">
                                                      </fieldset>
                                                      <br>

                                                        <fieldset>
                                                           <label for="">Phone no. </label>
                                                          <input placeholder="Phone" type="text" name="volunteer_phone" tabindex="4" value="{{ $row['volunteer_phone'] }}" >
                                                        </fieldset>
                                                        <br>
                                                        <fieldset>
                                                          <button type="submit">Submit</button>
                                                        </fieldset>
                                                        <fieldset>
                                                          <button type="submit" class="w3-red" formaction="delete_volunteer/{{ $volunteer_id }}">Delete Record</button>
                                                        </fieldset>

                                                      </form>

                                                      <!-- <footer class="w3-container w3-teal">
                                                        <p>Modal Footer</p>
                                                      </footer> -->
                                                    </div>
                                                  </div>
                                                </div> --}}
                                              </td>
                                            </tr>

                                           @php
                                               $i++;
                                               $j++;
                                           @endphp
                                          @endforeach

                                        </table>



                                    </div>
                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->

                            </div>
                            <!-- end card-->

                        </div>

                    </div>
                    <!-- end row-->

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
@endsection
@section('js')
    <!-- BEGIN Java Script for this page -->
    <script src="assets/plugins/datatables/datatables.min.js"></script>
    <!-- dataTabled data -->
    <script src="assets/data/data_datatables.js"></script>
    <script>
        $(document).on('ready', function() {
            var table = $('#dataTable').DataTable({
                data: dataSet
            });
        });
    </script>
    <!-- END Java Script for this page -->
@endsection