<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assetb/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assetb/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetb/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assetb/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetb/css/style.css') }}" rel="stylesheet">

    <!-- Styles -->
    @livewireStyles
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        @include('layouts.backend.partials.head')

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        @include('layouts.backend.partials.side')

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        @yield('contents')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        @include('layouts.backend.partials.foot')
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetb/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assetb/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assetb/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assetb/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assetb/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assetb/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assetb/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assetb/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assetb/js/main.js') }}"></script>

    @stack('modals')

    @livewireScripts

</body>

</html>
