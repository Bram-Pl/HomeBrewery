@extends('master')
@section('subtitle', 'List Of Beers')
@section('content')
    <h3>This page is the beer page.</h3>
    <br>
    <h1>{{$beer}}</h1>
    <br>
    <h1>{{$hops}}</h1>
    <br>
    <h1>{{$malt}}</h1>
    <br>
    <h1>{{$yeast}}</h1>
@stop
