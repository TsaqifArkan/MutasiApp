<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisJabatanController;
use App\Http\Controllers\SKDetailJabatanController;
use App\Http\Controllers\SKRecordController;
use Illuminate\Support\Facades\Route;

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
    'jen-jabs' => JenisJabatanController::class,
    'all-sk' => SKRecordController::class,
    'sk-jab' => SKDetailJabatanController::class
]);