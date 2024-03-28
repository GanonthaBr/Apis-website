<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

//Blog
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
