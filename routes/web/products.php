<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('products')->name('products.')->group(function () {
    $ControllerClass = ProductController::class;
    Route::get('/', [$ControllerClass, 'index'])->name('index');
    Route::get('/show/{product}', [$ControllerClass, 'show'])->name('show');
    Route::get('/create', [$ControllerClass, 'create'])->name('create');
    Route::post('/create', [$ControllerClass, 'store'])->name('store');
    Route::get('/edit/{product}', [$ControllerClass, 'edit'])->name('edit');
    Route::put('/edit/{product}', [$ControllerClass, 'update'])->name('update');
    Route::delete('/destroy/{product}', [$ControllerClass, 'destroy'])->name('destroy');
});
