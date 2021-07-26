<!DOCTYPE html>
<html lang="en">
<head>
    <title>Archs &mdash; Onepage Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_fonts') . 'icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_css') .   'bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_css') .   'magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_css') .   'jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_css') .   'owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_css') .   'owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_css') .   'bootstrap-datepicker.css') }}">


    <link rel="stylesheet" href="{{ asset(config('testalweb.path_fonts') . 'flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_css') .   'aos.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_css') .   'jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset(config('testalweb.path_css') .   'style.css') }}">


    @yield('custom_css')
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div class="site-wrap">

    @yield('content')

</div>



<!-- JavaScript Libraries -->
<script src="{{ asset(config('testalweb.path_js'). 'jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'jquery-ui.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'popper.min.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'bootstrap.min.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'owl.carousel.min.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'jquery.countdown.min.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'aos.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'jquery.sticky.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'jquery.easing.1.3.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'jquery.fancybox.min.js') }}"></script>
<script src="{{ asset(config('testalweb.path_js'). 'main.js') }}"></script>

@yield('custom_js')

</body>
</html>
