<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('admin_asset/assets/images/favicon.ico') }}">
</head>

<body>
    <div class="container-scroller">
        @include('administrator.partials.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('administrator.partials.sidebar')
            <!-- partial -->
            <div class="main-panel">
                @yield('content')
                <!-- content-wrapper ends -->
                @include('administrator.partials.footer')
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('admin_asset/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('admin_asset/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_asset/assets/js/jquery.cookie.js" type="text/javascript') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin_asset/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin_asset/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin_asset/assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('admin_asset/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin_asset/assets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
    
</body>

</html>
