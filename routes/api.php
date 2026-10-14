<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\RecetaController;
use App\Http\Controllers\Api\EtiquetaController;



Route::get('categorias',[CategoriaController::class,'index']);
Route::get('categorias/{categoria}',[CategoriaController::class,'show']); 

Route::get('recetas',[RecetaController::class,'index']);
Route::get('recetas/{receta}',[RecetaController::class,'show']);

route::get('etiquetas',[EtiquetaController::class,'index']);
route::get('etiquetas/{etiqueta}',[EtiquetaController::class,'show']);

//Route::get('/user', function (Request $request) {
  //  return $request->user();
//})->middleware('auth:sanctum');

