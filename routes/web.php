<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//kids section
Route::get('eleve','StudentController@index')->name('student_index');
Route::get('eleve/create','StudentController@create')->name('student_create');
Route::post('eleve','StudentController@store')->name('student_store');
Route::get('eleve/{student}','StudentController@show')->name('student_show');
Route::get('eleve/{student}/edit','StudentController@edit')->name('student_edit');
Route::put('eleve/{student}','StudentController@update')->name('student_update');
Route::delete('eleve/{student}','StudentController@destroy')->name('student_delete');

//schools section
Route::get('ecole','SchoolController@index')->name('school_index');
Route::get('ecole/create','SchoolController@create')->name('school_create');
Route::post('ecole','SchoolController@store')->name('school_store');
Route::get('ecole/{school}','SchoolController@show')->name('school_show');
Route::get('ecole/{school}/edit','SchoolController@edit')->name('school_edit');
Route::put('ecole/{school}','SchoolController@update')->name('school_update');
Route::delete('ecole/{school}','SchoolController@destroy')->name('school_delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
