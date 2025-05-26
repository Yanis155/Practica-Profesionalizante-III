<?php

use App\Http\Controllers\MachineController;
use App\Http\Controllers\WorkController;
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


Route::resource('machines', MachineController::class)->only(['index','store','update','create','destroy']);
Route::get('Machines/create', function(){
    return view('Machines.store');
});
Route::post('Machines/edit', function(){
    return view('Machines.edit');
});

Route::resource('works', WorkController::class)->only(['index','create','destroy']);
route::post('Works/edit', function(){
    return view('Works.edit');
});

