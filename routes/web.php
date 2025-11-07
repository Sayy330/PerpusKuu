<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BorrowingController;
use Illuminate\Support\Facades\Route;

// Halaman utama (dashboard)
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Resource routes (CRUD otomatis)
Route::resources([
    'categories' => CategoryController::class,
    'books' => BookController::class,
    'students' => StudentController::class,
    'borrowings' => BorrowingController::class,
]);
