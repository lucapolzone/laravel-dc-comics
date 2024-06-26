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



Route::get('/', [ComicController::class, 'index'])->name('pages.home');

//rotta con metodo create per il form
Route::get('/create', [ComicController::class, 'create'])->name('pages.create');

//rotta con metodo store per il form
Route::post('/', [ComicController::class, 'store'])->name('pages.store');

Route::get('/{comic}', [ComicController::class, 'show'])->name('pages.show');


//MODIFICA
Route::get('/{comic}/edit', [ComicController::class, 'edit'])->name('pages.edit');
Route::patch('/{comic}', [ComicController::class, 'update'])->name('pages.update');

//ELIMINA
Route::delete('/{comic}', [ComicController::class, 'destroy'])->name('pages.destroy');