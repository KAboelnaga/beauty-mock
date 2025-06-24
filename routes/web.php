<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::get('/register', [SiteController::class, 'register'])->name('register');
Route::get('/salon/{id}', [SiteController::class, 'salon'])->name('salon.show');
Route::get('/offer/{id}', [SiteController::class, 'offer'])->name('offer.show');
Route::get('/product/{id}', [SiteController::class, 'product'])->name('product.show');
Route::get('/vendors', [SiteController::class, 'vendors'])->name('vendors');
Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/terms', [SiteController::class, 'terms'])->name('terms');
Route::get('/privacy', [SiteController::class, 'privacy'])->name('privacy');
Route::get('/offers', [SiteController::class, 'offers'])->name('offers');
Route::get('/products', [SiteController::class, 'products'])->name('products');
Route::post('/contact', [SiteController::class, 'submitContact'])->name('contact.submit');
