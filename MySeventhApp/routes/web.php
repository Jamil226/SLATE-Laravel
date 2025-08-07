<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\Menucontroller;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/menu', [Menucontroller::class, 'Menu'])->name('menu');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitRecord'])->name('submitContact');