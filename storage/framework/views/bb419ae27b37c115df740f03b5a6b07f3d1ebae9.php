
<?php $__env->startSection('subtitle', 'List Of Recipes'); ?>
<?php $__env->startSection('content'); ?>
    <h3>This page is the SOAP page.</h3>
    the color of the beer has hash code : <?php echo e($Color); ?>

    the converted value in lbs is : <?php echo e($Converted); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\school\cloud\HomeBrewery\resources\views//beer/soap.blade.php ENDPATH**/ ?>