@extends('master')
@section('subtitle', $beer->name )
@section('content')
<h1 style="text-align: center; font-family: unset; font-size: 25pt">{{ $beer->name }}</h1>
<div class="columnSingleBeer leftSingleBeer">
    <img class="imageSingleBeer" src="{{ $beer->image_url }}" alt="image beer {{ $beer->name }}"/>
</div>
<div class="columnSingleBeer middleSingleBeer">
    <table class="styled-table">
        <thead>
            <tr>
                <th colspan="2">Properties of {{ $beer->name }}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="bold">Name</td>
                <td class="tdVal">{{ $beer->name }}</td>
            </tr>
            <tr>
                <td class="bold">Tagline</td>
                <td class="tdVal">{{ $beer->tagline }}</td>
            </tr>
            <tr>
                <td class="bold">First Brewed</td>
                <td class="tdVal">{{ $beer->first_brewed }}</td>
            </tr>
            <tr>
                <td class="bold">Description</td>
                <td class="tdVal">{{ $beer->Description }}</td>
            </tr>
            <tr>
                <td class="bold">abv</td>
                <td class="tdVal">{{ $beer->abv }} %</td>
            </tr>
            <tr>
                <td class="bold">IBU</td>
                <td class="tdVal">{{ $beer->ibu }}</td>
            </tr>
            <tr>
                <td class="bold">EBC</td>
                <td class="tdVal">{{ $beer->ebc }}<div class='box' style='margin-right: 40px; background-color: {{$color}}'></div></td>
            </tr>
            <tr>
                <td class="bold">SRM</td>
                <td class="tdVal">{{ $beer->srm }}</td>
            </tr>
            <tr>
                <td class="bold">ph</td>
                <td class="tdVal">{{ $beer->ph }}</td>
            </tr>
            <tr>
                <td class="bold">Brewers tip</td>
                <td class="tdVal">{{ $beer->brewers_tips }}</td>
            </tr>
            <tr>
                <td class="bold">Type</td>
                <td class="tdVal">{{ $beer->type }} beer</td>
            </tr>
            <tr>
                <td class="bold">Brewery</td>
                <td class="tdVal">{{ $brewery->name }}</td>
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
                <td class="tdVal">Take <b>{{ $malt[0]->amount }} {{ $malt[0]->unit }}</b> of the <b>{{ $malt[0]->name }}</b> malt. Grind this malt and add it to the <b>{{ $process[0]->boilvolume }} {{ $process[0]->boilvolumeUnit }}</b> water with a temperature of <b>{{ $process[0]->mashTemp }} {{ $process[0]->mashTempUnit}}</b>. This starts the mash process.</td>
            </tr>
            <tr>
                <td class="bold">Step Two</td>
                <td class="tdVal">After letting the mash process run for <b>{{ $process[0]->mashTime}} {{ $process[0]->mashTimeUnit}}</b> the liquid is ready to start the lautering process.</td>
            </tr>
            <tr>
                <td class="bold">Step Three</td>
                <td class="tdVal">The next step is to lauter. This lautering procedure seperatres the <i>wort</i> from the <i>grain</i>. The grain is the fluid that holds the sugars that will be turned into alcohol.</td>
            </tr>
            <tr>
                <td class="bold">Step Four</td>
                <td class="tdVal">Next up is the boiling process. This happens at a temperature of 100 degress <b>{{ $process[0]->mashTempUnit}}</b> and lasts for <b>{{ $process[0]->boilTime}} {{ $process[0]->boilTimeUnit}}</b>. During this cooking process the <b>{{ $hops[0]->name }}</b> hop with an amount of <b>{{ $hops[0]->amount }} {{ $hops[0]->unit }}</b> can be added. The longer you wait with adding the hop the more bitter the taste will be.</td>
            </tr>
            <tr>
                <td class="bold">Step Five</td>
                <td class="tdVal">After boiling the wort is ready to be cooled down until a temperature of about 20 degrees celsius. The wort then has to be transferred to a <i>primary fermenter</i>.</td>
            </tr>
            <tr>
                <td class="bold">Step Six</td>
                <td class="tdVal">The <b>{{ $yeast[0]->name }}</b> is then added in the same container as the wort. The amount is for this recipe is <b>{{ $yeast[0]->amount }} {{ $yeast[0]->unit }}</b>. This yeast is nutrition for the fermentable sugars.</td>
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
                <th colspan="3">Proposed Food Pairing: <i><b>{{ $recipe->title }}</b></i></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan='4'><a href='{{ $recipe->sourceUrl }}'><img class="imageRecipeBeer" src="{{ $recipe->image }}" alt="alt"/></a></td>
            </tr>
            <tr>
                <td class="bold">Time to get ready</td>
                <td class="tdVal">{{ $recipe->readyInMinutes }} minutes</td>
            </tr>
            <tr>
                <td class="bold">Summary</td>
                <td class="tdVal">{{ $recipe->summary }}</td>
            </tr>
            <tr>
                <td class="bold">instructions</td>
                <td class="tdVal">{{ $recipe->instructions }}</td>
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
        @foreach ($reviews as $review)
            @if($beer->id == $review->beer_id)
                <tr>
                    @foreach ($users as $person)
                    @if($person->id == $review->user_id)
                    <td class="bold" style="width: auto;">{{ $person->name }}</td>
                    @endif
                    @endforeach
                    <td class="tdVal">{{$review->review}}</td>
                    <td class="tdVal">{{$review->score}}/5</td>
                    <td class="tdVal">Posted at: {{$review->created_at}}</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    @auth
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
    <button type ="button" onclick = "uploadReview({{$beer->id}}, {{$user->id}})"><strong>Post review</strong></button>
    @else
    <h2 style="text-align: center">Do you want to post your own opinion? Make an account click <a href="/login">HERE</a>.</h2>
    @endauth
</div>
@stop
