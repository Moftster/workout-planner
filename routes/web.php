<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function() {
    if (Auth::check()) {
       return view('routine');
    }
    else {
      return view('homepage');
    }
  });

Route::get('routine', 'HomeController@index')->middleware('auth');

Route::resource('exercise', 'ExerciseController')->middleware('auth');

Route::get('/exercises/edit/{id}', 'ExerciseController@edit')->name('exercises.edit');

Route::delete('/exercises/delete/{id}', 'ExerciseController@destroy')->name('exercises.destroy');

Auth::routes();

