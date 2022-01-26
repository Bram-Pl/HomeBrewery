<?php $__env->startSection('subtitle', $beer->name ); ?>
<?php $__env->startSection('content'); ?>
<h1 style="text-align: center; font-family: unset; font-size: 25pt"><?php echo e($beer->name); ?></h1>
<div class="columnSingleBeer leftSingleBeer">
    <img class="imageSingleBeer" src="<?php echo e($beer->image_url); ?>" alt="image beer <?php echo e($beer->name); ?>"/>
</div>
<div class="columnSingleBeer middleSingleBeer">
    <table class="styled-table">
        <thead>
            <tr>
                <th colspan="2">Properties of <?php echo e($beer->name); ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="bold">Name</td>
                <td class="tdVal"><?php echo e($beer->name); ?></td>
            </tr>
            <tr>
                <td class="bold">Tagline</td>
                <td class="tdVal"><?php echo e($beer->tagline); ?></td>
            </tr>
            <tr>
                <td class="bold">First Brewed</td>
                <td class="tdVal"><?php echo e($beer->first_brewed); ?></td>
            </tr>
            <tr>
                <td class="bold">Description</td>
                <td class="tdVal"><?php echo e($beer->Description); ?></td>
            </tr>
            <tr>
                <td class="bold">abv</td>
                <td class="tdVal"><?php echo e($beer->abv); ?> %</td>
            </tr>
            <tr>
                <td class="bold">IBU</td>
                <td class="tdVal"><?php echo e($beer->ibu); ?></td>
            </tr>
            <tr>
                <td class="bold">EBC</td>
                <td class="tdVal"><?php echo e($beer->ebc); ?><div class='box' style='margin-right: 40px; background-color: <?php echo e($color); ?>'></div></td>
            </tr>
            <tr>
                <td class="bold">SRM</td>
                <td class="tdVal"><?php echo e($beer->srm); ?></td>
            </tr>
            <tr>
                <td class="bold">ph</td>
                <td class="tdVal"><?php echo e($beer->ph); ?></td>
            </tr>
            <tr>
                <td class="bold">Brewers tip</td>
                <td class="tdVal"><?php echo e($beer->brewers_tips); ?></td>
            </tr>
            <tr>
                <td class="bold">Type</td>
                <td class="tdVal"><?php echo e($beer->type); ?> beer</td>
            </tr>
            <tr>
                <td class="bold">Brewery</td>
                <td class="tdVal"><?php echo e($brewery->name); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="columnSingleBeer rightSingleBeer">
    <table class="styled-table">
        <thead>
            <tr>
                <th colspan="2">Brew scheme</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="bold">Step One</td>
                <td class="tdVal">Take <b><?php echo e($malt[0]->amount); ?> <?php echo e($malt[0]->unit); ?></b> of the <b><?php echo e($malt[0]->name); ?></b> malt. Grind this malt and add it to the <b><?php echo e($process[0]->boilvolume); ?> <?php echo e($process[0]->boilvolumeUnit); ?></b> water with a temperature of <b><?php echo e($process[0]->mashTemp); ?> <?php echo e($process[0]->mashTempUnit); ?></b>. This starts the mash process.</td>
            </tr>
            <tr>
                <td class="bold">Step Two</td>
                <td class="tdVal">After letting the mash process run for <b><?php echo e($process[0]->mashTime); ?> <?php echo e($process[0]->mashTimeUnit); ?></b> the liquid is ready to start the lautering process.</td>
            </tr>
            <tr>
                <td class="bold">Step Three</td>
                <td class="tdVal">The next step is to lauter. This lautering procedure seperatres the <i>wort</i> from the <i>grain</i>. The grain is the fluid that holds the sugars that will be turned into alcohol.</td>
            </tr>
            <tr>
                <td class="bold">Step Four</td>
                <td class="tdVal">Next up is the boiling process. This happens at a temperature of 100 degress <b><?php echo e($process[0]->mashTempUnit); ?></b> and lasts for <b><?php echo e($process[0]->boilTime); ?> <?php echo e($process[0]->boilTimeUnit); ?></b>. During this cooking process the <b><?php echo e($hops[0]->name); ?></b> hop with an amount of <b><?php echo e($hops[0]->amount); ?> <?php echo e($hops[0]->unit); ?></b> can be added. The longer you wait with adding the hop the more bitter the taste will be.</td>
            </tr>
            <tr>
                <td class="bold">Step Five</td>
                <td class="tdVal">After boiling the wort is ready to be cooled down until a temperature of about 20 degrees celsius. The wort then has to be transferred to a <i>primary fermenter</i>.</td>
            </tr>
            <tr>
                <td class="bold">Step Six</td>
                <td class="tdVal">The <b><?php echo e($yeast[0]->name); ?></b> is then added in the same container as the wort. The amount is for this recipe is <b><?php echo e($yeast[0]->amount); ?> <?php echo e($yeast[0]->unit); ?></b>. This yeast is nutrition for the fermentable sugars.</td>
            </tr>
            <tr>
                <td class="bold">Step Seven</td>
                <td class="tdVal">The wort gets transferred after about two weeks when the water lock on the primary fermenter stops being active. The wort gets transferred to a 'dame jeanne' or a secondary fermenter.</td>
            </tr>
            <tr>
                <td class="bold">Step Eight</td>
                <td class="tdVal">After another two weeks the wort is ready to be bottled. First add 10 grams to some water to mix in with the wort. This makes sure there is fizz in the beer when opening the bottle.</td>
            </tr>
        </tbody>
    </table>
</div>

<div class="recipeSingleBeerDiv">
    <table class="styled-table-recipe">
        <thead>
            <tr>
                <th colspan="3">Proposed Food Pairing: <i><b><?php echo e($recipe->title); ?></b></i></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan='4'><a href='<?php echo e($recipe->sourceUrl); ?>'><img class="imageRecipeBeer" src="<?php echo e($recipe->image); ?>" alt="alt"/></a></td>
            </tr>
            <tr>
                <td class="bold">Time to get ready</td>
                <td class="tdVal"><?php echo e($recipe->readyInMinutes); ?> minutes</td>
            </tr>
            <tr>
                <td class="bold">Summary</td>
                <td class="tdVal"><?php echo e($recipe->summary); ?></td>
            </tr>
            <tr>
                <td class="bold">instructions</td>
                <td class="tdVal"><?php echo e($recipe->instructions); ?></td>
            </tr>            
        </tbody>
    </table>
</div>

<div class="recipeSingleBeerDiv">
    <table class="styled-table-recipe">
        <thead>
            <tr>
                <th colspan="4">Reviews</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($beer->id == $review->beer_id): ?>
                <tr>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($person->id == $review->user_id): ?>
                    <td class="bold" style="width: auto;"><?php echo e($person->name); ?></td>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <td class="tdVal"><?php echo e($review->review); ?></td>
                    <td class="tdVal"><?php echo e($review->score); ?>/5</td>
                    <td class="tdVal">Posted at: <?php echo e($review->created_at); ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php if(auth()->guard()->check()): ?>
    <h2>Post your own review</h2>
    <input type="text" id="review" style="width: 75%; height: 100px;"></input>
    <tr>
        <td>
            <p>Score</p>
        </td>
    </tr>
    <tr>
        <td>
            <input type="range" id="score" name="score" min="0" max="5" step="0.25">
        </td>
    </tr>
    <button type ="button" onclick = "uploadReview(<?php echo e($beer->id); ?>, <?php echo e($user->id); ?>)"><strong>Post review</strong></button>
    <?php else: ?>
    <h2 style="text-align: center">Do you want to post your own opinion? Make an account click <a href="/login">HERE</a>.</h2>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\development\HomeBrewery\resources\views/Beer/beer.blade.php ENDPATH**/ ?>