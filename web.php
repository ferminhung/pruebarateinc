<?php

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
Route::post('/resultadopago','PagosController@hacerpago');

Route::get('/', 'UserController@welcome');

Route::post('/registrocliente', 'UserController@registrocliente');

Route::post('/finalizarpago', 'PagosController@finpago');

Route::post('/producto','UserController@verproducto');

Route::get('/productossitio/{tipo}','UserController@sitioproductos');

Route::post('/modalselec','UserController@modalproducto');

Route::get('/welcome', 'UserController@welcome');
Route::get('/busqueda/{query}', 'UserController@busqueda');

Route::get('/admin', 'UserController@admin');

Route::get('/gestionproductos', 'UserController@gestionproductos');

Route::get('/gestionpedidos', 'UserController@gestionpedidos');

Route::get('/gestionpagos', 'UserController@gestionpagos');
Route::get('/fichaorden/{idorden}', 'UserController@verorden');

Route::get('/gestionclientes', 'UserController@gestionclientes');

Route::get('/gestiondelivery', 'UserController@gestiondelivery');
Route::post('/gestiondelivery', 'UserController@nuevaruta');
Route::get('/recibidores', 'UserController@recibidores');


Route::get('/gestionsitio', 'UserController@gestionsitio');

Route::post('/carrocompra', 'UserController@verpedido');

Route::post('/fichaproducto', 'UserController@administrarproducto');
Route::put('/fichaproducto', 'UserController@modificarproducto');
												
Route::post('/resultadopago/', ['uses'=>'PagosController@resultadowebpay','nocsrf'=>true]);
//Route::get('/resultadopago/{token_ws}', ['uses'=>'PagosController@getresultadowebpay','nocsrf'=>true]);

//Route::get('/webpay/{action}', 'UserController@webpay');
//Route::get('/webpay/{action}', 'PagosController@webpayer');
//Route::post('/webpay', 'PagosController@webpayer');

Route::get('/generate-pdf/{idorden}','UserController@generatePDF');


//--------------------------

Route::get('/admintest', 'TestController@admintest');
Route::get('/gestionencuestas', 'TestController@gestionencuestas');
Route::post('/fichapreguntas', 'TestController@fichapreguntas');






