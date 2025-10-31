<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkTypeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\SkRecordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistMutController;
use App\Http\Controllers\RecapSkmutController;
use App\Livewire\Counter;

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

Route::get('/recap-skmut/upload', [RecapSkmutController::class, 'uploadForm'])->name('recap-skmut.uploadForm');
Route::post('/recap-skmut/upload', [RecapSkmutController::class, 'uploadStore'])->name('recap-skmut.uploadStore');

Route::resources([
    'recap-skmut' => RecapSkmutController::class,
    'sk-rec' => SkRecordController::class,
    'jen-sk' => SkTypeController::class,
    'gol' => GolonganController::class,
    'jen-jab' => JabatanController::class,
    'hist-mts' => HistMutController::class,
]);
