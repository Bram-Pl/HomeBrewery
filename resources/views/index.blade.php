@extends('master')
@section('subtitle', 'Index')
@section('content')
    @auth
        <h1 style='text-align: center'>Hello {{$user->name}}, welcome back to the Home Brewery website.</h1>

    @else
        <h1 style='text-align: center'>Welcome to the Home Brewery website.</h1>
    @endauth
@stop
