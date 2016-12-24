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
    Route::get('/Portifolio',['as'=>'administração','uses'=>'Admin@index']);

    Route::get('/construindo',['as'=>'construindo','uses'=>'Admin@inserir']);

    Route::get('/admin',['as'=>'tabela','uses'=>'Admin@folha']);


    Route::get('/',['as'=>'administraão','uses'=>'Admin@Nova']);





?>

