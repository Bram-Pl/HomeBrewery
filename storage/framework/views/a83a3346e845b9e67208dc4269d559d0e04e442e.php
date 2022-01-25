
<?php $__env->startSection('subtitle', 'Index'); ?>
<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>
        <h1>Hello <?php echo e($user->name); ?>, welcome back to the Home Brewery website.</h1>

    <?php else: ?>
        <h1>Welcome to the Home Brewery website.</h1>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\school\cloud\HomeBrewery\resources\views//index.blade.php ENDPATH**/ ?>