<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title') | Welcome to Chandra Frontend
        @show
    </title>
    <!-- global css Start -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/front_lib.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- //global css End -->
    <!-- page level css Start -->
    @yield('header_styles')
    <!-- //page level css End -->

</head>

<body>
    <!-- Header Section Start -->
    <header>
        <nav class="navbar ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"></a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li {{ (Request::is('/') ? 'class=active' : '') }}><a href="{{ route('home') }}"> Home</a>
                    </li>
                    <li class="dropdown {{ (Request::is('aboutus') || Request::is('timeline') || Request::is('blank') ? 'active' : '') }}"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pages</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('aboutus') }}">About Us</a></li>
                            <li><a href="{{ URL::to('timeline') }}">Timeline</a></li>
                            <li><a href="{{ URL::to('404') }}">404 Page</a>
                            </li>
                            <li><a href="{{ URL::to('500') }}">500 Page</a>
                            </li>
                            <li><a href="{{ URL::to('blank') }}">Blank</a></li>
                        </ul>
                    </li>
                    <li class="dropdown {{ (Request::is('typography') || Request::is('advancedfeatures') || Request::is('grid') ? 'active' : '') }}"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Features</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('typography') }}">Typography</a>
                            </li>
                            <li><a href="{{ URL::to('advancedfeatures') }}">Advanced Features</a>
                            </li>
                            <li><a href="{{ URL::to('grid') }}">Grid System</a>
                            </li>
                            <li class="hidden-xs hidden-lg hidden-md"><a href="{{ URL::to('price') }}">Price</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown {{ (Request::is('portfolio') || Request::is('portfolioitem') ? 'active' : '') }}"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Portfolio</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('portfolio') }}">Portfolio</a>
                            </li>
                            <li><a href="{{ URL::to('portfolioitem') }}">Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-sm {{ (Request::is('price') ? 'active' : '') }}">
                        <a href="{{ URL::to('price') }}">Price</a>
                    </li>
                    <li {{ (Request::is('blog') || Request::is('blog/*') ? 'class=active' : '') }}><a href="{{ URL::to('blog') }}">Blog</a>
                    <li {{ (Request::is('contact') ? 'class=active' : '') }}><a href="{{ URL::to('contact') }}">Contact</a>
                    </li>
                    {{--based on anyone login or not display menu items--}}
                    @if(Sentinel::guest())
                        <li><a href="{{ URL::to('login') }}">Log In</a>
                        </li>
                        <li><a href="{{ URL::to('register') }}">Sign Up</a>
                        </li>
                    @else
                        <li {{ (Request::is('my-account') ? 'class=active' : '') }}><a href="{{ URL::to('my-account') }}">My Account</a>
                        </li>
                        <li><a href="{{ URL::to('logout') }}">Logout</a>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </header>
    <!-- //Header Section Start -->

    <!-- Content -->
    @yield('content')

    <!-- Footer Section Start -->
    <footer>
        <div class="container ftr-txt">
            <div class="row">
                <!-- About Us Section Start -->
                <div class="col-sm-3 col-xs-12">
                    <h3>About us</h3>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum.
                    </p>
                </div>
                <!-- //About Us Section End -->
                <!-- Recent post Section Start -->
                <div class="col-sm-3 col-xs-12 recen-post">
                    <h3>Recent Posts</h3>
                    <ul class="list-unstyled recen-post">
                        <li>
                            <a href="#">
                            <img src="{{ asset('assets/images/c2.jpg') }}" class="ftr-image-small" /> <span class="fotr-post">Lorem Ipsum is simply dummy text of the printing industry.
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <img src="{{ asset('assets/images/c3.jpg') }}" class="ftr-image-small" /> <span class="fotr-post">Lorem Ipsum is simply dummy text of the printing industry.
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <img src="{{ asset('assets/images/c4.jpg') }}" class="ftr-image-small" /> <span class="fotr-post">Lorem Ipsum is simply dummy text of the printing industry.
                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //Recent Post Section End -->
                <!-- GetIn Touch Section Start -->
                <div class="col-sm-3 col-xs-12">
                    <h3>get in touch</h3>
                    <p>
                        <i class="fa  fa-map-marker"></i>&nbsp;Gieringer Robert E MD 2751 Debarr Rd #320 Anchorage, AK(Alaska) 99508
                    </p>
                    <p>
                        <i class="fa fa-mobile-phone"></i> Phone:&nbsp;(907) 563-3232 
                    </p>
                    <p>
                        <i class="fa fa-envelope-o"></i> E-mail:&nbsp; <a href="mailto:"><span class="text-white">info@domain.com</span></a>
                    </p>
                    <p>
                        <i class="fa fa-skype"></i> Skype:&nbsp;<a href="#"><span class="text-white">domain</span></a>
                    </p>
                </div>
                <!-- //GetIn Touch Section End -->
                <!-- Subscribe Section Start -->
                <div class="col-sm-3 col-xs-12">
                    <h3>Subscribe</h3>
                    <p>
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced.
                    </p>
                    <form class="ftr-form">
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="E-mail" />
                            <a href="#">
                                <input type="button" class="btn btn-primary" value="Subscribe" />
                            </a>
                        </div>
                    </form>
                </div>
                <!-- //Subscribe Section End -->
            </div>
        </div>
    </footer>
    <!-- //Footer Section End -->
    <!-- Copy Right Section Start -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <p>Copyright © Chandra Admin Template, 2015</p>
                </div>
            <!-- Icon Section Start -->
            <div class="pad_top10">
            <ul class="list-inline" id="icon_section">
                <li>
                    <a href="#"> <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="fa fa-rss"></i>
                    </a>
                </li>
            </ul>
            </div>
        <!-- //Icon Section End -->
            </div>
        </div>
    </div>
    <!-- //Copy Right Section End -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top fa fa-hand-o-up" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    </a>
    <!-- global js Start -->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/front_lib.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/style-switcher.js') }}"></script>
    <!-- //global js End -->
    <!-- page level js Start -->
    @yield('footer_scripts')
    <!-- //page level js End -->
</body>

</html>
