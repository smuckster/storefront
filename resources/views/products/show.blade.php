@extends('layout')

@section('body')

    <h2>{{ $product->name }}</h2>
    <li>{{ $product->code }}</li>
    <li>${{ $product->price }}</li>

@endsection
