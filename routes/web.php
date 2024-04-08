<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DomaineInterventionController;

Route::get('/', [HomeController::class, 'index']);

//Blog
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');

//Contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
//Events
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
//About
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

//Domaine d'intervention
Route::get('/domaines/santenutrition', [DomaineInterventionController::class, 'santenutrition'])->name('domaines.santenutrition');
Route::get('/domaines/urgencehumanitaire', [DomaineInterventionController::class, 'urgencehumanitaire'])->name('domaines.urgencehumanitaire');
Route::get('/domaines/securitealimentaire', [DomaineInterventionController::class, 'securitealimentaire'])->name('domaines.securitealimentaire');
Route::get('/domaines/educationdeveloppement', [DomaineInterventionController::class, 'educationdeveloppement'])->name('domaines.educationdeveloppement');
