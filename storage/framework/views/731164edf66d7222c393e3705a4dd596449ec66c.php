<?php $__env->startSection('title', __('404')); ?>
<?php $__env->startSection('content'); ?>
  <div class="text-center">
    <div class="error mx-auto" data-text="404">404</div>
    <p class="lead text-gray-800 mb-4">Page Not Found</p>
    <a href="<?php echo e(url('/')); ?>">&larr; Back to Home</a>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors::layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Documents\Ticket-Laravel-master\resources\views/errors/404.blade.php ENDPATH**/ ?>