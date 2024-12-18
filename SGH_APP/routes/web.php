<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\manajemenuser;
use App\Http\Controllers\profile;
use App\Http\Controllers\reportcontroller;
use App\Livewire\Aeroponik;
use App\Livewire\Greenhouse;
use App\Livewire\Hydroponik;
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

// Route::get('/Monitoring_greenhouse', function () {
//     return view('homepage.smartgreenhouse');
// });
// Route::get('/Monitoring_hydroponik', function () {
//     return view('homepage.smarthydroponik');
// });
// Route::get('/Monitoring_aeroponik', function () {
//     return view('homepage.smartaeroponik');
// });




Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [dashboardcontroller::class, 'index'])->name('dashboard');
    Route::get('/smarthydroponik', Hydroponik::class);
    Route::get('/smartaerophonik', Aeroponik::class);
    Route::get('/smartgreenhouse', Greenhouse::class);

    Route::get('/report', [reportcontroller::class, 'index']);
    Route::post('/generate-report', [reportcontroller::class, 'generateReport'])->name('generateReport');

    Route::get('/profile_akun', [profile::class, 'index'])->name('profile.index');
    Route::post('/profile_akun/update',[profile::class,'update'])->name('profile.update');

    Route::resource('/manajemen_user', manajemenuser::class);

});

require __DIR__.'/auth.php';
