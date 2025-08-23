<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


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

// La página principal muestra el dashboard
Route::get('/', function () {
    return view('dashboard');
});

// Ruta para la página de clientes
Route::get('/clientes', function () {
    return view('clientes');
});
