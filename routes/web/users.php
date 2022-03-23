<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('users')->name('users.')->group(function () {
    $ControllerClass = UserController::class;
    Route::get('/', [$ControllerClass, 'index'])->name('index');
    Route::get('/show/{user}', [$ControllerClass, 'show'])->name('show');
    Route::get('/create', [$ControllerClass, 'create'])->name('create');
    Route::post('/create', [$ControllerClass, 'store'])->name('store');
    Route::get('/edit/{user}', [$ControllerClass, 'edit'])->name('edit');
    Route::put('/edit/{user}', [$ControllerClass, 'update'])->name('update');
    Route::delete('/destroy/{user}', [$ControllerClass, 'destroy'])->name('destroy');
});
