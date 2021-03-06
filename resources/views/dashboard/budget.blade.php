@extends('dashboard.master',['active_class' => 'budget'])
@section('header')
<title>Dashboard|Budget</title>
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
    {{-- <link rel="stylesheet" href="css/team table.css"> --}}
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
                                <h1 class="main-title float-left">Budget Tables</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Budget Tables</li>
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
                                    <h3><i class="fas fa-table"></i> Budgets</h3>

                                </div>

                                <div class="card-body">
                                    <div style="display:flex ; align-content:center;">


                                        <div class="w3-container" style="display: inline-block; margin-top:20px">
                                          <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Add Budget</button>

                                          <div id="id02" class="w3-modal">
                                            <div class="w3-modal-content w3-animate-zoom">
                                              <!-- <header class="w3-container w3-teal">
                                                <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                                <h2>Modal Header</h2>
                                              </header> -->
                                              <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>



                                              <form id="contact" action="submit_budget" method="post">
                                                @csrf
                                                <h3> New Budget Allocation </h3><br>
                                                <fieldset>
                                                  <input placeholder="Budget Amount" type="text" name="Budget_Amount" tabindex="1" required autofocus>
                                                </fieldset>
                                                <fieldset>
                                                  <label for="birthday">Budget Transaction Date</label>
                                                  <input  type="date" name="Budget_Transaction_Date" tabindex="2" required>
                                                </fieldset>
                                                <fieldset>
                                                  <textarea placeholder="Budget Proposal Info" name="Budget_Proposal_Info" tabindex="5" required></textarea>
                                                </fieldset>
                                                <fieldset>
                                                  <input placeholder="Remarks" type="text" name="remarks" tabindex="4"  autofocus>
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
                                                <th>Budget Id</th>
                                                <th>Amount</th>
                                                <th>Transaction Date</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                              </tr>
                                              <tr>
                                                @foreach ($send as $row )
                                                @php
                                                    $budget_id = $row['budget_id'];
                                                @endphp
                                                <td>{{ $row['budget_id'] }}</td>
                                                <td>{{ $row['budget_amount'] }}</td>
                                                <td>{{ date('d-m-Y', strtotime($row['budget_transaction_date']))}}</td>
                                                <td>{{ $row['remarks'] }}</td>
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
                                                        <form id="contact" action="update_budget/{{ $budget_id }}" method="post">
                                                          @csrf
                                                          <h3> Update Budget</h3><br>
                                                          <fieldset>
                                                            <label for="">Budget Amount: </label>
                                                            <input placeholder="Budget Amount" type="text" name="Budget_Amount" tabindex="1" value="{{  $row['budget_amount'] }}" >
                                                          </fieldset>
                                                          <br>
                                                          <fieldset>
                                                            <label for="">Budget Transaction Date</label>
                                                            @php
                                                             $date = date('Y-m-d', strtotime($row['budget_transaction_date']));
                                                            @endphp
                                                            <input  type="date" name="Budget_Transaction_Date" tabindex="2" value={{ $date }}>
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
                                                            <button type="submit" class="w3-red" formaction="delete_budget/{{ $budget_id }}">Delete Record</button>
                                                          </fieldset>

                                                        </form>

                                                        <!-- <footer class="w3-container w3-teal">
                                                          <p>Modal Footer</p>
                                                        </footer> -->
                                                      </div>
                                                    </div>
                                                  </div>

                                                @php
                                                    $budget_status = $row['budget_status'];
                                                @endphp
                                                @if ($budget_status == 'Pending')
                                                    <form method="post" style="display: inline-block">
                                                        @csrf
                                                        <button type="submit" class="w3-btn w3-green w3-round" formaction="accept_budget/{{ $budget_id }}">Accept</button>
                                                        <button type="submit" class="w3-btn w3-red w3-round" formaction="decline_budget/{{ $budget_id }}">Decline</button>
                                                    </form>
                                                @elseif ($budget_status == 'Accepted')
                                                    <button class="w3-btn w3-teal w3-round">Accepted</button>
                                                @else
                                                    <button class="w3-btn w3-red w3-round">Declined</button>
                                                @endif

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

                            <div class="row">
                              <div class="col-xl-12">
                                  <div class="breadcrumb-holder">
                                    @php
                                        $amount = DB::select('SELECT SUM(BUDGET_AMOUNT) AS total FROM BUDGETS WHERE BUDGET_STATUS = :status', ['status'=>'Accepted'])[0];
                                    @endphp
                                      <h1 class="main-title float-left">Total Amount: {{$amount->total}}</h1>
                                      
                                      <div class="clearfix"></div>
                                  </div>
                              </div>
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
        <!-- END content-page -->
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