@extends('dashboard.master',['active_class' => 'rnd'])
@section('header')
    <title>Dashboard|RnD</title>
    <!-- BEGIN CSS for this page -->
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
$k=1000;
@endphp
    <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">RND Tables</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">RND Tables</li>
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
                                    <h3><i class="fas fa-table"></i>RND</h3>

                                </div>

                                <div class="card-body">
                                    <div style="display:flex ; align-content:center;">

                                        <div class="w3-container" style="display: inline-block; margin-top:20px">
                                          <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Add Project</button>

                                          <div id="id02" class="w3-modal">
                                            <div class="w3-modal-content w3-animate-zoom">
                                              <!-- <header class="w3-container w3-teal">
                                                <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                                <h2>Modal Header</h2>
                                              </header> -->
                                              <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                              <form id="contact" action="submit_rnd" method="post">
                                                @csrf
                                                <h3> New Project </h3><br>
                                                <fieldset>
                                                  <input placeholder="Project Title" type="text" name="project_title" tabindex="1" required autofocus>
                                                </fieldset>
                                                {{-- <fieldset>
                                                    <input placeholder="Budget" type="text" name="budget_id" tabindex="1" required autofocus>
                                                </fieldset> --}}
                                                <fieldset>
                                                    <input placeholder="Equipment Cost" type="text" name="project_equipment" tabindex="1"  autofocus>
                                                </fieldset>
                                                <fieldset>
                                                    <input placeholder="Labour Cost" type="text" name="project_labor" tabindex="1"  autofocus>
                                                </fieldset>
                                                <fieldset>
                                                    <input placeholder="Management Cost" type="text" name="project_management" tabindex="1"  autofocus>
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
                                                <th>Title</span></th>
                                                <th>Budget Id</th>
                                                <th>Equipment Cost</th>
                                                <th>Labour Cost</th>
                                                <th>Mangement Cost</th>
                                                <th>Edit</th>
                                                <th>Budget Status</th>


                                              </tr>
                                              <tr>
                                                @foreach ($send as $row )
                                              @php
                                                  $project_id = $row['project_id'];
                                              @endphp
                                              <td>{{ $row['project_title'] }}</td>
                                              <td>{{ $row['budget_id'] }}</td>
                                              <td>{{ $row['project_equipment'] }}</td>
                                              <td>{{ $row['project_labor'] }}</td>
                                              <td>{{ $row['project_management'] }}</td>

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
                                                      <form id="contact" action="update_rnd/{{ $project_id }}" method="post">
                                                        @csrf
                                                        <h3> Update Project Information</h3><br>
                                                        <fieldset>
                                                          <label for="">Equipment Cost</label>
                                                          <input placeholder="Equipment Cost" type="text" name="project_equipment" tabindex="1" value="{{  $row['project_equipment']  }}" >
                                                        </fieldset>
                                                        <br>



                                                        <fieldset>
                                                            <label for="">Labor Cost</label>
                                                            <input placeholder="labor Cost" type="text" name="project_labor" tabindex="1" value="{{  $row['project_labor']  }}" >
                                                          </fieldset>
                                                      <br>

                                                      <fieldset>
                                                        <label for="">Management Cost</label>
                                                        <input placeholder="Mangement Cost" type="text" name="project_management" tabindex="1" value="{{  $row['project_management']  }}" >
                                                      </fieldset>
                                                        <br>
                                                        <fieldset>
                                                          <button type="submit">Submit</button>
                                                        </fieldset>
                                                        <fieldset>
                                                          <button type="submit" class="w3-red" formaction="delete_rnd/{{ $project_id }}">Delete Record</button>
                                                        </fieldset>

                                                      </form>

                                                      <!-- <footer class="w3-container w3-teal">
                                                        <p>Modal Footer</p>
                                                      </footer> -->
                                                    </div>
                                                  </div>
                                                </div>
                                              </td>
                                              <td>
                                                @if (!$row['budget_id'])
                                                  <div class="w3-container" style="display: inline-block;">
                                                    <button onclick="document.getElementById('{{$k}}').style.display='block'" class="w3-btn w3-orange w3-round">Request Budget</button>

                                                    <div id="{{$k}}" class="w3-modal">
                                                      <div class="w3-modal-content w3-animate-zoom">
                                                        <!-- <header class="w3-container w3-teal">
                                                          <span onclick="document.getElementById('id02').style.display='none'"
                                                          class="w3-button w3-display-topright">&times;</span>
                                                          <h2>Modal Header</h2>
                                                        </header> -->
                                                        <span onclick="document.getElementById('{{$k}}').style.display='none'"
                                                          class="w3-button w3-display-topright">&times;</span>



                                                        <form id="contact" action="submit_budget" method="post">
                                                          @csrf
                                                          <h3> New Budget Allocation </h3><br>
                                                          <fieldset>
                                                            <h5>Project ID</h5>
                                                            <input value="{{$project_id}}" type="text" name="project_id" tabindex="4"  readonly>
                                                          </fieldset>
                                                          <fieldset>
                                                            <input placeholder="Budget Amount" type="text" name="Budget_Amount" tabindex="1" required autofocus>
                                                          </fieldset>
                                                          <fieldset>
                                                            <textarea placeholder="Budget Proposal Info" name="Budget_Proposal_Info" tabindex="5" required></textarea>
                                                          </fieldset>
                                                          <fieldset>
                                                            <input placeholder="Remarks" type="text" name="remarks" tabindex="4"  autofocus>
                                                          </fieldset>
                                                          <fieldset>
                                                            <button type="submit" class="w3-btn w3-orange w3-round">Request</button>
                                                          </fieldset>

                                                        </form>

                                                        <!-- <footer class="w3-container w3-teal">
                                                          <p>Modal Footer</p>
                                                        </footer> -->
                                                      </div>
                                                    </div>
                                                  </div>
                                                @else
                                                @php
                                                    $budget = DB::table('budgets')->where('budget_id', '=', $row['budget_id'])->get()[0];
                                                    $budget_status = $budget->budget_status;
                                                @endphp
                                                  @if ($budget_status == 'Accepted')
                                                      <button class="w3-btn w3-teal w3-round">Accepted</button>
                                                  @elseif ($budget_status == 'Declined')
                                                      <button class="w3-btn w3-red w3-round">Declined</button>
                                                  @else
                                                      <button class="w3-btn w3-blue w3-round">Pending</button>
                                                  @endif
                                                @endif


                                                      </td>
                                            </tr>

                                           @php
                                               $i++;
                                               $j++;
                                               $k++
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
