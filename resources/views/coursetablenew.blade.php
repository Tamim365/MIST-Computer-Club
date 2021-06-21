
@php
$i=1;
$j='a';
$k = 1000;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <title> Course Table</title>
    <meta name="description" content="DataTables | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

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
</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.html" class="logo">
                    <img alt="Logo" src="assets/images/logo.png" />
                    <span>ADMIN</span>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">


                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->


                            <!-- item-->
                            <a href="profile.html" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>
        <!-- End Navigation -->

        <!-- Left Sidebar -->
        <div class="left main-sidebar">

            <div class="sidebar-inner leftscroll">

                <div id="sidebar-menu">

                    <ul>

                        <li class="submenu">
                            <a href="{{ route('dashboard.index') }}">
                                <i class="fas fa-bars"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{ route('user.index') }}">
                                <i class="fas fa-user"></i>
                                <span> Users </span>
                            </a>
                        </li>



                        <li class="submenu">
                            <a href="{{ route('budget.table') }}">
                                <i class="fas fa-money-check-alt"></i>
                                <span> Budgets </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ route('blog.index') }}" >
                                <i class="far fa-calendar-alt"></i>
                                <span> Event And Activities </span>
                            </a>
                        </li>


                        {{-- <li class="submenu">
                            <a id="tables" href="#">
                                <i class="fas fa-table"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li class="active">
                                    <a class="active" href="tables-datatable.html">Data Tables</a>
                                </li>
                            </ul>
                        </li> --}}
                        <li class="submenu ">
                            <a href="{{ route('courses.table') }}" class="active">
                                <i class="fab fa-leanpub"></i>
                                <span> Courses </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('team.table') }}" >
                                <i class="fas fa-users"></i>
                                <span> Teams </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('coach.table') }}" >
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span> Coach </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('contest.table') }}" >
                                <i class="fas fa-laptop-code"></i>
                                <span> Contest </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('rnd.table') }}" >
                                <i class="fas fa-briefcase"></i>
                                <span> RND </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('vol.table')  }}" >
                                <i class="fas fa-hands-helping"></i>
                                <span> Volunteer </span>
                            </a>
                        </li>




                    </ul>

                    <div class="clearfix"></div>

                </div>

                <div class="clearfix"></div>

            </div>

        </div>
        <!-- End Sidebar -->

        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Course Tables</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Course Tables</li>
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
                                    <h3><i class="fas fa-table"></i> All Courses Going On</h3>

                                </div>

                                <div class="card-body">
                                    <div style="display:flex ; align-content:center;">

                                        <div class="w3-container" style="display: inline-block; margin-top:20px">
                                          <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-round">Add Course</button>

                                          <div id="id02" class="w3-modal">
                                            <div class="w3-modal-content w3-animate-zoom">
                                              <!-- <header class="w3-container w3-teal">
                                                <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                                <h2>Modal Header</h2>
                                              </header> -->
                                              <span onclick="document.getElementById('id02').style.display='none'"
                                                class="w3-button w3-display-topright">&times;</span>
                                              <form id="contact" action="submit_course" method="post">
                                                @csrf
                                                <h3> New Course Registration </h3><br>
                                                <fieldset>
                                                  <input placeholder="Course Name" type="text" name="Course_name" tabindex="1" required autofocus>
                                                </fieldset>
                                                <fieldset>
                                                  <label for="birthday">Start Date:</label>
                                                  <input  placeholder="Your Email Address" type="date" name="start" tabindex="2" required>
                                                </fieldset>
                                                <fieldset>
                                                  <textarea placeholder="Course Description" name="info" tabindex="5" required></textarea>
                                                </fieldset>
                                                <fieldset>
                                                  <input placeholder="Mentor Fee" type="text" name="mentor_fee" tabindex="4" required autofocus>
                                                </fieldset>
                                                <fieldset>
                                                  <input placeholder="Course Materials Fee" type="text" name="mat_fee" tabindex="4" required autofocus>
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
                                                <th>Course Id</th>
                                                <th>Course Name</span></th>
                                                <th>Start Date</th>
                                                <th>Status</th>
                                                <th>Decription</th>
                                                <th>Budget Status</th>
                                              </tr>
                                              <tr>
                                                @foreach ($send as $row )
                                              @php
                                                  $course_id = $row['course_id'];
                                              @endphp
                                              <td>{{ $row['course_id'] }}</td>
                                              <td>{{ $row['course_name'] }}</td>
                                              <td>{{ date('d-m-Y', strtotime($row['start_date']))}}</td>
                                              <td>{{ $row['course_status'] }}</td>
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
                                                        {{ $row['course_info'] }}
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
                                                      <form id="contact" action="update_course/{{ $course_id }}" method="post">
                                                        @csrf
                                                        <h3> Update Course</h3><br>
                                                        <fieldset>
                                                          <label for="">Course Name: </label>
                                                          <input placeholder="Course Name" type="text" name="Course_name" tabindex="1" value="{{  $row['course_name']  }}" >
                                                        </fieldset>
                                                        <br>
                                                        <fieldset>
                                                          <label for="">Start Date:</label>
                                                          @php
                                                           $date = date('Y-m-d', strtotime($row['start_date']));
                                                          @endphp
                                                          <input  type="date" name="start" tabindex="2" value={{ $date }}>
                                                        </fieldset>
                                                        <br>
                                                        <fieldset>
                                                          <label for="">End Date:</label>
                                                          <input  type="date" name="end" tabindex="2" >
                                                        </fieldset>
                                                        <br>
                                                      <br>
                                                        <fieldset>
                                                           <label for="hello">Course Status:</label>
                                                          <input placeholder="Course Status" type="text" name="status" tabindex="1" value="{{  $row['course_status'] }}">
                                                        </fieldset>
                                                        <br>
                                                        <fieldset>
                                                           <label for="hello">Budget ID:</label>
                                                          <input placeholder="Budget ID" type="text" name="status" tabindex="1" value="{{  $row['budget_id'] }}" readonly>
                                                        </fieldset>
                                                        <br>
                                                        <fieldset>
                                                           <label for="">Materials Fee: </label>
                                                          <input placeholder="Course Materials Fee" type="text" name="mat_fee" tabindex="4" value="{{ $row['course_materialsfee'] }}" >
                                                        </fieldset>
                                                        <br>
                                                        <fieldset>
                                                          <button type="submit">Submit</button>
                                                        </fieldset>
                                                        <fieldset>
                                                          <button type="submit" class="w3-red" formaction="delete_course/{{ $course_id }}">Delete Record</button>
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
                                                    <h5>Course ID</h5>
                                                    <input value="{{$course_id}}" type="text" name="course_id" tabindex="4"  readonly>
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

        <footer class="footer">
            {{-- <span class="text-right">
                Copyright <a target="_blank" href="#">Your Company</a>
            </span>
            <span class="float-right">
                <!-- Copyright footer link MUST remain intact if you download free version. -->
                <!-- You can delete the links only if you purchased the pro or extended version. -->
                <!-- Purchase the pro or extended version with PHP version of this template: https://bootstrap24.com/template/nura-admin-4-free-bootstrap-admin-template -->
                Powered by <a target="_blank" href="https://bootstrap24.com" title="Download free Bootstrap templates"><b>Bootstrap24.com</b></a>
            </span> --}}
        </footer>

        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/moment.min.js"></script>

        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>

        <!-- App js -->
        <script src="assets/js/admin.js"></script>

    </div>
    <!-- END main -->

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

</body>

</html>
