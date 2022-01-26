@extends('master')
@section('subtitle', 'Breweries')
@section('content')
    <h3 style="text-align: center; font-family: unset; font-size: 25pt">Breweries available on Home Brewery</h3>
    @foreach ($breweries as $brewery)
        <h2 style='text-align: center; border-collapse: collapse; margin: 25px 0; font-size: 0.9em;
            font-family: sans-serif; min-width: 400px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            font-size: 22pt; background-color: rgba(26, 188, 156, 0.25)'>{{ $brewery->name }}</h2>
        <h3 style='text-align: center;'>{{ $brewery->address }}</h3>
        <h6 style='text-align: center;'>They brew the following beers</h6>
            @foreach($beers as $beer)
                @if ($beer->breweries_id == $brewery->id)
                    <a style="text-decoration: none; color: black;" href="/beer/{{ $beer->id }}"><p style='text-align: center;'>{{ $beer->name }}</p></a>
                @endif
            @endforeach
        <div style='width: 500px; margin-left: auto; margin-right: auto;'>
            <iframe class='googlemaps' width="600" height="450" loading="lazy" allowfullscreen
                    src="https://www.google.com/maps/embed/v1/search?q={{ $brewery->address }}&key=AIzaSyDAC-e6VDcQVG-7kiU2kD-RJtn1Cqkk-M0">
            </iframe>
        </div>
        <br><br>
    @endforeach
@stop
