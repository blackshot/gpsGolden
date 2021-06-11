<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmailController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/servicios/transporte', [HomeController::class, 'servicioTransporte'])->name('servicioTransporte');
Route::get('/servicios/maquinaria-construccion', [HomeController::class, 'servicioMaquinariaConstrusccion'])->name('servicioMquinariaConstruccion');
Route::get('/servicios/particulares', [HomeController::class, 'servicioParticulares'])->name('servicioParticular');

Route::get('/contact', [EmailController::class, 'sendEmailContact'])->name('contacto');
Auth::routes(); 

