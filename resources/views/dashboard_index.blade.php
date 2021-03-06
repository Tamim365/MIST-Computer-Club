<!DOCTYPE html>
<html lang="en">

<head>
    <title> Dashboard</title>
    <meta name="description" content="Dashboard | Nura Admin">
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
    <link rel="stylesheet" type="text/css" href="assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/datatables/datatables.min.css" />
    <link rel="stylesheet" href="{{ asset('css/team table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                    <span> Admin</span>
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
                            <a href="{{ route('dashboard.index') }}" class="active">
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
                            <a href="{{ route('blog.index') }}">
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
                            <a href="{{ route('courses.table') }}" >
                                <i class="fab fa-leanpub"></i>
                                <span> Courses </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('team.table') }}"  >
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
                                <h1 class="main-title float-left">Dashboard</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>


                        </div>
                    </div>
                    <!-- end row --





                 END container-fluid -->

                 <div>
                    <img src="{{ URL::asset('mcc_logo.png') }}" alt="" style="max-width: 70% ; max-height:70%">
                 </div>
            </div>
            <!-- END content -->

        </div>
        <!-- END content-page -->

        <footer class="footer">
            {{-- <span class="text-right">
                Copyright <a target="_blank" href="#">Company</a>
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
    <script src="assets/plugins/chart.js/Chart.min.js"></script>
    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <!-- Counter-Up-->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- dataTabled data -->
    <script src="assets/data/data_datatables.js"></script>

    <!-- Charts data -->
    <script src="assets/data/data_charts_dashboard.js"></script>
    <script>
        $(document).on('ready', function() {
            // data-tables
            $('#dataTable').DataTable({
                data: dataSet,
                columns: [{
                    title: "Name"
                }, {
                    title: "Position"
                }, {
                    title: "Office"
                }, {
                    title: "Extn."
                }, {
                    title: "Date"
                }, {
                    title: "Salary"
                }]
            });

            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });
        });
    </script>
    <!-- END Java Script for this page -->

</body>

</html>
