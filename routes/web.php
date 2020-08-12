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
    return view('dashboard.frontend.index');

});

Route::match(['post','get'], '/Home', function () {
    return view('dashboard.frontend.Home');
})->name('Home');

Route::get('/workspace', function () {
    return view('dashboard.frontend.workspace');
})->name('Workspace');


//-------------About account like Login or Register-------------
Route::get('/Login', function () {
    return view('dashboard.frontend.login');
});

Route::post('/Login', 'UserController@check_account');

Route::get('/Register', function () {
    return view('dashboard.frontend.Register');
});

Route::post('/Register', 'UserController@register');


Route::get('/WrongUser', function () {
    return view('dashboard.frontend.wronguser');
})->name('WrongUser');
//-------------About account like Login or Register-------------




//-------------Function or Ajax-------------
Route::post('/PostGetPrice', 'StockController@getPrice');

