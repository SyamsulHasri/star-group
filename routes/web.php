<?php

use App\Http\Controllers\ConsentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

Route::post('/consent/accept/{consent}', [ConsentController::class, 'accept'])->name('consent.accept');
Route::post('/consent/decline', [ConsentController::class, 'decline'])->name('consent.decline');

// Display 404 error page
Route::get('/error/404', function () {
    return view('errors.404');
});

// Fallback route for 404 errors
Route::fallback(function () {
    return redirect('/error/404'); // Redirects to the 404 error page
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // User Management Routes
    Route::resource('users', App\Http\Controllers\UserManagementController::class);

    Route::resource('consents', App\Http\Controllers\ConsentManagementController::class);
    // Activate Consent Version
    Route::put('/activate/{consent}', [App\Http\Controllers\ConsentManagementController::class, 'activate'])->name('activate.consent');
});
