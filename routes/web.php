<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PronosticController;
use App\Http\Controllers\Auth\LogInController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Formulaire d'inscription et de connexion

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::get('/login', [LogInController::class, 'showLogInForm'])->name('login');


//Route d'entrée sur le site
Route::get('/', [HomeController::class, 'home'])->name('home');

//Route vers les pronostics
Route::get('/pronos', [PronosticController::class, 'pronos'])->name('pronos');
Route::get('/pronos/{pronostic}', [PronosticController::class, 'show'])->name('pronostics.show');

