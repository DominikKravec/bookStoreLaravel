<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::get('books/create', [BookController::class, 'create'])->name('books.create');
Route::post('books/store', [BookController::class, 'store'])->name('books.store');
Route::get('books/details/{id}', [BookController::class, 'details'])->name('books.details');
Route::delete('book.delete/{id}', [BookController::class, 'delete'])->name('books.delete');
Route::get('books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::post('books.update', [BookController::class, 'update'])->name('books.update');

Route::get('author/details/{id}', [AuthorController::class, 'details'])->name('author.details');
Route::get('author/create', [AuthorController::class, 'create'])->name('author.create');
Route::post('author/store', [AuthorController::class, 'store'])->name('author.store');
Route::delete('author.delete/{id}', [AuthorController::class, 'delete'])->name('author.delete');
Route::get('author/edit/{id}', [AuthorController::class, 'edit'])->name('author.edit');
Route::post('author.update', [AuthorController::class, 'update'])->name('author.update');

Route::get('auth/register', [AuthController::class, 'showRegister'])->name('auth.register');
Route::post('auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('auth/login', [AuthController::class, 'showLogin'])->name('auth.login');
Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');