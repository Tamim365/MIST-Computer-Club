@extends('dashboard.master',['active_class' => 'fest'])
@section('header')
<title>Dashboard|Events</title>
    <!-- BEGIN CSS for this page -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
    <link rel="stylesheet" href="{{ asset('css/team table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        tfoot {
            display: table-header-group;
        }
        .uploadcare--jcrop-holder>div>div, #preview {
  /* border-radius: 50%; */
}

.uploadcare--widget__button_type_cancel .uploadcare--widget__button_type_remove{
    display: none;
}

.uploadcare--widget__file-name, .uploadcare--widget__file-size {
    display: inline;
}

/* Styles and stuff for the page */
#preview {
  margin-top: 1rem;
}
    </style>
    <!-- END CSS for this page -->
@endsection
@section('content')
    
@php
$i=1;
$j='a';
$k = 1000;
@endphp

<div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">EVentTables</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Event Tables</li>
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
                                    <h3><i class="fas fa-table"></i> All Events</h3>

                                </div>

                                <div class="card-body">
                                    <div style="display:flex ; align-content:center;">


                                        <div class="w3-container" style="display: inline-block; margin-top:20px">
                                          <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Add Event</button>

                                          <div id="id02" class="w3-modal">
                                            <div class="w3-modal-content w3-animate-zoom">
                                              <!-- <header class="w3-container w3-teal">
                                                <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                                <h2>Modal Header</h2>
                                              </header> -->
                                              <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>

                                                <script>
                                                    UPLOADCARE_PUBLIC_KEY = "a51f2657278fde93b5e2";
                                                    UPLOADCARE_EFFECTS = 'crop';
                                                    UPLOADCARE_IMAGES_ONLY = true;
                                                    UPLOADCARE_PREVIEW_STEP = true;
                                                    UPLOADCARE_CLEARABLE = true;
                                                </script>
                                                <script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js" charset="utf-8"></script>
                                                <script src="https://ucarecdn.com/libs/widget-tab-effects/1.x/uploadcare.tab-effects.js"></script>
                                              <form id="contact" action="submit_fest" method="post">
                                                @csrf
                                                <h3> New Event Register </h3><br>
                                                <fieldset>
                                                  <input placeholder="Fest Title" type="text" name="fest_title" tabindex="1" required autofocus>
                                                </fieldset>
                                                {{-- <fieldset>
                                                    <input placeholder="Budget ID" type="text" name="budget_id" tabindex="1" required autofocus>
                                                </fieldset> --}}
                                                <fieldset>
                                                  <label for="birthday">Fest Date:</label>
                                                  <input  placeholder="" type="date" name="fest_date" tabindex="2" required>
                                                </fieldset>
                                                <fieldset>
                                                  <textarea placeholder="Fest Description" name="fest_description" tabindex="5" required></textarea>
                                                </fieldset>
                                                <fieldset>
                                                  <input placeholder="Fest Expenses" type="text" name="fest_expenses" tabindex="4" required autofocus>
                                                </fieldset>
                                                <fieldset>
                                                    <label for="">Fest Logo</label>
                                                    <input type="hidden" name="picture" role="uploadcare-uploader" data-crop="1:1" data-images-only>
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
                                                <th>Fest Id</th>
                                                <th>Fest Title</span></th>
                                                <th>Budget ID</th>
                                                <th>Fest Date</th>
                                                <th>Fest Expenses</th>
                                                <th>Action</th>
                                                <th>Budget Status</th>

                                              </tr>
                                              <tr>
                                                @foreach ($send as $row )
                                              @php
                                                  $fest_id = $row['fest_id'];
                                              @endphp
                                              <td>{{ $row['fest_id'] }}</td>
                                              <td>{{ $row['fest_title'] }}</td>
                                              <td>{{ $row['budget_id'] }}</td>
                                              <td>{{ date('d-m-Y', strtotime($row['fest_date']))}}</td>
                                              <td>{{ $row['fest_expenses'] }}</td>
                                              <td >
                                                <div class="w3-container" style="display: inline-block;">
                                                  <button onclick="document.getElementById('{{ $i }}').style.display='block'" class="w3-button w3-green w3-round">View</button>

                                                  <div id="{{ $i }}" class="w3-modal">
                                                    <div class="w3-modal-content w3-animate-zoom">
                                                      <header class="w3-container w3-teal">
                                                        <span onclick="document.getElementById('{{ $i }}').style.display='none'"
                                                        class="w3-button w3-display-topright">&times;</span>
                                                        <h2>Modal Header</h2>
                                                      </header>
                                                      <div class="w3-container">
                                                        {{-- <p>Some text..</p>
                                                        <p>Some text..</p> --}}
                                                        {{ $row['fest_description'] }}
                                                      </div>
                                                      <footer class="w3-container w3-teal">
                                                        <p>Modal Footer</p>
                                                      </footer>
                                                    </div>
                                                  </div>
                                                </div>
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
                                                      <form id="contact" action="update_fest/{{ $fest_id }}" method="post">
                                                        @csrf
                                                        <h3> Update Event</h3><br>
                                                        <fieldset>
                                                          <label for="">Fest Title: </label>
                                                          <input placeholder="Fest Title" type="text" name="fest_title" tabindex="1" value="{{  $row['fest_title']  }}" >
                                                        </fieldset>
                                                        <br>
                                                        <fieldset>
                                                          <label for="">Fest Date:</label>
                                                          @php
                                                           $date = date('Y-m-d', strtotime($row['fest_date']));
                                                          @endphp
                                                          <input  type="date" name="fest_date" tabindex="2" value={{ $date }}>
                                                        </fieldset>
                                                        <br>
                                                      <br>

                                                        <fieldset>
                                                           <label for="">Fest Expenses </label>
                                                          <input placeholder="Fest Expenses" type="text" name="fest_expenses" tabindex="4" value="{{ $row['fest_expenses'] }}" >
                                                        </fieldset>
                                                        <br>
                                                        <fieldset>
                                                          <button type="submit">Submit</button>
                                                        </fieldset>
                                                        <fieldset>
                                                          <button type="submit" class="w3-red" formaction="delete_fest/{{ $fest_id }}">Delete Record</button>
                                                        </fieldset>

                                                      </form>

                                                      <!-- <footer class="w3-container w3-teal">
                                                        <p>Modal Footer</p>
                                                      </footer> -->
                                                    </div>
                                                  </div>
                                                </div>

                                        {{-- check for budget --}}
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
                                                    <h5>fest ID</h5>
                                                    <input value="{{$fest_id}}" type="text" name="fest_id" tabindex="4"  readonly>
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
                                               $k++;
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


