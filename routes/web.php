<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);

//Blog
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

//Contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
//Events
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
