<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <title> Dashboard</title> --}}
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap CSS -->
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="{{URL::asset('assets/font-awesome/css/all.css')}}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

    @yield('header')

</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="{{route('/')}}" class="logo">
                    <img alt="Logo" src="{{URL::asset('assets/images/logo.png')}}" />
                    <span> Admin</span>
                </a>
            </div>

            <nav class="navbar-custom">

                <ul class="list-inline float-right mb-0">



                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" aria-haspopup="false" aria-expanded="false">
                            <img src="{{URL::asset('assets/images/avatars/admin.png')}}" alt="Profile image" class="avatar-rounded">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->


                            <!-- item-->
                            <a href="profile.html" class="dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="{{route('auth.logout')}}" class="dropdown-item notify-item">
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
                            <a href="{{ url('/dashboard') }}" class="@if($active_class=='dashboard') active @endif">
                                <i class="fas fa-bars"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{url('dashboard/user') }}" class="@if($active_class=='user') active @endif">
                                <i class="fas fa-user"></i>
                                <span> Members </span>
                            </a>
                        </li>



                        <li class="submenu">
                            <a href="{{ route('budget.table') }}" class="@if($active_class=='budget') active @endif">
                                <i class="fas fa-money-check-alt"></i>
                                <span> Budgets </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ route('blog.index') }}" class="@if($active_class=='fest') active @endif">
                                <i class="far fa-calendar-alt"></i>
                                <span> Event And Activities </span>
                            </a>
                        </li>

                        <li class="submenu">
                            <a href="{{ route('dashboard.committee') }}" class="@if($active_class=='committee') active @endif">
                                <i class="far fa-calendar-alt"></i>
                                <span> Committee </span>
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
                            <a href="{{ route('courses.table') }}" class="@if($active_class=='course') active @endif" >
                                <i class="fab fa-leanpub"></i>
                                <span> Courses </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('team.table') }}" class="@if($active_class=='team') active @endif"  >
                                <i class="fas fa-users"></i>
                                <span> Teams </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('coach.table') }}" class="@if($active_class=='coach') active @endif" >
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span> Coach </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('contest.table') }}" class="@if($active_class=='contest') active @endif">
                                <i class="fas fa-laptop-code"></i>
                                <span> Contest </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('rnd.table') }}" class="@if($active_class=='rnd') active @endif" >
                                <i class="fas fa-briefcase"></i>
                                <span> RND </span>
                            </a>
                        </li>
                        <li class="submenu ">
                            <a href="{{ route('vol.table')  }}"  class="@if($active_class=='volunteer') active @endif">
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

        @yield('content')
        
        <!-- END content-page -->
        
    </div>
    <script src="{{URL::asset('assets/js/modernizr.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/moment.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{URL::asset('assets/js/detect.js')}}"></script>
    <script src="{{URL::asset('assets/js/fastclick.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.nicescroll.js')}}"></script>

    <!-- App js -->
    <script src="{{URL::asset('assets/js/admin.js')}}"></script>
    <!-- END main -->
    @yield('js')
</body>

</html>
