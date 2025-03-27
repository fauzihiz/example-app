<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/second', 'second')->name('second');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');

Route::view('/article', 'article')->name('article');