<?php

use App\Http\Controllers\DiaristasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DiaristasController::class, 'index'])->name('diaristas.index');
Route::get('/diaristas/create', [DiaristasController::class, 'create'])->name('diaristas.create');
Route::post('/diaristas', [DiaristasController::class, 'store'])->name('diaristas.store');
Route::get('/diaristas/{id}/edit', [DiaristasController::class, 'edit'])->name('diaristas.edit');
Route::put('/diaristas/{id}', [DiaristasController::class, 'update'])->name('diaristas.update');
Route::get('/diaristas/{id}', [DiaristasController::class, 'destroy'])->name('diaristas.destroy');




