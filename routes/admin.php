<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Profile\LogoutController;
use Illuminate\Support\Facades\Route;


Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::name('admin.')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/settings', [PageController::class, 'settings'])->name('settings');
});





//
//Route::prefix('words')
//    ->name('words.')
//    ->group(function () {
//        Route::get('/', [WordController::class, 'index'])->name('index');
//        Route::get('{id}', [WordController::class, 'show'])->name('show');
//    });


