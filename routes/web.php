<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\datamanip;
use App\Http\controllers\SQLController;

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