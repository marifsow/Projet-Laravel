<?php
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\EmployeController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [WelcomeController::class, 'accueil']);
Route::resource('employes', EmployeController::class);
Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
Route::get('/employes/create', [EmployeController::class, 'create'])->name('employes.create');
Route::post('/employes', [EmployeController::class, 'store'])->name('employes.store');
Route::get('/employes/{id}', [EmployeController::class, 'show'])->name('employes.show');
Route::get('/employes/{id}/edit', [EmployeController::class, 'edit'])->name('employes.edit');
Route::put('/employes/{id}', [EmployeController::class, 'update'])->name('employes.update');
Route::delete('/employes/{id}', [EmployeController::class, 'destroy'])->name('employes.destroy');

Route::resource('animaux', AnimalController::class);
Route::get('/animaux', [AnimalController::class, 'index'])->name('animaux.index');
Route::get('/animaux/create', [AnimalController::class, 'create'])->name('animaux.create');
Route::post('/animaux', [AnimalController::class, 'store'])->name('animaux.store');
Route::get('/animaux/{id}', [AnimalController::class, 'show'])->name('animaux.show');
Route::get('/animaux/{id}/edit', [AnimalController::class, 'edit'])->name('animaux.edit');
Route::put('/animaux/{id}', [AnimalController::class, 'update'])->name('animaux.update');
Route::delete('/animaux/{id}', [AnimalController::class, 'destroy'])->name('animaux.destroy');
