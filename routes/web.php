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


Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

//データの更新
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

//データの削除
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');



Route::get('person', 'PersonController@index');

//PErson
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

//edit
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');


Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

//効果測定2
Route::get('kouka2_1', 'Kouka2_1Controller@index');
Route::post('kouka2_1/find', 'Kouka2_1Controller@find');


//効果測定2_2
Route::get('kouka2_2', 'Kouka2_2Controller@index');
Route::post('kouka2_2/find', 'Kouka2_2Controller@find');
Route::get('kouka2_2/show', 'Kouka2_2Controller@show');
Route::get('kouka2_2/add', 'Kouka2_2Controller@add');
Route::post('kouka2_2/create', 'Kouka2_2Controller@create');
Route::get('kouka2_2/edit', 'Kouka2_2Controller@edit');
Route::post('kouka2_2/update', 'Kouka2_2Controller@update');
Route::get('kouka2_2/del', 'Kouka2_2Controller@del');
Route::post('kouka2_2/remove', 'Kouka2_2Controller@remove');
