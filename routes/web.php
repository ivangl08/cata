<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\contactoController;   

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/tratamiento', function () {
    return view('tratamiento');
})->name('tratamiento');

Route::get('/intervencion', function () {
    return view('intervencion');
})->name('intervencion');

Route::get('/instalaciones', function () {
    return view('instalaciones');
})->name('instalaciones');

Route::get('/actividades', function () {
    return view('actividades');
})->name('actividades');

Route::get('/contacto', [contactoController::class, 'index'])->name('contacto');

Route::post('/contacto', [contactoController::class, 'store'])->name('contacto.store');

Route::get('/privacidad', function () {
    return view('privacidad');
})->name('privacidad');
