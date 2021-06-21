<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
    <meta name="description" content="Blog posts | Nura Admin">
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
</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="index.html" class="logo">
                    <img alt="Logo" src="assets/images/logo.png" />
                    <span> ADMIN</span>
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
                            <div class="dropdown-item noti-title">

                            </div>

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
                            <a href="{{ route('budget.table') }}" >
                                <i class="fas fa-money-check-alt"></i>
                                <span> Budgets </span>
                            </a>
                        </li>


                        <li class="submenu">
                            <a href="{{ route('blog.index') }}" class="active">
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
                            <a href="{{ route('rnd.table') }}">
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
                                <h1 class="main-title float-left">Event And Activities</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Blog posts</li>
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
                                    <span class="pull-right"><a href="{{ route('blog_add.index') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus" aria-hidden="true"></i> Add new post</a></span>
                                    <h3><i class="far fa-file-alt"></i> Event and Activities</h3>
                                </div>
                                <!-- end card-header -->

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="min-width: 300px">Article details</th>
                                                    <th style="width:110px">Category</th>
                                                    <th style="min-width:110px">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="blog_list"><img class="img-fluid d-none d-lg-block" alt="image" src="https://via.placeholder.com/180x120" /></div>
                                                        <h4> Vivamus condimentum rutrum odio</h4>

                                                    </td>

                                                    <td>Event and Activities</td>

                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i> Edit</a>
                                                        <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="blog_list"><img class="img-fluid d-none d-lg-block" alt="image" src="https://via.placeholder.com/180x120" /></div>
                                                        <h4>Duis scelerisque eros sit amet risus lobortis</h4>

                                                    </td>

                                                    <td>Event and Activities/td>

                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i> Edit</a>
                                                        <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i> Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="blog_list"><img class="img-fluid d-none d-lg-block" alt="image" src="https://via.placeholder.com/180x120" /></div>
                                                        <h4>Vestibulum justo et feugiat consectetur</h4>

                                                    </td>

                                                    <td>Event and Activities</td>

                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i> Edit</a>
                                                        <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i> Delete</a>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

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

</body>

</html>
