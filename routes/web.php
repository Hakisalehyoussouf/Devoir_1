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

Route::get('haki1',[\App\Http\Controllers\HomeController1::class, 'Index1Home']);
Route::get('haki2',[\App\Http\Controllers\HomeController2::class, 'Index2Home']);
