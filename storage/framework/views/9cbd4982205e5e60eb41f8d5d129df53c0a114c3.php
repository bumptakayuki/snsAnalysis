<?php $__env->startSection('content'); ?>

    <h1>Contact Me!</h1>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

    <script type="text/javascript">alert('Contact from scripts!');</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>