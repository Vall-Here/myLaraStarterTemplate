<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
        <title>
          Auth
        </title>
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js')}}" crossorigin="anonymous"></script>
        <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="{{asset('assets/css/soft-ui-dashboard.css')}}" rel="stylesheet" />
      </head>
<body class="theme-color4 light ltr">
  
 <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-relative my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{route('app.index')}}">
        Homepage
      </a>
      {{-- <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button> --}}
      <div class=" d-flex justify-content-between" id="navigation ">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link me-2" href="{{route('login')}}">
              <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
              Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="{{route('register')}}">
              <i class="fas fa-key opacity-6 text-dark me-1"></i>
              Register
            </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="col-md-6">
    <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
      <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
    </div>
  </div>

    @yield('content')


   <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js')}}"></script>

  <script src="{{asset('assets/js/soft-ui-dashboard.min.js')}}"></script>
    @stack('scripts')
</body>
</html>