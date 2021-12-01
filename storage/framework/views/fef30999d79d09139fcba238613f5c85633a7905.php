
<?php $__env->startSection("subtitle","upload your recipe"); ?>


<?php $__env->startSection("content"); ?>
<form action="/UploadBeer" method = "post">
    name <input type="text" name ="name" id ="name"/><br/>
    tagline <input type="text" name="tagline" id="tagline"/> <br/>
    first brewed <input type="text" name="tagline" id="tagline"/><br/>
    Description <input type="text" name="tagline" id="tagline"/><br/>
    image url <input type="text" name="tagline" id="tagline"/><br/>
    abv <input type="text" name="tagline" id="tagline"/><br/>
    ibu <input type="text" name="tagline" id="tagline"/><br/>
    target_fg <input type="text" name="tagline" id="tagline"/><br/>
    target_og <input type="text" name="tagline" id="tagline"/><br/>
    ebc <input type="text" name="tagline" id="tagline"/><br/>
    srm <input type="text" name="tagline" id="tagline"/><br/>
    ph <input type="text" name="tagline" id="tagline"/><br/>
    attenuation <input type="text" name="tagline" id="tagline"/><br/>
    boil volume <input type="text" name="tagline" id="tagline"/><br/>
    food parings <input type="text" name="tagline" id="tagline"/><br/>
    tips <input type="text" name="brewers_tips" id="brewers_tips"/><br/>
    UserID <input type="number" name="UserId" id="UserId"/><br/>
    <input type ="submit" value = "Upload"/>
    <script>
        alert($id);
    </script>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("master", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\HomeBrewery\resources\views/Beer/BeerForm.blade.php ENDPATH**/ ?>