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
    return view('products.index');
})->middleware('auth');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

Route::get('/', 'ProductInfoController@index');
Route::get('product/{productInfo}', 'ProductInfoController@show');
Route::post('product/{productInfo}', 'CommentController@store');
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);
});

