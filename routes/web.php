<?php
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EmployeController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [WelcomeController::class, 'accueil']);

Route::resource('animaux', AnimalController::class);
Route::resource('employes', EmployeController::class);
