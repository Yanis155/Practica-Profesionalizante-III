<?php

use App\Http\Controllers\MachineController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\MaintenanceController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/machines', [MachineController::class, 'index'])->name('machines.index');
Route::get('/machines/create', [MachineController::class, 'create'])->name('machines.create');
Route::post('/machines', [MachineController::class, 'store'])->name('machines.store');
Route::get('/machines/{id}/edit', [MachineController::class, 'edit'])->name('machines.edit');
Route::put('/machines/{id}', [MachineController::class, 'update'])->name('machines.update');
Route::delete('/machines', [MachineController::class, 'destroy'])->name('machines.destroy');


Route::get('/works', [WorkController::class, 'index'])->name('works.index');
Route::get('/works/create', [WorkController::class, 'create'])->name('works.create');
Route::post('/works', [WorkController::class, 'store'])->name('works.store');
Route::get('/works/{id}/edit', [WorkController::class, 'edit'])->name('works.edit');
Route::put('/works/{id}', [WorkController::class, 'update'])->name('works.update');
Route::delete('/works/{id}', [WorkController::class, 'destroy'])->name('works.destroy');

Route::get('/maintenances', [MaintenanceController::class, 'index'])->name('maintenances.index');
Route::get('/maintenances/create', [MaintenanceController::class, 'create'])->name('maintenances.create');
Route::post('/maintenances', [MaintenanceController::class, 'store'])->name('maintenances.store');
Route::get('/maintenances/{id}/edit', [MaintenanceController::class, 'edit'])->name('maintenances.edit');
Route::put('/maintenances/{id}', [MaintenanceController::class, 'update'])->name('maintenances.update');
Route::delete('/maintenances/{id}', [MaintenanceController::class, 'destroy'])->name('maintenances.destroy');