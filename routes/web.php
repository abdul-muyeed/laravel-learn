<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class,'index'])->name('home');
Route::get('/create', [BookController::class,'create'])->name('books.create');
Route::post('/store', [BookController::class,'store'])->name('books.store');
Route::get('/{product}/delete', [BookController::class,'show'])->name('books.show');
Route::delete('/{product}/delete', [BookController::class,'destroy'])->name('books.destroy');
Route::get('/{product}/edit', [BookController::class,'edit'])->name('books.edit');
Route::put('/{product}/update', [BookController::class,'update'])->name('books.update');
