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
    return view('welcome');
});

Route::get('notas', function(){
$notas =[
        /*'primera nota',
        'segunda nota',
        'tercera nota',
        'cuarrta nota',
        'quinta nota',*/
    ];

    return view('notas', ['notas' => $notas]);
});

route::get('agregar', function(){
    return view('agregar');
});
