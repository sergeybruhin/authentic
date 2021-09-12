<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\ProfileController;
use Illuminate\Support\Facades\Route;


Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::name('admin.')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('settings', [PageController::class, 'settings'])->name('settings');
    Route::get('profiles/{id}', [ProfileController::class, 'show'])->name('profiles.show');

});





//
//Route::prefix('words')
//    ->name('words.')
//    ->group(function () {
//        Route::get('/', [WordController::class, 'index'])->name('index');
//        Route::get('{id}', [WordController::class, 'show'])->name('show');
//    });


