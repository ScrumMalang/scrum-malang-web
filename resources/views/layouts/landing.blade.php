<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title') - | Scrum Malang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('css/flexslider.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('css/elegant-icons.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('css/pe-icon-7-stroke.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{asset('css/theme-lava.css')}}" rel="stylesheet" type="text/css" media="all" />
  <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie9.css" />
<![endif]-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'> @yield('styles')
</head>

<body>

  <!--<div class="loader">
    <div class="strip-holder">
      <div class="strip-1"></div>
      <div class="strip-2"></div>
      <div class="strip-3"></div>
    </div>
  </div>-->

  <a id="top"></a>
  <!--.nav-container-->
  @include('includes.navbar')
  <div class="main-container">
    @yield('content')
  </div>
  @include('includes.footer')

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/skrollr.min.js')}}"></script>
  <script src="{{asset('js/spectragram.min.js')}}"></script>
  <script src="{{asset('js/flexslider.min.js')}}"></script>
  <script src="{{asset('js/jquery.plugin.min.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/lightbox.min.js')}}"></script>
  <script src="{{asset('js/smooth-scroll.min.js')}}"></script>
  <script src="{{asset('js/twitterfetcher.min.js')}}"></script>
  <script src="{{asset('js/placeholders.min.js')}}"></script>
  <script src="{{asset('js/scripts.js')}}"></script>
  @yield('scripts')
</body>

</html>