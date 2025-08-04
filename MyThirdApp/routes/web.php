<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactContoller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'home'])->name('about');
Route::get('/contact', [ContactContoller::class, 'index'])->name('contact');