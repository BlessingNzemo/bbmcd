<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;






Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return view('pages.home');
});

// Routes Publiques
// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/about', 'PageController@about')->name('about');
// Route::get('/contact', 'PageController@contact')->name('contact');
// Route::post('/contact', 'PageController@store')->name('contact.store');
// Route::get('/cards', 'NfcCardController@index')->name('cards.index');
// Route::get('/cards/{card}', 'NfcCardController@show')->name('cards.show');

// Routes d'Authentification
// Auth::routes();

// // Routes Protégées (utilisateurs connectés)
// Route::middleware(['auth'])->group(function () {
//     // Profile Routes
//     Route::get('/profile', 'ProfileController@show')->name('profile.show');
//     Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
//     Route::put('/profile', 'ProfileController@update')->name('profile.update');

//     // Gallery Routes
//     Route::resource('gallery', 'GalleryImageController');

//     // Social Links Routes
//     Route::resource('social-links', 'SocialLinkController');

//     // NFC Card Management
//     Route::get('/my-card', 'NfcCardController@myCard')->name('cards.mycard');
//     Route::put('/my-card', 'NfcCardController@updateCard')->name('cards.update');
// });

// // Routes Admin
// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//     Route::get('/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
//     Route::resource('users', 'Admin\UserController');
//     Route::put('/users/{user}/toggle', 'Admin\UserController@toggleStatus')->name('admin.users.toggle');
//     Route::resource('cards', 'Admin\NfcCardController');
// });
