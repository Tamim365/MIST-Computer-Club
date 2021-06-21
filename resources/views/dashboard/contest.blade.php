@extends('dashboard.master',['active_class' => 'contest'])
@section('header')
<title> Dashboard|contest</title>
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
                                <h1 class="main-title float-left">Contest Tables</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Contest Tables</li>
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
                                    <h3><i class="fas fa-table"></i> Contest</h3>

                                </div>

                                <div class="card-body">
                                    <div style="display:flex ; align-content:center;">


                                        <div class="w3-container" style="display: inline-block; margin-top:20px">
                                          <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">New Contest</button>

                                          <div id="id02" class="w3-modal">
                                            <div class="w3-modal-content w3-animate-zoom">
                                              <!-- <header class="w3-container w3-teal">
                                                <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                                <h2>Modal Header</h2>
                                              </header> -->
                                              <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>



                                              <form id="contact" action="submit_contest" method="post">
                                                @csrf
                                                <h3> Add Programming Contest </h3><br>
                                                <fieldset>
                                                  <input placeholder="Competition Name" type="text" name="contest_name" tabindex="1" required autofocus>
                                                </fieldset>
                                                <fieldset>
                                                  <label for="birthday"> Competition Date</label>
                                                  <input  type="date" name="contest_date" tabindex="2" required>
                                                </fieldset>
                                                <fieldset>
                                                  <textarea placeholder="Host University" name="university" tabindex="5" required></textarea>
                                                </fieldset>

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
                                                <th>Competition Name</th>
                                                <th>Contest Date</th>
                                                <th>Host University</th>

                                              </tr>
                                              <tr>
                                                @foreach ($send as $row )
                                                @php
                                                    $contest_id = $row['contest_name'];
                                                @endphp
                                                <td>{{ $row['contest_name'] }}</td>
                                                <td>{{ date('d-m-Y', strtotime($row['contest_date']))}}</td>
                                                <td>{{ $row['university'] }}</td>

                                                <td >
                                                  {{-- <div class="w3-container" style="display: inline-block;">
                                                    <button onclick="document.getElementById('{{ $i }}').style.display='block'" class="w3-button w3-green w3-round">View</button>

                                                    <div id="{{ $i }}" class="w3-modal">
                                                      <div class="w3-modal-content w3-animate-zoom">
                                                        <header class="w3-container w3-teal">
                                                          <span onclick="document.getElementById('{{ $i }}').style.display='none'"
                                                          class="w3-button w3-display-topright">&times;</span>
                                                          <h2>Modal Header</h2>
                                                        </header>
                                                        <div class="w3-container"> --}}
                                                          {{-- <p>Some text..</p>
                                                          <p>Some text..</p> --}}
                                                          {{-- {{ $row['contest_proposal_info'] }}
                                                        </div>
                                                        <footer class="w3-container w3-teal">
                                                          <p>Modal Footer</p>
                                                        </footer>
                                                      </div>
                                                    </div>
                                                  </div> --}}
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
                                                        <form id="contact" action="update_contest/{{ $contest_id }}" method="post">
                                                          @csrf
                                                          <h3> Update contest</h3><br>
                                                          <fieldset>
                                                            <label for="">contest Amount: </label>
                                                            <input placeholder="contest Amount" type="text" name="contest_Amount" tabindex="1" value="{{  $row['contest_amount'] }}" >
                                                          </fieldset>
                                                          <br>
                                                          <fieldset>
                                                            <label for="">contest Transaction Date</label>
                                                            @php
                                                             $date = date('Y-m-d', strtotime($row['contest_transaction_date']));
                                                            @endphp
                                                            <input  type="date" name="contest_Transaction_Date" tabindex="2" value={{ $date }}>
                                                          </fieldset>
                                                          <br>
                                                          <fieldset>
                                                            <label for="">contest Remain:</label>
                                                            <input  type="text" name="contest_Remain" tabindex="2" >
                                                          </fieldset>
                                                          <br>
                                                          <fieldset>
                                                             <label for="hello">Remarks:</label>
                                                            <input placeholder="Remarks" type="text" name="remarks" tabindex="1" value="{{  $row['remarks'] }}">
                                                          </fieldset>
                                                          <br>

                                                          <fieldset>
                                                            <button type="submit">Submit</button>
                                                          </fieldset>
                                                          <fieldset>
                                                            <button type="submit" class="w3-red" formaction="delete_contest/{{ $contest_id }}">Delete Record</button>
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
