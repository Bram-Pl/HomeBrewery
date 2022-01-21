
<?php $__env->startSection("subtitle","upload your recipe"); ?>
<link href="<?php echo e(secure_asset('public/css/app.css')); ?>" rel="stylesheet">
<?php $__env->startSection("content"); ?>
<html>
<form action="/insertname" method = "post">
    <?php echo csrf_field(); ?>
    <input type="text" name ="name" value="jonas" id = "name" placeholder = "name"/><br/>
    <input type="text" name ="lastname" value="aerts" id = "achternaam" placeholder = "lastname"/><br/>
    <input type="text" name = "number" value="5" id = "number" placeholder = number/><br/>
    <button type = "submit">Submit</button>
    <button type ="button" onclick = "uploadNameAsync()"><strong>upload via javascript</strong></button><!-- comment -->
    <button type ="button" onclick = "uploadNameAsyncPost()"><strong>upload via javascript met post</strong></button>
</form>
    
    
    
    
    
    <div class="bubbles">
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
</div>
</html>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HomeBrewery\resources\views/Beer/nameandid.blade.php ENDPATH**/ ?>