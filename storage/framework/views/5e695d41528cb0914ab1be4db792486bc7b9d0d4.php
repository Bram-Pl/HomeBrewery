
<?php $__env->startSection('subtitle', 'Breweries'); ?>
<?php $__env->startSection('content'); ?>
    <h3 style="text-align: center; font-family: unset; font-size: 25pt">Breweries available on Home Brewery</h3>
    <?php $__currentLoopData = $breweries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brewery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2 style='text-align: center; border-collapse: collapse; margin: 25px 0; font-size: 0.9em;
            font-family: sans-serif; min-width: 400px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            font-size: 22pt; background-color: rgba(26, 188, 156, 0.25)'><?php echo e($brewery->name); ?></h2>
        <h3 style='text-align: center;'><?php echo e($brewery->address); ?></h3>
        <h6 style='text-align: center;'>They brew the following beers</h6>
            <?php $__currentLoopData = $beers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($beer->breweries_id == $brewery->id): ?>
                    <a style="text-decoration: none; color: black;" href="/beer/<?php echo e($beer->id); ?>"><p style='text-align: center;'><?php echo e($beer->name); ?></p></a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div style='width: 500px; margin-left: auto; margin-right: auto;'>
            <iframe class='googlemaps' width="600" height="450" loading="lazy" allowfullscreen
                    src="https://www.google.com/maps/embed/v1/search?q=<?php echo e($brewery->address); ?>&key=AIzaSyDAC-e6VDcQVG-7kiU2kD-RJtn1Cqkk-M0">
            </iframe>
        </div>
        <br><br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\development\HomeBrewery\resources\views/Beer/Breweries.blade.php ENDPATH**/ ?>