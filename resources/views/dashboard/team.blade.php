@extends('dashboard.master')
@section('header')
    <!-- BEGIN CSS for this page -->
    <title> Dashboard|TeamTable</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/plugins/datatables/datatables.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/team table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/form.css') }}">
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
                                <h1 class="main-title float-left">TeamTables</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Team Tables</li>
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
                                    <h3><i class="fas fa-table"></i> Contest Programming Teams</h3>

                                </div>

                                <div class="card-body">
                                    <div style="display:flex ; align-content:center;">

                                        <div class="w3-container" style="display: inline-block; margin-top:20px">
                                          <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Add Team</button>
                                          <span class="text-danger">@error('coach_id'){{ $message }} @enderror</span>
                                          <span class="text-danger">@error('coach_id'){{ $message }} @enderror</span>

                                          <div id="id02" class="w3-modal">
                                            <div class="w3-modal-content w3-animate-zoom">
                                              <!-- <header class="w3-container w3-teal">
                                                <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                                <h2>Modal Header</h2>
                                              </header> -->
                                              <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                              <form id="contact" action="submit_team" method="post">
                                                @csrf
                                                <h3> New Team Registration </h3><br>
                                                <fieldset>
                                                  <input placeholder="Team Name" type="text" name="team_name" tabindex="1" required autofocus>
                                                </fieldset>
                                                <fieldset>
                                                    <input placeholder="Team Leader" type="text" name="team_leader" tabindex="1" required autofocus>
                                                  </fieldset>
                                                


                                                <fieldset>
                                                  <input placeholder="Coach ID" type="text" name="coach_id" tabindex="4" required autofocus>
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
                                                <th>Team Id</th>
                                                <th >Coach ID</span></th>
                                                <th>Team Name</th>
                                                <th>Team Leader</th>
                                              </tr>
                                              <tr>
                                                @foreach ($send as $row )
                                              @php
                                                  $team_id = $row['team_id'];
                                              @endphp
                                              <td>{{ $row['team_id'] }}</td>
                                              <td>{{ $row['coach_id'] }}</td>
                                              <td>{{ $row['team_name'] }}</td>
                                              <td>{{ $row['team_leader'] }}</td>
                                              <td >
                                                {{-- Update Form --}}
                                                <div class="w3-container" style="display: inline-block; margin-left:1px">
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
                                                        <form id="contact" action="update_team/{{ $team_id }}" method="post">
                                                            @csrf
                                                            <h3> Update Team</h3><br>
                                                            <fieldset>
                                                                <label for="">Team Name: </label>
                                                                <input placeholder="Team Name" type="text" name="team_name" tabindex="1" value="{{  $row['team_name']  }}" >
                                                            </fieldset>
                                                            <br>
                                                            
                                                            
                                                            
                                                            <fieldset>
                                                                <label for="hello">Team Leader:</label>
                                                                <input placeholder="Team Leader" type="text" name="team_leader" tabindex="4" autofocus value="{{ $row['team_leader'] }}">
                                                            </fieldset>
                                                            <br>
                                                            
                                                            <fieldset>
                                                                <label for="">Coach ID: </label>
                                                                <input placeholder="Coach Id" type="text" name="coach_id" tabindex="4" value="{{ $row['coach_id'] }}" >
                                                            </fieldset>
                                                        <br>
                                                        <fieldset>
                                                          <button type="submit">Submit</button>
                                                        </fieldset>
                                                        <fieldset>
                                                          <button type="submit" class="w3-red" formaction="delete_team/{{ $team_id }}">Delete Record</button>
                                                        </fieldset>

                                                      </form>

                                                      <!-- <footer class="w3-container w3-teal">
                                                        <p>Modal Footer</p>
                                                      </footer> -->
                                                    </div>
                                                  </div>
                                                </div>
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
    <script src="{{ URL::asset('assets/plugins/datatables/datatables.min.js') }}"></script>
    <!-- dataTabled data -->
    <script src="{{ URL::asset('assets/data/data_datatables.js') }}"></script>
    <script>
        $(document).on('ready', function() {
            var table = $('#dataTable').DataTable({
                data: dataSet
            });
        });
    </script>
    <!-- END Java Script for this page -->
@endsection