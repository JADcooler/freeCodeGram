<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\datamanip;
use App\Http\controllers\SQLController;
use App\Http\controllers\TestingController;
use App\Http\controllers\TestreqController;
use App\Http\controllers\RemoveController;
use App\Http\controllers\RemovebuttonController;





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

//Route::get('/register', 'RegistrationController@index');
Route::get('testing',[SQLController::class,'index']);
Route::get('test2',[TestingController::class,'putdata']);
Route::get('elimination',[RemoveController::class,'index']);
//Route::get('test2req',[TestingController::class,'putdata']);
Route::post('test2',[TestreqController::class,'data']);
Route::post('elimination',[RemovebuttonController::class,'data']);

Route::get('/', function () {
    return view('welcome');
});
Route::post('index',[datamanip::class,'index']);

Auth::routes();

Route::get('/registers', [App\Http\Controllers\RegistrationController::class, 'index'])->name('registers');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/