<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhraseController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\TagController;

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


Route::get('/', [PageController::class, 'home'])->name('home');

Route::prefix('phrases')
    ->name('phrases.')
    ->group(function () {
        Route::get('/', [PhraseController::class, 'index'])->name('index');
        Route::get('{id}', [PhraseController::class, 'show'])->name('show');
    });


Route::prefix('words')
    ->name('words.')
    ->group(function () {
        Route::get('/', [WordController::class, 'index'])->name('index');
        Route::get('{id}', [WordController::class, 'show'])->name('show');
    });


Route::prefix('collections')
    ->name('collections.')
    ->group(function () {
        Route::get('/', [CollectionController::class, 'index'])->name('index');
        Route::get('{id}', [CollectionController::class, 'show'])->name('show');
    });


Route::prefix('tags')
    ->name('tags.')
    ->group(function () {
        Route::get('/', [TagController::class, 'index'])->name('index');
        Route::get('{id}', [TagController::class, 'show'])->name('show');
    });
