<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\InstagramController;

Route::get('/discover-influencers/{userId}', [InstagramController::class, 'index'])->name('business');



Route::get('/test' ,function(){
    return view('testlivewire');
});
Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/business/dashboard', [PagesController::class, 'dashboard'])->name('business.dashboard');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/features/find-influecer', [PagesController::class, 'findinfluencer'])->name('feature.findinfluencer');
Route::get('/features/influecer-analyser', [PagesController::class, 'analyzeinfluencer'])->name('feature.analyzeinfluencer');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
