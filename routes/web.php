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
       return view('homepage-logged-in');
    }
    else {
      return view('homepage-logged-out');
    }
  });

Route::resource('routines', 'RoutineController')->middleware('auth');

Route::resource('exercise', 'ExerciseController')->middleware('auth');
Route::get('/exercises/edit/{id}', 'ExerciseController@edit')->name('exercises.edit');
Route::delete('/exercises/delete/{id}', 'ExerciseController@destroy')->name('exercises.destroy');

Route::get('/routines/addoneexercise', 'RoutineController@addAdditionalExercise')->name('routines.addoneexercise');
Route::delete('/routines/delete/{id}', 'RoutineController@destroy')->name('routines.destroy');
// Route::resource('routines.addoneexercise', 'RoutineController@addAdditionalExercise');



Auth::routes();

