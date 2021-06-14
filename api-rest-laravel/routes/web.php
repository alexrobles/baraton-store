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
//Test roustes 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pruebas/{nombre?}', function ($nombre = null) {
    $texto = '<h2>Texto de una ruta</h2>';
    $texto .= 'Nombre Test : '.$nombre;
    return $texto;
});

Route::get('/getcategories','CategoriesController@getCategories');
Route::get('/categories','CategoriesController@index');
Route::get('/users/test','UserController@test');
Route::get('/product/test','ProductController@test');

////Api Routes uSER
Route::post('/api/login','UserController@login');
