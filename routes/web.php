<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\AuthUserMiddleware;
use App\Http\Controllers\SupplierController;


Route::get('/login',[UsersController::class,'loginPage']);
Route::post('/doLogin',[UsersController::class,'doLogin'])->name('doLogin');

Route::middleware([AuthUserMiddleware::class])->group(function () {
    Route::get('/',[UsersController::class,'home'])->name('home.user');

    Route::get('/logout',[UsersController::class,'logout'])->name('logout.user');
    Route::get('/supplier-list',[SupplierController::class,'index'])->name('supplier.list');

    Route::get('/supplier-store',[SupplierController::class,'store'])->name('supplier.store');
    Route::post('/supplier-store-data',[SupplierController::class,'addSupplier'])->name('supplier.add');

});