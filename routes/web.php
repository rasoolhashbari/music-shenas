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
    return view('index');
});

Route::get('questions/create', function () {
    return view('questions.Design_questions');
});
Route::get('questions/create2', function () {
    return view('questions.Design_questions2');
});

Route::get('questions', function () {
    return view('questions.index');
});
