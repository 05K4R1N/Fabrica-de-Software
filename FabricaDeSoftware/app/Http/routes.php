<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('admin','AdmiController');
Route::get("tiposPersonal","AdmiController@mostrarTiposUsuario");
Route::get("formularioUsuario","AdmiController@verFormulario");
Route::get("formularioInvestigacion","AdmiController@verFormularioInvestigacion");
Route::get("listaInvestigacion","AdmiController@listarInvestigaciones");
Route::get("listaInvestigacion/{investigacion}","AdmiController@mostrarAreas");
Route::get("listaInvestigacion/investigacion/{area}","AdmiController@mostrarArticulos");
Route::get("listaInvestigacion/investigacion/articulo/formulario{area}","AdmiController@verFormularioArticulo");
Route::get("tiposPersonal/{personal}","AdmiController@listar");
Route::get("galerias","AdmiController@verGalerias");
Route::get('galerias/{form}',"AdmiController@verFormularioGaleria");
Route::get('video/formulario',"AdmiController@verFormularioVideo");
Route::get("foto/formulario","AdmiController@verFormularioFoto");

Route::resource("galeria","GaleriaController");
Route::resource("video","VideoController");
Route::resource("foto","FotoController");
Route::resource("usuario","UsuarioController");
Route::resource("investigacion","investigacionController");
Route::resource("articulo","ArticuloController");
Route::get('eliminarArticulo/{id}', ['as'=>'eliminarArticulo', 'uses'=>'ArticuloController@eliminar']);

Route::get("/","FrontControl@index");
Route::get("investigaciones/articulos/{area}","FrontControl@mostrarArticulos");
Route::get("/{seccion}","FrontControl@abrirSeccion");
Route::get("/{seccion}/{personal}","FrontControl@verPersonal");
Route::get('eliminar/{id}', ['as'=>'eliminar', 'uses'=>'UsuarioController@eliminar']);