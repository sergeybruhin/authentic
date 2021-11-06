<?php

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PhraseCollectionController;
use App\Http\Controllers\Frontend\PhraseController;
use App\Http\Controllers\Frontend\SelectProfileController;
use App\Http\Controllers\Frontend\WordController;
use App\Http\Controllers\Frontend\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WordCollectionController;
use App\Http\Controllers\Frontend\TagController;


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

Route::middleware('profile')->group(function () {
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


    Route::prefix('word-collections')
        ->name('wordCollections.')
        ->group(function () {
            Route::get('/', [WordCollectionController::class, 'index'])->name('index');
            Route::get('{id}', [WordCollectionController::class, 'show'])->name('show');
            Route::get('{id}/{wordId}', [WordCollectionController::class, 'showWord'])->name('showWord');
        });


    Route::prefix('phrases')
        ->name('phrases.')
        ->group(function () {
            Route::get('/', [PhraseController::class, 'index'])->name('index');
            Route::get('{id}', [PhraseController::class, 'show'])->name('show');
        });


    Route::prefix('phrase-collections')
        ->name('phraseCollections.')
        ->group(function () {
            Route::get('/', [PhraseCollectionController::class, 'index'])->name('index');
            Route::get('{id}', [PhraseCollectionController::class, 'show'])->name('show');
            Route::get('{id}/{phraseId}', [PhraseCollectionController::class, 'showPhrase'])->name('showPhrase');
        });


    Route::prefix('tags')
        ->name('tags.')
        ->group(function () {
            Route::get('/', [TagController::class, 'index'])->name('index');
            Route::get('{id}', [TagController::class, 'show'])->name('show');
        });

    Route::get('/', [PageController::class, 'home'])->name('home');


});

Route::post('select-profile', SelectProfileController::class)->name('selectProfile');


Route::prefix('auth')
    ->group(function () {
        Route::get('login', [LoginController::class, 'login'])->name('login');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
    });

