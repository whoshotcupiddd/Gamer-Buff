<!-- resources/views/product-details.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <!-- Display the name of the product -->
        <h1 class="text-center">{{ $product->name }}</h1>

        <!-- Product image -->
        <div class="text-center my-4">
            <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
        </div>

        <!-- Product description -->
        <p class="lead">{{ $product->description }}</p>

        <!-- Product price -->
        <p class="text-muted">Price: ${{ number_format($product->price, 2) }}</p>

        <!-- Back to products button -->
        <a href="{{ route('products') }}" class="btn btn-primary">Back to Products</a>
    </div>
@endsection
