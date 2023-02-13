<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CategoryController;

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

//GET BOOKS
Route::get('/books', [BookController::class, 'index'])->name('books.index');
//GET BOOK
Route::get('/books/show/{id}', [BookController::class, 'show'])->name('books.show');

Route::middleware('isLogin')->group(function () {
    //CREATE BOOK
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

    //EDIT BOOK
    Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/update/{id}', [BookController::class, 'update'])->name('books.update');

    Route::get('/books/delete/{id}', [BookController::class, 'delete'])->name('books.delete');
});

Route::middleware('isLoginAdmin')->group(function () {
    Route::get('/books/delete/{id}', [BookController::class, 'delete'])->name('books.delete');
    #notes: create
    Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');

    Route::post('/notes/store', [NoteController::class, 'store'])->name('notes.store');
});

// Category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');

Route::get('/categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

// Authentication

Route::middleware('isGuest')->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/handleRegister', [AuthController::class, 'handleRegister'])->name('auth.handleRegister');
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');

    Route::post('/handleLogin', [AuthController::class, 'handleLogin'])->name('auth.handleLogin');
});
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
