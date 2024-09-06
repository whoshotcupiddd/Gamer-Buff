<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show all products
    public function showProductsPage()
    {
        $products = Product::all();
        return view('frontend.products', compact('products'));
    }

    // Show individual product details
    public function showProductDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.product-details', compact('product'));
    }
}
