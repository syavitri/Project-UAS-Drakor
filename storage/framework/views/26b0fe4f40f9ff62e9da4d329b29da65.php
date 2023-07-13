<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Movies Data
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <a href="/administrator/movies/create" class="btn btn-info">Create Data</a>
                        <div class="table-responsive">
                            <?php if(session('success')): ?>
                                <div class="alert alert-success">
                                    <p><?php echo e(session('success')); ?></p>
                                </div>
                            <?php endif; ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No </th>
                                        <th> Title </th>
                                        <th> Genre </th>
                                        <th> Country </th>
                                        <th> Rating </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td> <?php echo e($loop->iteration); ?> </td>
                                            <td> <?php echo e($item->title); ?> </td>
                                            <td> <?php echo e($item->genres->name); ?> </td>
                                            <td> <?php echo e($item->countries->name); ?> </td>
                                            <td> <?php echo e($item->rating); ?> </td>
                                            <td>
                                                <a href="/movies/<?php echo e($item->id); ?>"
                                                    class="btn btn-sm btn-primary">Detail</a>
                                                <a href="/administrator/movies/<?php echo e($item->id); ?>/edit"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                <form action="/administrator/movies/<?php echo e($item->id); ?>" method="POST"
                                                    class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/nitip/movieapp/bintang/resources/views/administrator/movies/index.blade.php ENDPATH**/ ?>