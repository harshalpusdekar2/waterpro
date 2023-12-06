<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\TestomonialController;

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/services',[ServicesController::class,'index']);
Route::get('/testimonials',[TestomonialController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
