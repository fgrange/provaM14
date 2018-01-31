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

//Route::get('/', function () {
//    return view('welcome');
//});

// ruta inicial -> LOGIN

Route::get('/', function () {
    return view("CU01_login");//"login";//view('welcome');
});

Route::post('C01_login', 'C01_Login@login');//function () {
    //var_dump($_POST);
    //print_r($_POST);
    //return "intentant fer login";    
//});