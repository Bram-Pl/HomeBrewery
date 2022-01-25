
<?php $__env->startSection('subtitle', 'List Of Beers'); ?>
<?php $__env->startSection('content'); ?>
    <h3 style="text-align: center; font-family: unset; font-size: 25pt">Beers available on this website:</h3>
    <?php $__currentLoopData = $beers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $beer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!--
    <?php
    $name = $beer->name;
    $name .= "rate";
    ?>
    <style>
        .#{$name}{
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .#{$name}:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .#{$name}:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .#{$name}:not(:checked) > label:before {
            content: '★ ';
        }
        .#{$name} > input:checked ~ label {
            color: #ffc700;    
        }
        .#{$name}:not(:checked) > label:hover,
        .#{$name}:not(:checked) > label:hover ~ label {
            color: #deb217;  
        }
        .#{$name} > input:checked + label:hover,
        .#{$name} > input:checked + label:hover ~ label,
        .#{$name} > input:checked ~ label:hover,
        .#{$name} > input:checked ~ label:hover ~ label,
        .#{$name} > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
    </style>-->
    <a href="/beer/<?php echo e($beer->id); ?>" style="text-decoration: none; color: black;">
        <div class="displaybeers center">
            <div class="displaybeerscol0">
                <img src="<?php echo e($beer->image_url); ?>", alt="<?php echo e($beer->name); ?>" style="height: 250px; max-width: 350px" >
            </div>
            <div class="displaybeerscol1 center">
                <h2><?php echo e($beer->name); ?></h2>
            </div>
            <div class="displaybeercol2 center">
                <p><?php echo e($beer->Description); ?></p>
            </div>
            <div class="displaybeerscol3">
                <p style="font-size: 18pt; font-weight: bold"><?php echo e($beer->abv); ?> %</p>
                <!--<input type="radio" id="star5" name="$name" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="$name" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="$name" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="$name" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="$name" value="1" />
                <label for="star1" title="text">1 star</label>-->
            </div>
        </div>
    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div style="margin-bottom: 100px;">
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\development\HomeBrewery\resources\views/Beer/all.blade.php ENDPATH**/ ?>