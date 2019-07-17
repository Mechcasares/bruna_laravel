@extends('layouts.master')
@section('content')

@foreach (Session::get('cart.products') as $producto)
    <img src="/storage/{{ $producto['photopath'] }}" alt="">
    <h1>{{ $producto['titulo'] }}</h1>
    <small>{{ $producto['precio'] }}</small>
@endforeach
