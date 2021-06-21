<!DOCTYPE html>
<html lang="en">

<head>
    <title>Event And Activity</title>
    <meta name="description" content="Add blog posts | Nura Admin">
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
    <link rel="stylesheet" href="assets/plugins/trumbowyg/ui/trumbowyg.min.css">
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
                            <img src="assets/images/avatars/no-avatar.png" alt="Profile image" class="avatar-rounded">
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
                            <a href="{{ route('budget.table') }}" >
                                <i class="fas fa-money-check-alt"></i>
                                <span> Budgets </span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="far fa-calendar-alt"></i>
                                <span> Event And Activities </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="{{ route('blog.index') }}">List Event and Activity posts</a>
                                </li>
                                <li class="active">
                                    <a class="active" href="{{ route('blog_add.index') }}">Add Event And Activity post</a>
                                </li>
                            </ul>
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
                                <h1 class="main-title float-left">Add blog post</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                                    <li class="breadcrumb-item active">Add blog post</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <form action="#" method="post" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="form-group col-xl-9 col-md-8 col-sm-12">
                                                <div class="form-group">
                                                    <label>Article title</label>
                                                    <input class="form-control" name="title" type="text" required>
                                                </div>

                                                <div class="form-group">
                                                    <label>Article content</label>
                                                    <textarea rows="3" class="form-control editor" name="content"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Thumbnail image</label><br />
                                                    <input type="file" name="image">
                                                </div>

                                                <div class="form-group">
                                                    <button type="button" class="btn btn-primary">Add article</button>
                                                </div>
                                            </div>

                                            <div class="form-group col-xl-3 col-md-4 col-sm-12 border-left">
                                                <div class="form-group">
                                                    <label>Meta title</label>
                                                    <input type="text" class="form-control" name="meta_title">
                                                </div>

                                                <div class="form-group">
                                                    <label>Meta description</label>
                                                    <input type="text" class="form-control" name="meta_description">
                                                </div>

                                                <div class="form-group">
                                                    <label>Tags</label>
                                                    <input type="text" class="form-control" name="keywords" id="tags" value="">
                                                </div>

                                                <div class="form-group">
                                                    <label>Article status</label>
                                                    <select name="status" class="form-control">
                                                        <option value="active">Active (published)</option>
                                                        <option value="draft">Save draft</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Select category</label>
                                                    <select name="categ_id" class="form-control" required>
                                                        <option value="">- select -</option>
                                                        <option value="10">Blog</option>
                                                        <option value="6">News</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div><!-- end row -->
                                    </form>

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

    <!-- BEGIN Java Script for this page -->
    <script src="assets/plugins/trumbowyg/trumbowyg.min.js"></script>
    <script src="assets/plugins/trumbowyg/plugins/upload/trumbowyg.upload.js"></script>
    <script>
        $(document).on('ready',function() {
            'use strict';
            $('.editor').trumbowyg();
        });
    </script>
    <!-- END Java Script for this page -->

</body>

</html>
