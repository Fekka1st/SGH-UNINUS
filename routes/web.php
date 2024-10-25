<?php

use App\Http\Controllers\aerophonicontroller;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\greenhousecontroller;
use App\Http\Controllers\hydroponikcontroller;
use App\Http\Controllers\manajemenuser;
use App\Http\Controllers\profile;
// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Homepage route
Route::get('/', function () {
    return view('homepage.beranda');
});
Route::get('/tentangkami', function () {
    return view('homepage.tentangkami');
});
Route::get('/timkinerja', function () {
    return view('homepage.timkinerja');
});
Route::get('/Monitoring_greenhouse', function () {
    return view('homepage.smartgreenhouse');
});
Route::get('/Monitoring_hydroponik', function () {
    return view('homepage.smarthydroponik');
});
Route::get('/Monitoring_aeroponik', function () {
    return view('homepage.smartaeroponik');
});




Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [dashboardcontroller::class, 'index'])->name('dashboard');
    Route::get('/smartgreenhouse', [greenhousecontroller::class, 'index']);
    Route::get('/smarthydroponik', [hydroponikcontroller::class, 'index']);
    Route::get('/smartaerophonik', [aerophonicontroller::class, 'index']);
    Route::get('/profile_akun', [profile::class, 'index']);

    //manajement user
    Route::resource('/manajemen_user', manajemenuser::class);

    //hydroponik
    //aerophonik
    //greenhouse
    //report
});

require __DIR__.'/auth.php';
