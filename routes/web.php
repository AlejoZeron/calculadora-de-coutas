<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrestamoController;

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

Route::get('/clases', function () {
    return view('clases');
});

/*Route::get('/prestamo', function () {
    return view('prestamo');
});
*/

Route::get('/clases/{nombre}/{seccion?}', [HomeController::class, 'show']);

Route::get('/prestamo/{montoPrestamo}/{tasaInteresMensual}/{plazoMeses}', [PrestamoController::class, 'calcularCuotaMensual']);