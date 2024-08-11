<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\BusinessOwnerController;
use App\Http\Controllers\InfluencerPagesController;
use App\Http\Controllers\ProfileController;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/features/find-influecer', [PagesController::class, 'findinfluencer'])->name('feature.findinfluencer');
Route::get('/features/influecer-analyser', [PagesController::class, 'analyzeinfluencer'])->name('feature.analyzeinfluencer');



// Route for role selection page
Route::get('/select-role', function () {
    return view('auth.select-role');
})->name('select-role');

Route::get('/dashboard', function () {
    return view('business.dashboard');
})->name('dashboard');

// Route for registration will use Jetstream's built-in controller
Route::get('/register', function () {
    return view('auth.register', ['role' => request('role')]);
})->name('register');



Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::middleware(['role:business-owner'])->group(function(){
        Route::get('/business-owner/dashboard', [BusinessOwnerController::class, 'index'])->name('business-owner.dashboard');
        Route::get('/business-owner/influencer-profile/{id}', [BusinessOwnerController::class, 'influencerprofile'])->name('influencerprofile.view');

    });

    Route::middleware(['role:influencer'])->group(function(){
        Route::get('/influencer/dashboard', [InfluencerController::class, 'index'])->name('influencer.dashboard');
        Route::get('/influencer/contact', [InfluencerController::class, 'contact'])->name('influencer.contact');
        Route::resource('profiles', ProfileController::class);
        Route::get('/influencer/profile', [ProfileController::class, 'showMyProfile'])
    ->name('influencer.profile');

    });
});


