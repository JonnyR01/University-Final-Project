<?php

use App\Http\Controllers\Admin\AdminProducts;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Products Routes
Route::get('/products/maincourses', [\App\Http\Controllers\ProductsController::class, 'maincourses'])->name('products.maincourses');

Route::get('/products/house-specials', [\App\Http\Controllers\ProductsController::class, 'specials'])->name('products.specials');

Route::get('/products/breakfasts', [\App\Http\Controllers\ProductsController::class, 'breakfasts'])->name('products.breakfasts');

Route::get('/products/deserts', [\App\Http\Controllers\ProductsController::class, 'deserts'])->name('products.deserts');



//Admin Routes
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::resource('/products', AdminProducts::class);
    Route::get('orders', [\App\Http\Controllers\ProductsController::class, 'orders'])->name('products.orders');
});

Route::get('/admindash',[AdminProducts::class, 'dash'])->name('admindash');

// Cart Routes
Route::get('/cart', [\App\Http\Controllers\CartController ::class, 'index'])->name('cart');

Route::post('/cart/add/{product}', [\App\Http\Controllers\CartController ::class, 'addItem'])->name('cart.add');

Route::get('/cart/die', [\App\Http\Controllers\CartController ::class, 'destroy'])->name('cart.destroy');

Route::get('/checkout', [\App\Http\Controllers\CartController ::class, 'checkout'])->name('cart.checkout');
Route::post('/checkout', [\App\Http\Controllers\CartController ::class, 'stripe'])->name('cart.stripe');

Route::get('/success');


