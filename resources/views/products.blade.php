@extends('layouts.app')

@section('content')
    <div class="col-md-12 text-center">
        <h1 class="product-title">Product Store</h1>
        <p class="subtitle">Browse through our exclusive collection of products!</p>
    </div>

    <!-- Product Grid -->
    <div class="row">
        @if($products->count())
            @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 text-center shadow-sm">
                        <!-- Product Image (Clickable) -->
                        <a href="{{ route('product.details', $product->id) }}">
                            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        </a>
                        <!-- Product Name & Price -->
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text text-muted">${{ number_format($product->price, 2) }}</p>
                        </div>
                        <!-- Button to View Details and Add to Cart -->
                        <div class="card-footer bg-transparent d-flex justify-content-between">
                            <!-- View Details Button -->
                            <a href="{{ route('product.details', $product->id) }}" class="btn btn-outline-primary btn-sm">View Details</a>

                            <!-- Add to Cart Button -->
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-success btn-sm">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12 text-center">
                <p>No products found</p>
            </div>
        @endif
    </div>
@endsection

@push('styles')
    <style>
        body {
            background-color: #f4f6f9;
            color: #333333;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        /* Title Styling */
        .product-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #343a40;
            margin-bottom: 0;
        }
        .subtitle {
            font-size: 1.1rem;
            color: #6c757d;
        }
        /* Card Design */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
        }
        .card-img-top:hover {
            transform: scale(1.05);
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #007bff;
            margin-bottom: 0.5rem;
        }
        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }
        .card-footer {
            border-top: none;
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 1rem;
        }
        .btn-outline-primary, .btn-outline-success {
            border-radius: 30px;
        }
        /* Responsive Grid Adjustments */
        @media (max-width: 768px) {
            .product-title {
                font-size: 2rem;
            }
            .subtitle {
                font-size: 1rem;
            }
        }
        @media (max-width: 576px) {
            .product-title {
                font-size: 1.75rem;
            }
            .subtitle {
                font-size: 0.9rem;
            }
            .card-img-top {
                height: 180px;
            }
        }
    </style>
@endpush
