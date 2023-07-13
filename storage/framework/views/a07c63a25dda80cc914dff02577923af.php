<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin_asset/assets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin_asset/assets/vendors/css/vendor.bundle.base.css')); ?>">
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo e(asset('admin_asset/assets/css/style.css')); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo e(asset('admin_asset/assets/images/favicon.ico')); ?>">
</head>

<body>
    <div class="container-scroller">
        <?php echo $__env->make('administrator.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <?php echo $__env->make('administrator.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- partial -->
            <div class="main-panel">
                <?php echo $__env->yieldContent('content'); ?>
                <!-- content-wrapper ends -->
                <?php echo $__env->make('administrator.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo e(asset('admin_assetassets/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo e(asset('admin_assetassets/vendors/chart.js/Chart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assetassets/js/jquery.cookie.js" type="text/javascript')); ?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo e(asset('admin_assetassets/js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assetassets/js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assetassets/js/misc.js')); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo e(asset('admin_assetassets/js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('admin_assetassets/js/todolist.js')); ?>"></script>
    <!-- End custom js for this page -->
</body>

</html>
<?php /**PATH /srv/http/nitip/movieapp/bintang/resources/views/administrator/layouts/main.blade.php ENDPATH**/ ?>