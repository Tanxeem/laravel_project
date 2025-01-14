<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\collectionsController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\kidsController;
use App\Http\Controllers\menController;
use App\Http\Controllers\womenController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/about', [aboutController::class, 'about'])->name('about');
Route::get('/contact', [contactController::class, 'contact'])->name('contact');
Route::get('/women', [womenController::class, 'women'])->name('women');
Route::get('/men', [menController::class, 'men'])->name('men');
Route::get('/kids', [kidsController::class, 'kids'])->name('kids');
Route::get('/collections', [collectionsController::class, 'collections'])->name('collections');


