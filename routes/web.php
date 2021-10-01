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
    $name = 'bruno';
    $age = 23;
    $profession = 'developer';

    $array = [1, 2, 3, 4, 5];

    $names = ['bruno', 'leandra', 'maria', 'josé'];

    return view('welcome', ['name' => $name, 'age' => $age, 'profession' => $profession, 'array' => $array, 'names' => $names]);
});

Route::get('/contact', function () {
    return view('welcome');
});
