<!-- Color Nip -->
<div class="Switcher">
<button id="Switcher__control" class="Switcher__control">
    <i class="fas fa-cogs"></i>
</button>
<h5 style="margin-bottom: 5px">Change Color</h5>
<ul id="colors" data-dir="Home/assets/css/theme-colors/">
    <li data-scheme="theme-default" data-color="#4272d7" style="background-color:#4272d7"></li>
    <li data-scheme="theme-red" data-color="#fa4251" style="background-color:#fa4251"></li>
    <li data-scheme="theme-green" data-color="#63c76a" style="background-color:#63c76a"></li>
    <li data-scheme="theme-yellow" data-color="#ffe048" style="background-color:#ffe048"></li>
    <li data-scheme="theme-orange" data-color="#f39c12" style="background-color:#f39c12"></li>
</ul>
</div>
<!-- End Color Nip -->
<div class="search-overlay"></div>
<!-- Search Modal -->
<div class="modal fade" id="search-modal">
    <div class="modal-dialog">
            <div class="modal-content">
                <form action="index.html" class="search-popup-wrapper">
                    <input type="search" placeholder="Search here...">
                    <i class="fas fa-search"></i>
                </form>
            </div>
        </div>
    </div>
    <!-- End Search Modal -->
<!-- Start Header Area -->
<div class="header-area">
    <div class="container">
        <div class="header-wrapper">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="site-logo">
                        <h2>MCC</h2>
                        <a data-toggle="tooltip" title="Be-one" href="index.html"></a>
                    </div>
                </div>
                <div class="col-6 d-lg-none static text-right">
                    <div class="show-mobile-menu"></div>
                </div>
                <div class="col-lg-9 text-right d-none d-lg-block">
                    <nav class="menu-wrapper">
                        <ul class="main-menu" id="mobile-menu">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#feature">About Us</a></li>
                            <li><a href="{{route('auth.login')}}">Login</a></li>
                            <li><a href="{{route('auth.register')}}">Registration</a></li>
                            <!-- <li><a href="#blog">Blog</a></li> -->
                            <li><a href="#contact-us">Contact Us</a></li>
                            <li class="search-trigger d-none d-lg-inline-block"><a href="javascript:void(0)"><i class="fas fa-search"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Area -->
<!-- Start Slider Area -->
<div class="slider-area ">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="slider-carousel owl-carousel">
                    <div class="single-slider slider-bg-1 text-center">
                        <div class="slider-inner">
                            <h1>WELCOME TO MCC</h1>
                            ><h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa cum sociic</h5>
                            <!-- <a class="btn get-started-btn" href="#">Get Started</a> -->
                        </div>
                    </div>
                    <div class="single-slider slider-bg-2 text-center">
                        <div class="slider-inner">
                            <h1>Free MULTIPURPSE TEMPLATE</h1>
                            <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis n</h5>                                
                            <!-- <a class="btn get-started-btn" href="#">Get Started</a> -->
                        </div>
                    </div>
                    <div class="single-slider slider-bg-3 text-center">
                        <div class="slider-inner">
                            <h1>WE PROMOTE YOUR BUSINESS</h1>
                            <h5>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis n</h5>
                            <!-- <a class="btn get-started-btn" href="#">Get Started</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->