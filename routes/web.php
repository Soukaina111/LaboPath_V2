<?php

use App\Http\Controllers\PatientsController;
use Illuminate\Support\Facades\Route;

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
Route::post('/patients/store', [PatientsController::class, 'store'])->name('patients.store'); 

Route::get('/patients/day', [PatientsController::class, 'day']);

// show all patients

Route::get('/', [PatientsController::class, 'index']);

//Show create patient form
Route::get('/patients/create', [PatientsController::class, 'create']);
// Delete patient
Route::any('/patients/{id}/delete', [PatientsController::class, 'destroy'])->name('Patient.destroy');

// Show edit patient form
Route::get('/patients/{patient}/edit', [PatientsController::class, 'edit']);

// Update patient
Route::put('/patients/{patient}', [PatientsController::class, 'update'])->name('patients.update');


//Show single patient
Route::get('/patients/{patient}', [PatientsController::class, 'show']);


