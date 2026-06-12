<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;

//Home 
Route::get('/', [HomeController::class, 'index'])->name('home');


//About
Route::get('/about', [AboutController::class, 'index'])->name('about');

//Contact
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/contact/create', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/contacts', [ContactsController::class, 'store'])->name('contact.store');
Route::post('/modal', [ModalController::class, 'store'])->name('modal.store');


//services
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/service/create', [ServicesController::class, 'create'])->name('service.create');
Route::post('/services', [ServicesController::class, 'store'])->name('service.store');
Route::get('service/{id}', [ServicesController::class, 'show'])->name('service.show');



//blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


//projects
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::post('/projects', [ProjectsController::class, 'store'])->name('project.store');
Route::get('/project/create', [ProjectsController::class, 'create'])->name('project.create');
Route::get('project/{id}', [ProjectsController::class, 'show'])->name('project.show');

//realisations
Route::get('/realisations', [HomeController::class, 'realisations'])->name('realisations');

// partners
Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
Route::get('partner/create', [PartnerController::class, 'create'])->name('partner.create');
Route::post('/partners', [PartnerController::class, 'store'])->name('partner.store');
Route::delete('partner/{id}', [PartnerController::class, 'destroy'])->name('partner.destroy');
