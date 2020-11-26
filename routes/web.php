<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\PqrController;
use App\Http\Controllers\EstudianteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
*/
//*****Ruta HOME */
Route::get('/', [HomeController::class, 'index']);

/*****Ruta CATALOGO */
Route::get('catalogo/perros',[CatalogoController::class,'perros'])->name('perros');
Route::get('catalogo/gatos',[CatalogoController::class,'gatos'])->name('gatos');

Route::get('catalogo/detalle/{id}/{nombre}/{precio}/{foto}',
[CatalogoController::class,'detalle']);

//*****Ruta PQR */
Route::get('pqr', [PqrController::class, 'pqr']);
//*****Ruta ESTUDIANTE */
Route::get('estudiante',  [EstudianteController::class, 'estudiante']);