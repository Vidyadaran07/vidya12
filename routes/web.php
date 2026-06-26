<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'home']);
Route::get('/home', [HomeController::class,'home']);

Route::middleware('guest')->group(function () {
    // Registeration
    Route::get('/signup',[AuthController::class,'registerform']);
    Route::post('/register',[AuthController::class,'register']);

    // Login
    // Route::get('/login',[AuthController::class,'loginform']);
    Route::get('/login',[AuthController::class,'login']);
    
    // Dashboard
});
