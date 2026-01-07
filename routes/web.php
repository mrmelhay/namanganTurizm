<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\TourController as FrontTourController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\HeroSlideController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\AuthController;

// Language Switcher
Route::get('locale/{lang}', [PageController::class, 'changeLocale'])->name('locale');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/tours', [FrontTourController::class, 'index'])->name('tours.index');
Route::get('/tours/{id}', [FrontTourController::class, 'show'])->name('tours.show');
Route::get('/hotels', [PageController::class, 'hotels'])->name('hotels.index');
Route::get('/hotels/{id}', [PageController::class, 'hotelShow'])->name('hotels.show');
Route::get('/transport', [PageController::class, 'transport'])->name('transport.index');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery.index');
Route::get('/blog', [PageController::class, 'blog'])->name('blog.index');
Route::get('/blog/{id}', [PageController::class, 'blogShow'])->name('blog.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Admin Auth
Route::get('admin/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('admin/login', [AuthController::class, 'login']);
Route::post('admin/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Panel
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('tours', TourController::class);
    Route::resource('hotels', HotelController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('posts', PostController::class);
    Route::resource('settings', SettingsController::class);
    Route::resource('hero-slides', HeroSlideController::class);
    Route::resource('features', FeatureController::class);

    // About Page
    Route::get('about-page', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('about.index');
    Route::put('about-page', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('about.update');

    Route::post('upload-image', [App\Http\Controllers\Admin\UploadController::class, 'upload'])->name('info.upload');
});
