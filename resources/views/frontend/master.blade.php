<!doctype html>
<html lang="en">
  <head>
    <title>AMTS | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SCRIPTS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--SHORTCUT ICON-->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon" />
    <!--BOOTSTRAP/ANMATE/OWL-->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <!--IONICON/FONTAWESOME/FLATICON/POPUP-->
    <link rel="stylesheet" href="{{asset('frontend/css/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="'{{asset('frontend/css/magnific-popup.css')}}">

    <!-- STYLE/FONT-CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/open-sans.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/roboto.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('style')

  </head>
  <body>
    @include('frontend.include.header')

    <div class="header" id="myHeader" style="z-index: 2000;">
        @include('frontend.include.navbar')
    </div>

    <div class="content">
        @yield('content')
    </div>

    @include('frontend.include.footer')


    <!--SCRIPTS FROM HERE-->

      <script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
      <script src="{{asset('frontend/js/popper.min.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.animateNumber.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('frontend/js/main.js')}}"></script>

    <script>
      // When the user scrolls the page, execute myFunction
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("myHeader");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        }
    </script>

    <!--SCRIPT ENDS HERE-->

    @yield('scripts')

  </body>
</html>
