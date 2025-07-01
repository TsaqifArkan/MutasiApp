<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkTypeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\SkRecordController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [JenisJabatanController::class, 'index']);

// Route::get('/', function () {

//     return view('home', ['title' => 'Home Page']);
// });

Route::get('/', [DashboardController::class, 'index']);
// ->name('dashboard');

Route::get('/about', function () {
    return view('about', ['name' => 'Tsaqif Muhammad Arkan', 'title' => 'About']);
});

Route::resources([
    'sk-rec' => SkRecordController::class,
    'jen-sk' => SkTypeController::class,
    'gol' => GolonganController::class,
    'jen-jab' => JabatanController::class,
]);
