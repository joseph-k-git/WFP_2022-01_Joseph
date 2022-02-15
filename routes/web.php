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
    return view('welcome');
});

Route::get('/greeting/{name?}', function($name="Joseph") {
    return view('welcome', ['name' => $name]);
});

Route::get('/user/{name}', function($name) {
    return 'username '.$name;
});

Route::get('/perkalian/{multiplier?}/{multiplicand?}/{a?}', function($multiplier = 0, $multiplicand = 0) {
    return view('perkalian', ['multiplier' => $multiplier, 'multiplicand' => $multiplicand]);
});
