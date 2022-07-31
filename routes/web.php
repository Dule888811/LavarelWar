<?php

use App\Http\Controllers\SchedulerController;
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
Route::get('/WelcomeNato','NatoController@GetNatoSoldiers')->name('nato-soldiers');
Route::get('/WelcomeSerbian','SerbianController@GetSerbianSoldiers')->name('sr-soldiers');
Route::get('/Nato','NatoController@makePlains')->name('nato-plains');
Route::get('/Plain','SerbianController@addPlains')->name('sr-plains');

