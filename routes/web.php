<?php
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\AdminController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome')

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/admin', [AdminController::class, "admin"])->name('admin');
Route::post('/slider-create', [AdminController::class, "slider"])->name('slider.create');
Route::get('/slider-show', [AdminController::class, "sliderview"])->name('slider.show');
