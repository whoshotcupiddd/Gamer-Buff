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
        return view('products', compact('products'));
    }

    // Show individual product details
    public function showProductDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('product-details', compact('product'));
    }
}
