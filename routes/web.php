<?php

// use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BorrowingController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resources([
    'categories' => CategoryController::class,
    'books' => BookController::class,
    'students' => StudentController::class,
    'borrowings' => BorrowingController::class,
]);

