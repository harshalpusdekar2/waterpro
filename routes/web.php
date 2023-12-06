<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\TestomonialController;
use App\Http\Controllers\Frontend\BasementController;
use App\Http\Controllers\Frontend\ConstructionController;
use App\Http\Controllers\Frontend\EpoxyController;
use App\Http\Controllers\Frontend\IndustrialController;
use App\Http\Controllers\Frontend\RoofController;
use App\Http\Controllers\Frontend\SealantController;
use App\Http\Controllers\Frontend\StructuralController;
use App\Http\Controllers\Frontend\SwimmingController;
use App\Http\Controllers\Frontend\ToiletController;






Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/services',[ServicesController::class,'index']);
Route::get('/testimonials',[TestomonialController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/basement',[BasementController::class,'index']);
Route::get('/construction',[ConstructionController::class,'index']);
Route::get('/epoxy',[EpoxyController::class,'index']);
Route::get('/industrial',[IndustrialController::class,'index']);
Route::get('/roof',[RoofController::class,'index']);
Route::get('/sealant',[SealantController::class,'index']);
Route::get('/structure',[StructuralController::class,'index']);
Route::get('/swimming',[SwimmingController::class,'index']);
Route::get('/toilet',[ToiletController::class,'index']);







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
