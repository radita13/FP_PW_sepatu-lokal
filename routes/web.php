<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BuyMenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Routes for guests
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [PageController::class, 'index']);
    Route::get('/man_sneakers', [PageController::class, 'man_sneakers']);
    Route::get('/man_sports', [PageController::class, 'man_sports']);
    Route::get('/man_running', [PageController::class, 'man_running']);
    Route::get('/women_sneakers', [PageController::class, 'women_sneakers']);
    Route::get('/women_sports', [PageController::class, 'women_sports']);
    Route::get('/women_running', [PageController::class, 'women_running']);
    Route::get('/localbrand_johnson', [PageController::class, 'localbrandJohnson']);
    Route::get('/localbrand_athletica', [PageController::class, 'localbrandAthletica']);
    Route::get('/localbrand_aerostreet', [PageController::class, 'localbrandAerostreet']);
    Route::get('/localbrand_compass', [PageController::class, 'localbrandCompass']);
    Route::get('/buymenu_johnson', [PageController::class, 'buymenu_johnson']);
    Route::get('/buymenu_athletica', [PageController::class, 'buymenu_athletica']);
    Route::get('/buymenu_aerostreet', [PageController::class, 'buymenu_aerostreet']);
    Route::get('/buymenu_compass', [PageController::class, 'buymenu_compass']);

    Route::get('/login_admin', [AdminController::class, 'index'])->name('admin.login');
    Route::get('/signup', [RegisterController::class, 'index'])->name('signup');
    Route::get('/login', [LoginController::class, 'index'])->name('login');

    Route::get('/search', [PageController::class, 'search'])->name('search');
});

// Authentication routes
Route::post('/login_admin', [AdminController::class, 'login_admin'])->name('login.admin');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/signup', [RegisterController::class, 'store'])->name('signup.store');

// Logout routes
Route::post('/logout_user', [LoginController::class, 'logout'])->name('logout.user');
Route::post('/logout_admin', [AdminController::class, 'logout'])->name('logout.admin');

Route::post('/profile/upload', [UserController::class, 'upload'])->name('profile.upload');
Route::post('/profile/document', [UserController::class, 'updateProfile'])->name('profile.update');

// Authenticated user routes
Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile/user', [UserController::class, 'showProfileForm'])->name('profile');
    Route::get('/home_page', [DashboardController::class, 'index']);
    Route::get('/man_sneakers_page', [DashboardController::class, 'man_sneakers_login']);
    Route::get('/man_sports_page', [DashboardController::class, 'man_sports_login']);
    Route::get('/man_running_page', [DashboardController::class, 'man_running_login']);
    Route::get('/women_sneakers_page', [DashboardController::class, 'women_sneakers_login']);
    Route::get('/women_sports_page', [DashboardController::class, 'women_sports_login']);
    Route::get('/women_running_page', [DashboardController::class, 'women_running_login']);
    Route::get('/localbrand_johnson_page', [DashboardController::class, 'localbrand_johnson_login']);
    Route::get('/localbrand_athletica_page', [DashboardController::class, 'localbrand_athletica_login']);
    Route::get('/localbrand_aerostreet_page', [DashboardController::class, 'localbrand_aerostreet_login']);
    Route::get('/localbrand_compass_page', [DashboardController::class, 'localbrand_compass_login']);
    Route::get('/search_login', [DashboardController::class, 'search_login'])->name('search_login');
});

// Admin routes
Route::middleware('Isadmin')->group(function () {
    Route::get('/dashboard/admin', [AdminController::class, 'dashboard_admin']);
    Route::resource('/dashboard/product', ProductController::class);
    Route::get('/dashboard/product/{product:slug}', [ProductController::class, 'show'])->name('product.show');
    Route::put('/dashboard/product/{slug}', [ProductController::class, 'update'])->name('product.update');
});


//Route::get('/buymenu/{brand}/{productId}', 'PageController@show')->name('buymenu.show');
//Route::get('/buymenu/{brand}/{productId}', [BuyMenuController::class, 'show'])->name('buymenu.show');
// Route::get('/buymenu/johnson/{productId}', [BuyMenuController::class, 'buymenu_johnson'])->name('buymenu.johnson');
Route::get('/buymenu/{slug}', [BuyMenuController::class, 'show'])->name('product.show');
