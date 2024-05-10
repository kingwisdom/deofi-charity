<?php

use Illuminate\Support\Facades\Route;



Route::get('/gallery', [App\Http\Controllers\AdminController::class, 'gallery'])->name('galleries');
Route::get('/create-gallery', [App\Http\Controllers\AdminController::class, 'create_gallery']);
Route::post('/post-gallery', [App\Http\Controllers\AdminController::class, 'post_gallery']);

Route::get('/events', [App\Http\Controllers\AdminController::class, 'events'])->name('events');

Route::get('/create-event', [App\Http\Controllers\AdminController::class, 'create_event']);
Route::post('/post-event', [App\Http\Controllers\AdminController::class, 'post_event'])->name('post_event');
Route::delete('/delete-gallery/{id}', [App\Http\Controllers\AdminController::class, 'deleteGallery'])->name('deleteGallery');
Route::delete('/delete-event/{id}', [App\Http\Controllers\AdminController::class, 'deleteEvent'])->name('deleteEvent');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing');
Route::get('/event/{slug}', [App\Http\Controllers\HomeController::class, 'show_event'])->name('event');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/post-contact', [App\Http\Controllers\HomeController::class, 'post_contact'])->name('contact_process');
Route::get('/become-a-volunteers', [App\Http\Controllers\HomeController::class, 'volunteer'])->name('volunteer');
Route::post('/become-volunteers', [App\Http\Controllers\HomeController::class, 'sendMail'])->name('post_volunteer');

Route::get('/donate', function () {
    return view('donate');
});
Route::get('/menu', function () {
    return view('admin.admin_menu');
});
