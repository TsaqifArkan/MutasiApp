<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JenisSkController;
use App\Http\Controllers\SkDetailController;
use App\Http\Controllers\SkRecordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisJabatanController;

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
    'jen-jab' => JenisJabatanController::class,
    'jen-sk' => JenisSkController::class,
    'sk-rec' => SkRecordController::class,
    'sk-det' => SkDetailController::class
]);
