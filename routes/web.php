<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

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

// Route::get('about', function(){
//     return 'Hello World!';
// });
Route::get('about', 'App\Http\Controllers\AboutController@index');
Route::get('profile', 'App\Http\Controllers\ProfileController@index');
Route::get('calculator', 'App\Http\Controllers\CalculatorController@index');
Route::post('calculator/cal', 'App\Http\Controllers\CalculatorController@sell');
Route::get('upload', 'App\Http\Controllers\UploadController@index');
Route::post('upload/save', 'App\Http\Controllers\UploadController@save');
Route::get('crew', 'App\Http\Controllers\CrewController@index');