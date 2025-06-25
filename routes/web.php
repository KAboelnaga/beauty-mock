<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CartController;

// ✅ Public routes
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::post('/login', [SiteController::class, 'loginSubmit'])->name('login.submit');
Route::get('/register', [SiteController::class, 'register'])->name('register');
Route::post('/register', [SiteController::class, 'handleRegister'])->name('register.submit');
Route::get('/salon/{id}', [SiteController::class, 'salon'])->name('salon.show');
Route::get('/offer/{id}', [SiteController::class, 'offer'])->name('offer.details');
Route::get('/product/{id}', [SiteController::class, 'product'])->name('product.show');
Route::get('/vendors', [SiteController::class, 'vendors'])->name('vendors');
Route::get('/faq', [SiteController::class, 'faq'])->name('faq');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::post('/contact', [SiteController::class, 'submitContact'])->name('contact.submit');
Route::get('/offers', [SiteController::class, 'offers'])->name('offers');
Route::get('/products', [SiteController::class, 'products'])->name('products');
Route::get('/terms', [SiteController::class, 'terms'])->name('terms');
Route::get('/privacy', [SiteController::class, 'privacy'])->name('privacy');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{offerId}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::post('/checkout/process', [CartController::class, 'processCheckout'])->name('cart.process');
    Route::post('/checkout/direct/{id}', [CartController::class, 'checkoutDirect'])->name('checkout.direct');
});
