
<?php $__env->startSection("subtitle","upload your recipe"); ?>


<?php $__env->startSection("content"); ?>
<html>
<form action="/insertname" method = "POST">
    <?php echo csrf_field(); ?>
    <input type="text" name ="name" id ="name" placeholder = "name"/><br/>
    <button type = "submit">Submit</button>
</form>
</html>
<?php $__env->stopSection(); ?>


<?php echo $__env->make("master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HomeBrewery\resources\views/Beer/nameandid.blade.php ENDPATH**/ ?>