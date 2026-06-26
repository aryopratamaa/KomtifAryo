<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Flexy Free Bootstrap Admin Template by WrapPixel</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('template/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('template/assets/css/styles.min.css') }}" />
    <style>
        .body-wrapper .body-wrapper-inner {
            display: flex;
            flex-direction: column;
        }

        .body-wrapper .body-wrapper-inner>.container-fluid {
            min-height: inherit;
            display: flex;
            flex-direction: column;
        }

        .body-wrapper .body-wrapper-inner>.container-fluid>footer {
            margin-top: auto;
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('partials.topstrip')
        <!-- Sidebar Start -->
        @include('partials.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('partials.header')
            <!--  Header End -->
            <div class="body-wrapper-inner">
                <div class="container-fluid">
                    <!--  Row 1 -->
                    @yield('content')

                    @include('partials.footer')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('template/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('template/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('template/assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('template/assets/js/dashboard.js') }}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
