<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta property="og:type" content="website" />
  <title>{{page_title($title) ?? ''}}</title>
  <meta property="og:image" content="{{ URL::asset('assets/images/logo/logo-white.png') }}" />
  @yield('meta')
  <meta name="author" content="Devapps">
  <meta name="robots" content="all">
  <meta name="copyright" content="IonicModels"/>

  <!-- CSS here -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.c') }}">
  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
  <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
  <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('css/default.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
  
</head>
<body>

  <!-- preloader -->
  <div id="preloader">
    <div id="loading-center">
      <div id="loading-center-absolute">
        <div class="object" id="object_one"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_three"></div>
      </div>
    </div>
  </div>
  <!-- preloader-end -->

  @include('front.nav.header')
  @yield('content')
  @include('front.nav.footer')

  <!-- JS here -->
  <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/slick.min.js') }}"></script>
  <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
  <script src="{{ asset('js/ajax-form.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
  <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
  <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
  <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/plugins.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>


