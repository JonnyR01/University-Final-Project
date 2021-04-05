<?php

use App\Http\Controllers\Admin\AdminProducts;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Products Routes
Route::get('/products/maincourses', [ProductsController::class, 'maincourses'])->name('products.maincourses');

Route::get('/products/house-specials', [ProductsController::class, 'specials'])->name('products.specials');

Route::get('/products/breakfasts', [ProductsController::class, 'breakfasts'])->name('products.breakfasts');

Route::get('/products/deserts', [ProductsController::class, 'deserts'])->name('products.deserts');



//Admin Routes
Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    Route::resource('/products', AdminProducts::class);
    Route::get('orders', [ProductsController::class, 'orders'])->name('products.orders');
});

Route::get('/admindash',[AdminProducts::class, 'dash'])->name('admindash');

// Cart Routes
Route::get('/cart', [CartController ::class, 'index'])->name('cart');

Route::post('/cart/add/{product}', [CartController ::class, 'addItem'])->name('cart.add');

Route::get('/cart/die', [CartController ::class, 'destroy'])->name('cart.destroy');

Route::get('/checkout', [CartController ::class, 'checkout'])->name('cart.checkout');
Route::post('/checkout', [CartController ::class, 'stripe'])->name('cart.stripe');

Route::get('/success');


