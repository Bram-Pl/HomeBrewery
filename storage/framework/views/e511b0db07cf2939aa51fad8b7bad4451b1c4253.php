<?php $__env->startSection('subtitle', 'List Of Beers'); ?>
<?php $__env->startSection('content'); ?>
    <h3>This page is the beer page.</h3>
    <br>
    <h1><?php echo e($beer); ?></h1>
    <br>
    <h1><?php echo e($hops); ?></h1>
    <br>
    <h1><?php echo e($malt); ?></h1>
    <br>
    <h1><?php echo e($yeast); ?></h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\development\HomeBrewery\resources\views/Beer/beer.blade.php ENDPATH**/ ?>