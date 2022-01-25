@extends('master')
@section('subtitle', 'List Of Beers')
@section('content')
    <h3 style="text-align: center; font-family: unset; font-size: 25pt">Beers available on this website:</h3>
    @foreach ($beers as $beer)
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
    
        <div class="displaybeers center">
            <div class="displaybeerscol0">
                <img src="{{ $beer->image_url }}", alt="{{ $beer->name }}" style="height: 250px; max-width: 350px" >
            </div>
            <div class="displaybeerscol1 center">
                <h2>{{ $beer->name }}</h2>
            </div>
            <div class="displaybeercol2 center">
                <p>{{ $beer->Description }}</p>
            </div>
            <div class="displaybeerscol3">
                <p style="font-size: 18pt; font-weight: bold">{{ $beer->abv}} %</p>
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
    @endforeach
    
@stop
