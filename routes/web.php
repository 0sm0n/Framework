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

Route::get('/my-name', function () {
    return 'Shekerbek uulu Osmon';
});

Route::get('/my-friend', function () {
    return 'You my friend';
});

Route::get('you', function (){
    return 'You';
});

Route::get('/my-city/{city}', function ($city) {
    return $city;
})->where('city', '[A-Za-z]+');

Route::get('/level/{lvl}', function ($lvl) {
    if ($lvl >= 0 and $lvl<=25)
    {
        return 'Новичок';
    }
    if ($lvl >= 26 and $lvl <= 50)
    {
        return 'Специалист';
    }
    if ($lvl >= 51 and $lvl <= 75)
    {
        return 'Босс';
    }
    if ($lvl >= 76 and $lvl <= 98)
    {
        return 'Старик';
    }
    if ($lvl=99)
    {
        return 'Король';
    }
});

Route::get('/name/{name}', function ($name) {
    return 'My name is ' . $name;
});

