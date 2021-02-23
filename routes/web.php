<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminProducts;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/maincourses',[\App\Http\Controllers\ProductsController::class, 'maincourses']);

Route::get('/house-specials',[\App\Http\Controllers\ProductsController::class, 'specials']);

Route::get('/breakfasts',[\App\Http\Controllers\ProductsController::class, 'breakfasts']);

Route::get('/deserts',[\App\Http\Controllers\ProductsController::class, 'deserts']);


//Admin Routes
Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('/products', AdminProducts::class);
});
