<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Customer\OrderController as CustomerOrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/About', function () {
    $ninjas =[
        ["name" => "mario", "skill" =>75, "id" => "1"],
        ["name" => "luigi", "skill" =>85, "id" => "2"]
    ];
    return view('AboutUs',["ninjas" => $ninjas]);
});
Route::get('/Contact', function () {
    return view('Contactus');
});
Route::get('/Profile', function () {
    return view('Profile');
});
Route::get('/products', function () {
    return view('product.products');
});
Route::get('/Products/create', function () {
    return view('Products.create');
});

Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('users', UserController::class);
Route::resource('coupons', CouponController::class);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [AdminOrderController::class, 'show'])->name('orders.show');
    Route::get('/orders/{order}/edit', [AdminOrderController::class, 'edit'])->name('orders.edit');
    Route::put('/orders/{order}', [AdminOrderController::class, 'update'])->name('orders.update');
    Route::delete('/orders/{order}', [AdminOrderController::class, 'destroy'])->name('orders.destroy');
});

Route::prefix('customer')->name('customer.')->group(function () {
    Route::get('/orders', [CustomerOrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/create', [CustomerOrderController::class, 'create'])->name('orders.create');
    Route::post('/orders', [CustomerOrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{order}', [CustomerOrderController::class, 'show'])->name('orders.show');
});
