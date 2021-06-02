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

Route::get('/', function () {
    return view('inicio');
});

Route::get('inicio', function () { return view('inicio'); });
Route::get('nosotros', function () { return view('nosotros'); });
Route::get('transparencia', function () { return view('transparencia'); });
Route::get('transparenciaini', function () { return view('transparenciaini'); });
Route::get('for', function () { return view('for'); });
Route::get('eventos', function () { return view('eventos'); });
Route::get('ciudadanos', function () { return view('ciudadanos'); });
Route::get('auto', function () { return view('auto'); });