<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');