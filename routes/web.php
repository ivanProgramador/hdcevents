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

/* importando o controller */

use App\Http\Controllers\EventController;

Route::get('/',[ EventController::class, 'index']);

Route::get('/events/create',[ EventController::class, 'create']);

Route::get('/contatos',[ EventController::class, 'contatos']);

Route::get('/produtos',[ EventController::class, 'produtos']);





Route::get('/product/{id?}', function ($id = 0) {
    
    return view('product',['id' => $id] );
});


Route::get('/products', function () {
    return view('products');
});


Route::get('/contacts', function () {
    return view('contacts');
});
