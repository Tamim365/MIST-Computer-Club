<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('favicon.png')}}">     
    <!-- CSS Here -->
    <!-- MagnificPopup.css -->
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">
    <!-- SlickNav.css -->
    <link rel="stylesheet" href="{{URL::asset('css/slicknav.min.css')}}">
    <!-- Owl.carousel.css -->
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel-2.3.4.min.css')}}">
    <!-- Fontawesome.css -->
    <link rel="stylesheet" href="{{URL::asset('css/fontawesome-free-5.12.0.min.css')}}">
    <!-- Bootstrap.css -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-4.3.1.min.css')}}">
    <!-- Default.css -->
    <link rel="stylesheet" href="{{URL::asset('css/default.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" href="{{URL::asset('css/nav_footer.css')}}">  
    <!-- Responsive.css -->
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">  
    <!-- ColorNip.css -->
    <link rel="stylesheet" href="{{URL::asset('css/colornip.min.css')}}">
    <link id="theme" rel="stylesheet" href="{{URL::asset('css/theme-colors/theme-default.css')}}">
    <!-- Jquery -->
    <script src="{{URL::asset('js/jquery-3.4.1.min.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    @yield('header')
</head>

<body>
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
        {{-- <div class="container"> --}}
            <div class="header-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="site-logo">
                            <a data-toggle="tooltip" title="MIST Computer Club" href="{{route('/')}}">
                                <img src="{{URL::asset('mcc_logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-6 d-lg-none static text-right">
                        <div class="show-mobile-menu"></div>
                    </div>
                    <div class="col-lg-9 text-right d-none d-lg-block">
                        <nav class="menu-wrapper">
                            <ul class="main-menu" id="mobile-menu">
                                <li><a href="{{route('/')}}">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="{{url('/activities')}}">Activities and News</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Contact Us</a></li>
                                @if (session()->has('LoggedUser'))
                                    <li><a href="{{route('member.profile')}}">Profile</a></li>                                   
                                @else
                                    <li><a href="{{route('auth.login')}}">Login</a></li>
                                    <li><a href="{{route('auth.register')}}">Registration</a></li>
                                @endif
                                <!-- <li><a href="#blog">Blog</a></li> -->
                                <li class="search-trigger d-none d-lg-inline-block"><a href="javascript:void(0)"><i class="fas fa-search"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </div>
    <!-- End Header Area -->    
    <!-- End Header Area -->    
    @yield('content')
    <!-- Start Footer Area -->
    <footer class="footer-area pt-60 pb-60 black-bg" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">MCC </a>
                        </div>
                        <div class="footer-dec">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, cumque?</p>
                        </div>
                        <ul class="social-links">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h6>Features</h6>
                        </div>
                        <ul class="footer-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <!-- <li><a href="#">Terms &and; Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li> -->
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h6>Contact us</h6>
                        </div>
                        <div class="address-line">
                            <p>Address: Mirpur Cantonment, Dhaka</p>
                            <p>Phone: <a href="tel:+112345 6999">+(88)01743980063</a></p>
                            
                            <p>Email: <a href="shiaryk29@gmail.com">shiaryk29@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h6>Newsletter</h6>
                        </div>
                        <div class="newsletter-text">
                            <p>Subscribe to Newsletters and Stay informed about our news and events</p>
                        </div>
                        <form action="index.html" class="newsletter-form">
                            <input type="email" placeholder="Your email">
                            <input class="btn newsletter-btn" type="submit" value="Subscribe">
                        </form>
                    </div>
                </div> -->
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->
    <!-- End Copyright Area -->
    <div class="copyright-area black-bg">
        <div class="container">
            <div class="row ">
                <div class="col-12 text-center">
                    <!-- <div class="copyright-area ">
                        <p>Copyright © 2021 Designed by <a href="https://www.wpfreecloud.com">wpfreecloud.com</a>. All rights reserved.</p>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area -->
    <!-- JS -->
    <!-- Popper.js -->
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap.js -->
    <script src="{{URL::asset('js/bootstrap-4.3.1.min.js')}}"></script>
    <!-- Modernizr.js -->
    <script src="{{URL::asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Owl.Carousel.js -->
    <script src="{{URL::asset('js/vendor/owl.carousel-2.3.4.min.js')}}"></script>
    <script src="{{URL::asset('js/vendor/owl.carousel2.thumbs.min.js')}}"></script>
    <!-- Waypoints.js -->
    <script src="{{URL::asset('js/vendor/waypoints-4.0.1.min.js')}}"></script>
    <!-- ColorNip.js -->
    <script src="{{URL::asset('js/vendor/colornip.min.js')}}"></script>
    <!-- SlickNav.js -->
    <script src="{{URL::asset('js/vendor/slicknav.min.js')}}"></script>
    <!-- ScrollUp.js -->
    <script src="{{URL::asset('js/vendor/jquery.scrollUp.min.js')}}"></script>
    <!-- MagnificPopup.js -->
    <script src="{{URL::asset('js/vendor/magnific-popup.min.js')}}"></script>

    <!-- Main.js -->
    <script src="{{URL::asset('js/main.js')}}"></script>
</body>
</html>

