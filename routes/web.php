<?php

use App\Http\Controllers\AbogadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard_Controller;
use App\Http\Controllers\table_juicios_controller;
use App\Http\Controllers\Juicios2Controller;
use App\Http\Controllers\SalasController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Auth;
use App\Models\Juicios2;

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
// Auth::routes();

Route::get('/',[table_juicios_controller::class, 'index']);

Route::get('/registro_Juicio',[table_juicios_controller::class,'registro']); //Ruta cracion de nuevo juicio
Route::resource('abogado', AbogadoController::class); 

Route::resource('juicios', Juicios2Controller::class);
Route::post('juicios/data', [Juicios2Controller::class,'juicios_datos'])->name('jucios.data');

Route::put('juicios_update/{id}/{name}',[Juicios2Controller::class,'update_all_form']);
Route::get('juicio_dowload/{name}',[Juicios2Controller::class,'dowload_juicio']);
Route::get('juicio_delete_archivo/{narchivo}/{id}/{name}',[Juicios2Controller::class,'delete']);

Route::get('data/juicios',[Juicios2Controller::class,'juiciosdatosajax']);

Route::post('juicios_com/{id}',[Juicios2Controller::class,'comentario']);
Route::post('juicios_coco/{id}',[Juicios2Controller::class,'guardarcocodi']);

Route::post('juicios_upload/{id}',[Juicios2Controller::class,'upload']);

Route::get('desgloce_juicio/{id}',[Juicios2Controller::class,'desglocejuicio'])->name('desgloce.juicio');
Route::get('edit_juicio/{id}',[Juicios2Controller::class,'edit']);

Route::resource('sala', SalasController::class);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login',[LogController::class,'login']);
Route::post('/logout',[LogController::class,'logout']);

Route::get('/tabla_etapa_juicio/{etapa}',[table_juicios_controller::class, 'tablas_etapa']);
