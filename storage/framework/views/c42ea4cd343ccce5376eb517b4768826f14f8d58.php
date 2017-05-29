<?php $__env->startSection('content'); ?>
<?php /*<div class="container">*/ ?>
    <?php /*<div class="row">*/ ?>
        <?php /*<div class="col-md-10 col-md-offset-1">*/ ?>
            <?php /*<div class="panel panel-default">*/ ?>
                <?php /*<div class="panel-heading">Dashboard</div>*/ ?>

                <?php /*<div class="panel-body">*/ ?>
                    <?php /*You are logged in!*/ ?>
                <?php /*</div>*/ ?>
            <?php /*</div>*/ ?>
        <?php /*</div>*/ ?>
    <?php /*</div>*/ ?>
<?php /*</div>*/ ?>

<app-root>Loading...</app-root>

<!-- preloading script -->
<script src="<?php echo e(URL::asset('//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js')); ?>"></script>


<!-- 1. Load libraries -->
<!-- Polyfill(s) for older browsers -->
<?php /*<script src="<?php echo e(URL::asset('/ngApp/node_modules/core-js/client/shim.min.js')); ?>"></script>*/ ?>
<?php /*<script src="<?php echo e(URL::asset('/ngApp/node_modules/zone.js/dist/zone.js')); ?>"></script>*/ ?>
<?php /*<script src="<?php echo e(URL::asset('/ngApp/node_modules/reflect-metadata/Reflect.js')); ?>"></script>*/ ?>


<!-- 2. if development, configure SystemJS -->
<?php /*<script src="<?php echo e(URL::asset('/ngApp/node_modules/systemjs/dist/system.src.js')); ?>"></script>*/ ?>
<?php /*<script src="<?php echo e(URL::asset('/ngApp/systemjs.config.js')); ?>"></script>*/ ?>


<script src="<?php echo e(URL::asset('/ngApp/dist/inline.bundle.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/ngApp/dist/vendor.bundle.js')); ?>"></script>

<script src="<?php echo e(URL::asset('/ngApp/dist/main.bundle.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/ngApp/dist/styles.bundle.css')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>