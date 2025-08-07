<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->middleware('admin');

    Route::get('/employe', function () {
        return view('employe.dashboard');
    });
});

require __DIR__.'/auth.php';
