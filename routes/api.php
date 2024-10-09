<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// get all products
Route::get('products', [ProductController::class, 'getProduct']);
// get specific product
Route::get('product/{id}', [ProductController::class, 'getProductById']);
// add product
Route::post('addProduct', [ProductController::class, 'addProduct']);
// update product
Route::put('updateProduct/{id}', [ProductController::class, 'updateProduct']);
// delete product
Route::delete('deleteProduct/{id}', [ProductController::class, 'deleteProduct']);
