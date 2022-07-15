<?php

use Illuminate\Support\Facades\Route;

//効果測定2
Route::get('kouka2_1', 'Kouka2_1Controller@index');
Route::post('kouka2_1/find', 'Kouka2_1Controller@find');
