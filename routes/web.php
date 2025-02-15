<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home/{param1}/{param2}', [HomeController::class, 'show']);

Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'home');
    Route::get('/test', 'test');
    Route::get('/home/{param1}/{param2}', 'show');    
});
