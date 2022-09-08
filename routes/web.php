<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimeConversionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes | RaEd
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/profiles', ProfileController::class);
Route::resource('/home', TimeConversionController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');

