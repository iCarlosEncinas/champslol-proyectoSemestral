<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChampsController as ChampsController;

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

/*Route::get('/champs/create', 'champsController@create')->name('champs.create');
Route::post('/champs', 'champsController@store')->name('champs.store');*/
Route::get('/champs/create', [ChampsController::class, 'create'])->name('champs.create');
Route::get('/champs', [ChampsController::class, 'store'])->name('champs.store');

