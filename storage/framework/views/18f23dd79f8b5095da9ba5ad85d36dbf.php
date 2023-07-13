<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Create Movies
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
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <form class="forms-sample" action="/administrator/movies" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <label for="title" class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="title" placeholder="Title"
                                        name="title" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="poster" class="col-sm-3 col-form-label">Poster</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="poster" placeholder="Poster.png"
                                        name="poster" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="genres_id" class="col-sm-3 col-form-label">Genres</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="genres_id" name="genres_id">
                                        <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="synopsis" class="col-sm-3 col-form-label">Synopsis</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" id="synopsis" placeholder="Synopsis" name="synopsis" value=""></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="release_date" class="col-sm-3 col-form-label">Release date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" id="release_date" placeholder="Release_date"
                                        name="release_date" value="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="countries_id" class="col-sm-3 col-form-label">Countries</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="countries_id" name="countries_id">
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rating" class="col-sm-3 col-form-label">Rating</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="rating" placeholder="Rating"
                                        name="rating" value="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/nitip/movieapp/bintang/resources/views/administrator/movies/create.blade.php ENDPATH**/ ?>