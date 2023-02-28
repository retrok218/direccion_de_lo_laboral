<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\table_juicios_controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[table_juicios_controller::class, 'index']);
Route::get('/juicios',[table_juicios_controller::class,'desgloce_juicios']);
Route::get('/agregar1',[table_juicios_controller::class,'agregarjuicio1']);
Route::get('/agregar2',[table_juicios_controller::class,'agregarjuicio2']);
Route::get('/datos_rel_laboral',[table_juicios_controller::class,'datos_rel_laboral']);
Route::get('/registro_Juicio',[table_juicios_controller::class,'registro']);


