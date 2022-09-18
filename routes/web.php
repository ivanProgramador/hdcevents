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

    $nome = "ivan";

    $arr = [1,2,3,4,5,6];

    return view('welcome',[
        'nome' => $nome,
        'arr'  => $arr
    ]);

});


Route::get('/product/{id?}', function ($id = 0) {
    
    return view('product',['id' => $id] );
});


Route::get('/products', function () {
    return view('products');
});


Route::get('/contacts', function () {
    return view('contacts');
});
