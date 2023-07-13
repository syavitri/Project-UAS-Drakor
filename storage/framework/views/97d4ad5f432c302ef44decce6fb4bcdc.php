<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="<?php echo e(asset('admin_asset/assets/images/faces/face1.jpg')); ?>" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/administrator')); ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/administrator/countries')); ?>">
                <span class="menu-title">Countries</span>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/administrator/genres')); ?>">
                <span class="menu-title">Genres</span>
                <i class="mdi mdi-contacts menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/administrator/movies')); ?>">
                <span class="menu-title">Movies</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/administrator/reviews')); ?>">
                <span class="menu-title">Reviews</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('/administrator/users')); ?>">
                <span class="menu-title">Users</span>
                <i class="mdi mdi-table-large menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
<?php /**PATH /srv/http/nitip/movieapp/bintang/resources/views/administrator/partials/sidebar.blade.php ENDPATH**/ ?>