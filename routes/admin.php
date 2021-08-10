<?php

use App\Http\Controllers\Admin\PageController;
use Illuminate\Support\Facades\Route;


Route::name('admin.')->group(function() {
    Route::get('/', [PageController::class, 'home'])->name('home');

});

//
//Route::prefix('words')
//    ->name('words.')
//    ->group(function () {
//        Route::get('/', [WordController::class, 'index'])->name('index');
//        Route::get('{id}', [WordController::class, 'show'])->name('show');
//    });


