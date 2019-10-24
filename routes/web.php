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

Route::get('/', function () {
    return view('base.index');
});

Route::get('login/', function(){
    return view('base.login');  
});

Route::get('home/', function(){
    return view('base.home');  
});

Route::get('forgotten/', function(){
    return view('base.forgotten');  
});


Route::get('ruta1', function(){
    return redirect('/');
});

Route::get('rutaLogin/', 'PracticaController@login');