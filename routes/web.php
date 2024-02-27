<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Belajar;
use App\Http\Controllers\Biodata;
use App\Http\Controllers\Main;

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
Route::get('biodata', function(){
    return view('biodata');
});
Route::get('home',function(){
    return view('home');
});
Route::get('main', function(){
    return view('main');
});
