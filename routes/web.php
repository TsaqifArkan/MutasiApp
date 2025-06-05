<?php

use App\Http\Controllers\JenisJabatanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [JenisJabatanController::class, 'index']);

Route::get('/', function () {

    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Tsaqif Muhammad Arkan', 'title' => 'About']);
});

Route::resource('jen-jab', JenisJabatanController::class);