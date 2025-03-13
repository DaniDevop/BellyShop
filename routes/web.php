<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\AuthUserMiddleware;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;

Route::get('/login',[UsersController::class,'loginPage']);
Route::post('/doLogin',[UsersController::class,'doLogin'])->name('doLogin');

Route::middleware([AuthUserMiddleware::class])->group(function () {
    Route::get('/home',[UsersController::class,'home'])->name('home.user');

    Route::get('/logout',[UsersController::class,'logout'])->name('logout.user');
    Route::get('/supplier-list',[SupplierController::class,'index'])->name('supplier.list');

    Route::get('/supplier-store',[SupplierController::class,'store'])->name('supplier.store');
    Route::post('/supplier-store-data',[SupplierController::class,'addSupplier'])->name('supplier.add');

     // Product Controller 
     Route::get('/product-store',[ProductController::class,'store'])->name('product.store');
     Route::post('/product-store-add',[ProductController::class,'addProduct'])->name('product.add.store');
     Route::get('/product-store-liste',[ProductController::class,'index'])->name('product.liste.data');

     // Client Controller

     Route::get('/',[ClientController::class,'index'])->name('home.client');
     Route::get('/listes-product',[ClientController::class,'product'])->name('client.product');
     Route::get('/register-client',[ClientController::class,'register'])->name('client.register');
     Route::get('/client-login',[ClientController::class,'login'])->name('client.login');
     Route::get('/client-cart',[ClientController::class,'cart'])->name('client.cart');
     Route::get('/client-historique-dashboard',[ClientController::class,'client'])->name('client.dashboard');

});