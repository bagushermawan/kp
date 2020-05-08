<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dokter Post') &mdash; Shop</title>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/aranoz/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('assets/aranoz/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('assets/aranoz/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/aranoz/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('assets/aranoz/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/aranoz/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/aranoz/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('assets/aranoz/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('assets/aranoz/css/style.css')}}">
</head>

<body>
    @include('frontend.partials.header')

    @include('frontend.partials.banner')

    @include('frontend.partials.product')

    @include('frontend.partials.footer')

    <!-- jquery plugins here-->
    <script src="{{asset('assets/aranoz/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('assets/aranoz/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('assets/aranoz/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('assets/aranoz/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('assets/aranoz/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('assets/aranoz/js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('assets/aranoz/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/aranoz/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('assets/aranoz/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/aranoz/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/aranoz/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/aranoz/js/contact.js')}}"></script>
    <script src="{{asset('assets/aranoz/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/aranoz/js/jquery.form.js')}}"></script>
    <script src="{{asset('assets/aranoz/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/aranoz/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('assets/aranoz/js/custom.js')}}"></script>
</body>

</html>