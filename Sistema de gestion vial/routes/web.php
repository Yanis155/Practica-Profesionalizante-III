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

Route::resource('machines', MachineController::class)->only(['index', 'store','create','destroy']);
Route::get('machines/create', function(){
    return view('create');
});
Route::resource('works', WorkController::class)->only('index');
