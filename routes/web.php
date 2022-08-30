<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/stores')->name('stores.')->group(function() {
        Route::get('/', [\App\Http\Controllers\Admin\StoreController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\StoreController::class, 'create'])->name('create');
        Route::post('/store', [\App\Http\Controllers\Admin\StoreController::class, 'store'])->name('store');
        Route::get('/{store}/edit', [\App\Http\Controllers\Admin\StoreController::class, 'edit'])->name('edit');
        Route::post('/update/{store}', [\App\Http\Controllers\Admin\StoreController::class, 'update'])->name('update');;
        Route::get('/destroy/{store}', [\App\Http\Controllers\Admin\StoreController::class, 'destroy'])->name('destroy');;
    });    
});
