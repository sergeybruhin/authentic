<?php

use App\Http\Controllers\PhraseController;
use App\Http\Controllers\WordController;
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

Route::get('phrases/{id}', [PhraseController::class, 'show'])->name('phrases.show');
Route::get('words/{id}', [WordController::class, 'show'])->name('words.show');

