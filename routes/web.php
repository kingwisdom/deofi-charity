<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('landing');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/post-contact', [App\Http\Controllers\HomeController::class, 'post_contact'])->name('contact_process');
Route::get('/become-a-volunteers', [App\Http\Controllers\HomeController::class, 'volunteer'])->name('volunteer');
Route::post('/become-volunteers', [App\Http\Controllers\HomeController::class, 'sendMail'])->name('post_volunteer');