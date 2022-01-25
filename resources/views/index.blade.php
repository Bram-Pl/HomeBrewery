@extends('master')
@section('subtitle', 'Index')
@section('content')
    @auth
        <h1>Hello {{$user->name}}, welcome back to the Home Brewery website.</h1>

    @else
        <h1>Welcome to the Home Brewery website.</h1>
    @endauth
@stop
