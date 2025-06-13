<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\DashboardController;


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
    return view('pages.dashboard');
});


Route::get('/dashboard', [DashboardController::class, 'index']);


Route::get('/mahasiswa',[MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create',[MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class, 'store']);
Route::get('/mahasiswa/edit/{nim}',[MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/update',[MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/delete/{nim}',[MahasiswaController::class, 'destroy']);

