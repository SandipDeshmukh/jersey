<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <!-- Photoswipe Gallery CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/photoswipe.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    @yield('seo')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="template-index index-demo1">
<!--Page Wrapper-->
<div class="page-wrapper sidebar-filter shop-grid-view-page">
    @include('common.navigation')

    @yield('content')
    @include('common.footer')

    <!-- Including Jquery/Javascript -->
    <!-- Plugins JS -->
    <script src="{{ asset('/assets/js/plugins.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!--Newsletter Modal Cookies-->
    <script>
        $(window).ready(function() {
            setTimeout(function() {
                $('#newsletter_modal').modal("show");
            }, 7000);
        });
    </script>
    <!--End Newsletter Modal Cookies-->
    @yield('script')
</div>
<!--End Page Wrapper-->
</body>

</html>
