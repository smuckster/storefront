@extends('layout')

@section('body')

<h1>Products</h1>

@forelse($products as $product)
    <h2><a href="{{ $product->path() }}">{{ $product->name }}</a></h2>
    <li>{{ $product->code }}</li>
    <li>{{ $product->description }}</li>
    <li>{{ $product->image }}</li>
    <li>${{ $product->price }}</li>
@empty
    <p>No products yet</p>
@endforelse

@endsection
