<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Homepage route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route with authentication middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile management routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes for additional pages
Route::get('/laman/about', 'AboutController@index');
Route::get('/arsip/pak', 'ArsipController@pak');
Route::get('/arsip/serdik', 'ArsipController@serdik');
Route::get('/arsip/inpassing', 'ArsipController@inpassing');
Route::get('/arsip/jafung', 'ArsipController@jafung');
Route::get('/laman/tim', 'TimController@index');
Route::get('/laman/wilayah-kerja', 'WilayahKerjaController@index');
Route::get('/kontak', 'KontakController@index');

// Authentication routes
require __DIR__.'/auth.php';
