<!doctype html>
<html lang="zxx">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css?version='.config('app.version')) }}">
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
<title>My Canada Pay Day - @yield('title') </title>
</head>
<body>

    {{--Start include nev --}}
    @include('layouts.parts.menu')
    {{--End include nev --}}


    @yield('content')

    {{--Start Include Footer --}}
    @include('layouts.parts.footer')
    {{--End Include Footer --}}

    <div class="go-top">
        <i class='bx bx-chevron-up'></i>
    </div>


<script src="{{ asset('assets/js/jquery.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/popper.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/bootstrap.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/jquery.meanmenu.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/jquery.nice-select.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/jquery.magnific-popup.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/odometer.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/jquery.appear.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/form-validator.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/contact-form-script.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/wow.min.js?version='.config('app.version')) }}"></script>

<script src="{{ asset('assets/js/main.js?version='.config('app.version')) }}"></script>

</body>
</html>
