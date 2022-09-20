<?php

use App\Http\Controllers\IndexController;
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

 Route::resource('add',IndexController::class);

 Route::get('/valid',function(){
    return view('valid');
 })->name('validVoter');

 Route::get('/invalid',function(){
    return view('invalid');
 })->name('invalidVoter');

/*  Route::get('/',[IndexController::class,'index']); */

 /* Middleware */
 Route::get('/{age}',function($age){
    return view('index');
 })->middleware('age.valid:age');
