

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!--- Basic Page Needs  -->
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="Nguweneza Nogusavinga Ahazaza">
        <!-- CSS -->
        <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/slicknav.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/jquery.mb.YTPlayer.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/typography.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/responsive.css')}}">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="{{ url('assets/img/icon/favicon.ico')}}">
    </head>
<body>
    <div id="app">

 <!-- header area start -->
 <header class="header-area">
    <div class="container">
        <div class="row">
            <div class="menu-area">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="logo">
                       <h1>NNA</h1>
                    </div>
                </div>
                <div class="col-md-9 hidden-xs hidden-sm">
                    <div class="main-menu">
                        <nav class="nav-menu">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#features">Features</a></li>
                                {{-- <li><a href="#screenshot">Screenshot</a></li> --}}
                                {{-- <li><a href="#download">download</a></li> --}}
                                <li><a href="#pricing">Pricing</a></li>
                                {{-- <li><a href="#review">Review</a></li> --}}
                                <li><a href="#contact">Contact</a></li>
                                @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 visible-sm visible-xs">
                    <div class="mobile_menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->


        <div class="content" >
        	@yield('content')
	    </div>
    </div>

 <!-- footer area start -->
 <footer>
    <div class="footer-area bg-theme ptb--50">
        <div class="container">
            <div class="footer-inner">
                <ul class="fsocial">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" title="download App here"><i class="fa fa-android"></i></a></li>

                </ul>

                <p class="copy-right">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://yanjye.com/" target="_blank">Yanjye</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- Scripts -->
<script src="{{ url('assets/js/jquery-3.2.0.min.js')}}"></script>
<script src="{{ url('assets/js/jquery-ui.js')}}"></script>
<script src="{{ url('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ url('assets/js/jquery.slicknav.min.js')}}"></script>
<script src="{{ url('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ url('assets/js/jquery.mb.YTPlayer.min.js')}}"></script>
<script src="{{ url('assets/js/raindrops.js')}}"></script>
<script src="{{ url('assets/js/theme.js')}}"></script>
<script src="{{ url('assets/js/NnaJquery.js')}}"></script>
</body>

</html>
