<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // Show the checkout page
    public function showCheckout()
    {
        $cart = session()->get('cart', []);

        // Calculate total
        $total = array_sum(array_map(function ($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        return view('checkout', compact('total'));
    }

    // Process the payment
    public function processCheckout(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('products')->with('error', 'Your cart is empty.');
        }

        // Here you would process the payment (e.g., through a payment gateway)

        // Clear the cart after successful payment
        session()->forget('cart');

        return redirect()->route('products')->with('success', 'Your order has been successfully placed!');
    }
}
