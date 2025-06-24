<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home']);
Route::get('/login', [SiteController::class, 'login']);
Route::get('/register', [SiteController::class, 'register']);
Route::get('/salon/{id}', [SiteController::class, 'salon']);
Route::get('/offer/{id}', [SiteController::class, 'offer']);
Route::get('/product/{id}', [SiteController::class, 'product']);
Route::get('/vendors', [SiteController::class, 'vendors']);
Route::get('/faq', [SiteController::class, 'faq']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/terms', [SiteController::class, 'terms']);
Route::get('/privacy', [SiteController::class, 'privacy']);
Route::get('/offers', [SiteController::class, 'offers'])->name('offers');
Route::get('/products', [SiteController::class, 'products'])->name('products');
