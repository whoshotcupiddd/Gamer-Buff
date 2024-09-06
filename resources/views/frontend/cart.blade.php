@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container my-5">
            <h1 class="text-center mb-4">Your Cart</h1>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(!empty($cart) && count($cart) > 0)
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                        <tr>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $id => $item)
                            <tr>
                                <td><img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}" width="150"></td>
                                <td>{{ $item['name'] }}</td>
                                <td>${{ number_format($item['price'], 2) }}</td>
                                <td>{{ $item['quantity'] }}</td>
                                <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                <td>
                                    <form action="{{ route('cart.remove', $id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                    </form>
                                    <form action="{{ route('cart.update', $id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PUT')
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" style="width: 60px;">
                                        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="text-right">
                    <h4>Total: ${{ number_format(array_sum(array_map(function ($item) {
                        return $item['price'] * $item['quantity'];
                    }, $cart)), 2) }}</h4>
                    <form action="{{ route('cart.clear') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Clear Cart</button>
                    </form>
                    <!-- Checkout Button -->
                    <a href="{{ route('checkout') }}" class="btn btn-success ml-2">Checkout</a>
                </div>
            @else
                <div class="text-center">
                    <p>Your cart is empty!</p>
                    <a href="{{ route('products') }}" class="btn btn-primary">Continue Shopping</a>
                </div>
            @endif
        </div>
    </div>
@endsection
