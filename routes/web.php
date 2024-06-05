<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\DomaineInterventionController;

//Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/stats', [HomeController::class, 'getStats'])->name('stats');
Route::get('/stats/{id}', [HomeController::class, 'edit'])->name('stats.edit');
Route::put('/stats/{id}', [HomeController::class, 'update'])->name('stats.update');
Route::get('/reports', [HomeController::class, 'reportList'])->name('report');
Route::post('/reports', [HomeController::class, 'reportStore'])->name('report.store');
Route::get('/createreport', [HomeController::class, 'createReport'])->name('report.create');
Route::delete('/reports/{id}', [HomeController::class, 'destroy'])->name('reports.destroy');
Route::get('/reports/{id}', [HomeController::class, 'reportEdit'])->name('report.edit');
Route::put('/reports/{id}', [HomeController::class, 'reportUpdate'])->name('report.update');

//Blog
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/recentBlogs', [BlogController::class, 'recentBlogs'])->name('blogs.recentBlogs');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blog', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
//delete image
Route::delete('/image/{id}/', [BlogController::class, 'deleteImage'])->name('blogs.deleteImage');



//Contacts
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/message/{id}/show', [ContactController::class, 'show'])->name('message.show');
Route::delete('/message/{id}', [ContactController::class, 'destroy'])->name('message.destroy');
//Events
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/recentEvents', [EventsController::class, 'recentEvents'])->name('events.recentEvents');
Route::get('/createev', [EventsController::class, 'create'])->name('events.create');
Route::post('/events', [EventsController::class, 'store'])->name('events.store');
Route::get('/events/{id}', [EventsController::class, 'show'])->name('events.show');
Route::get('/events/{id}/edit', [EventsController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventsController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [EventsController::class, 'destroy'])->name('events.destroy');
//About
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

//Domaine d'intervention
Route::get('/domaines/santenutrition', [DomaineInterventionController::class, 'santenutrition'])->name('domaines.santenutrition');
Route::get('/domaines/urgencehumanitaire', [DomaineInterventionController::class, 'urgencehumanitaire'])->name('domaines.urgencehumanitaire');
Route::get('/domaines/securitealimentaire', [DomaineInterventionController::class, 'securitealimentaire'])->name('domaines.securitealimentaire');
Route::get('/domaines/educationdeveloppement', [DomaineInterventionController::class, 'educationdeveloppement'])->name('domaines.educationdeveloppement');

//testimonials
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');
Route::get('/createt', [TestimonialsController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');
Route::get('/testimonial/{id}/edit', [TestimonialsController::class, 'edit'])->name('testimonials.edit');
Route::put('/testimonial/{id}', [TestimonialsController::class, 'update'])->name('testimonials.update');
Route::delete('/testimonial/{id}', [TestimonialsController::class, 'destroy'])->name('testimonials.destroy');

//NewsLetter
Route::post('/newsletter', [NewsLetterController::class, 'subscribe'])->name('newsletter.subscribe');





//protected Routes
Route::group(['middleware' => ['auth']], function () {
    //the routes go here...
    //admin
    Route::get('/adminapis', [AdminDashboardController::class, 'index'])->name('admin');
    Route::get('/allblogs', [AdminDashboardController::class, 'allbogs'])->name('admin.allblogs');
    Route::get('/allEvents', [AdminDashboardController::class, 'allEvents'])->name('admin.allEvents');
    Route::get('/createblog', [AdminDashboardController::class, 'create'])->name('admin.create');
    Route::get('/createvent', [AdminDashboardController::class, 'createEvent'])->name('admin.createEvent');
    Route::get('alltestimonials', [AdminDashboardController::class, 'allTestimonials'])->name('admin.allTestimonials');
    Route::get('/createTestimonial', [AdminDashboardController::class, 'createTestimonial'])->name('admin.createTestimonial');
    Route::get('/allrequests', [AdminDashboardController::class, 'userRequests'])->name('admin.allrequests');
    Route::get('/allreports', [AdminDashboardController::class, 'allreports'])->name('admin.allreports');
    Route::get('/allcauses', [AdminDashboardController::class, 'allcauses'])->name('admin.allcauses');
    Route::get('/createCause', [AdminDashboardController::class, 'createCause'])->name('admin.createcause');
});


// Causes
Route::get('/causes', [CausesController::class, 'index'])->name('allcauses');
Route::get('/createcause', [CausesController::class, 'create'])->name('causes.create');
Route::post('/causes', [CausesController::class, 'store'])->name('causes.store');
Route::delete('/cause/{id}', [CausesController::class, 'destroy'])->name('causes.destroy');
Route::get('/causes/{id}', [CausesController::class, 'edit'])->name('causes.edit');
Route::put('/causes/{id}', [CausesController::class, 'update'])->name('causes.update');

// comments
Route::post('/comments', [CommentsController::class, 'store'])->name('comments.store');
Route::delete('/comment/{id}', [CommentsController::class, 'destroy'])->name('comments.destroy');



Auth::routes();
Route::post('/register-from-blog', [RegisterController::class, 'registerBlog'])->name('registerFromBlog');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
