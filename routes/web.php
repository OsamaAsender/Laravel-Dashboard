<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;

use App\Http\Controllers\CategoryController;

Route::resource('categories', CategoryController::class);


// Route::get('/products', [ProductController::class, 'products'] )-> name('products');
// Route::get('/create', [ProductController::class, 'create'])-> name('create');
// // Route::post('/store', [ProductController::class, 'store']);
// Route::get('/edit', [ProductController::class, 'edit'])-> name('edit');
// // Route::put('/update', [ProductController::class, 'update']);
// // Route::delete('/destroy', [ProductController::class, 'destroy']);
// Route::get('/show', [ProductController::class,'show'])-> name('show');
// Route::get('/store', [ProductController::class,'store'])-> name('store');



  

