<?php

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

use App\Http\Controllers\AgendamentoController;

Route::get('/', [AgendamentoController::class, 'index']);
Route::get('/agendamento/create', [AgendamentoController::class, 'create'])->middleware('auth');
Route::get('/agendamento/{id}', [AgendamentoController::class, 'show'])->middleware('auth');
Route::post('/agendamento', [AgendamentoController::class, 'store']);
Route::get('/dashboard', [AgendamentoController::class, 'dashboard'])->middleware('auth');
Route::delete('/agendamento/{id}', [AgendamentoController::class, 'destroy'])->middleware('auth');
Route::get('/agendamento/edit/{id}', [AgendamentoController::class, 'edit'])->middleware('auth');
Route::put('/agendamento/update/{id}', [AgendamentoController::class, 'update'])->middleware('auth');