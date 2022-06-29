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
    return view('welcome');
});

//Route::get('hello',function () {
    //return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
//});


Route::get('hello', 'HelloController@index'); 

Route::post('hello', 'HelloController@post');




//jissyu3_3
Route::get('jissyu5','jissyu3_3Controller@index');

// use App\Http\Middleware\HelloMiddleware;を追記

Route::get('hello', 'HelloController@index')
   ->middleware(HelloMiddleware::class);

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');