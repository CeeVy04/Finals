<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactUs;
use App\Http\Controllers\AboutUs;

Route::get('/', function () {
    return view('auth/login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    // Move the dashboard route to the controller
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
});

    Route::controller(AboutUs::class)->prefix('aboutus')->group(function () {
    Route::get('AboutUs', [AboutUs::class, 'index'])->name('aboutus');
});

    Route::controller(ContactUs::class)->prefix('contactus')->group(function () {
    Route::get('contactus', [ContactUs::class, 'index'])->name('contactus');
});