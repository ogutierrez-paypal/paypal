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


Route::get('/antarpply', function () {
    return view('spb-antarpply');
});


Route::get('/client-side', function () {
    return view('spb-clientside');
});

Route::get('/server-side', function () {
    return view('spb-serverside');
});

Route::get('/oxxo-sdk', function () {
    return view('oxxo-sdk');
});
