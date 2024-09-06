<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::resource('user', UserLoginController::class)->except(['index', 'show']);
Route::post('user/login', [UserLoginController::class, 'login'])->name('user.login');
Route::get('user/create', [UserLoginController::class, 'create'])->name('user.create');
// Route to display all products
Route::get('/products', [ProductController::class, 'showProductsPage'])->name('products');

// Route to display specific product details
Route::get('/products/{id}', [ProductController::class, 'showProductDetails'])->name('product.details');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
Route::put('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout');
Route::post('/checkout/process', [CheckoutController::class, 'processCheckout'])->name('checkout.process');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');
