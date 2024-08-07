<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\BusinessOwnerController;




Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/features/find-influecer', [PagesController::class, 'findinfluencer'])->name('feature.findinfluencer');
Route::get('/features/influecer-analyser', [PagesController::class, 'analyzeinfluencer'])->name('feature.analyzeinfluencer');
Route::get('/influencer/profile', [PagesController::class, 'influencerprofile'])->name('influencer.profile');



// Route for role selection page
Route::get('/select-role', function () {
    return view('auth.select-role');
})->name('select-role');

// Route for registration will use Jetstream's built-in controller
Route::get('/register', function () {
    return view('auth.register', ['role' => request('role')]);
})->name('register');



Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::middleware(['role:business-owner'])->group(function(){
        Route::get('/business-owner/dashboard', [BusinessOwnerController::class, 'index'])->name('business-owner.dashboard');

    });

    Route::middleware(['role:influencer'])->group(function(){
        Route::get('/influencer/dashboard', [InfluencerController::class, 'index'])->name('influencer.dashboard');
    });
});


