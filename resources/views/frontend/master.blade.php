<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicon.ico')}}">
  

    <title>@yield('title')</title>


    <link rel="stylesheet" href="{{asset('assets/css/vendors/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick/slick-theme.css')}}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('assets/css/demo4.css')}}">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    @stack('styles')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="theme-color4 light ltr">
    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            background: #e87316;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
    </style>
    <header class="header-style-2 shadow-sm" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <style>
                                .header-style-2 .main-menu {
                                    justify-content:space-between;
                                }
                            </style>
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="{{route('app.index')}}">
                                        <img src="assets/images/logo.png" class="h-logo img-fluid blur-up lazyload"
                                            alt="logo">
                                    </a>
                                </div>

                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                    
                                        <ul class="nav-menu d-flex justify-content-between ">
                                 
                                            <li><a href="{{route('login')}}" class="nav-link menu-title p-3">Login</a></li>
                                            <li><a href="{{route('register')}}" class="nav-link menu-title p-3">Register</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

 

    @yield('content')


    <div class="bg-overlay"></div>
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/feather/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
    <script src="{{asset('assets/js/slick/slick.js')}}"></script>
    <script src="{{asset('assets/js/slick/slick-animation.min.js')}}"></script>
    <script src="{{asset('assets/js/slick/custom_slick.js')}}"></script>
    <script src="{{asset('assets/js/price-filter.js')}}"></script>
    <script src="{{asset('assets/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/filter.js')}}"></script>
    <script src="{{asset('assets/js/newsletter.js')}}"></script>
    <script src="{{asset('assets/js/cart_modal_resize.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('assets/js/theme-setting.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script>
    @stack('scripts')
</body>
</html>