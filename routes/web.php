<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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



Route::get('/', [ComicController::class, 'index'])->name('home');

//rotta con metodo create per il form
Route::get('/create', [ComicController::class, 'create'])->name('pages.create');

Route::get('/{comic}', [ComicController::class, 'show'])->name('pages.show');

//rotta con metodo store per il form
Route::post('/', [ComicController::class, 'store'])->name('pages.store');