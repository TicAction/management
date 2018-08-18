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
Route::get('eleve/creation','StudentController@create')->name('student_create');
Route::post('eleve','StudentController@store')->name('student_store');
Route::get('eleve/{student}','StudentController@show')->name('student_show');
Route::get('eleve/{student}/modifier','StudentController@edit')->name('student_edit');
Route::put('eleve/{student}','StudentController@update')->name('student_update');
Route::delete('eleve/{student}','StudentController@destroy')->name('student_delete');

//schools section
Route::get('ecole','SchoolController@index')->name('school_index');
Route::get('ecole/creation','SchoolController@create')->name('school_create');
Route::post('ecole','SchoolController@store')->name('school_store');
Route::get('ecole/{school}','SchoolController@show')->name('school_show');
Route::get('ecole/{school}/modifier','SchoolController@edit')->name('school_edit');
Route::put('ecole/{school}','SchoolController@update')->name('school_update');
Route::delete('ecole/{school}','SchoolController@destroy')->name('school_delete');

// group association

Route::get('groupe/creation', 'GroupController@create')->name('group_create');

//direction route
Route::get('direction','DirectionController@index')->name('direction_index');
Route::get('direction/enseignant','DirectionController@enseignant')->name('direction_enseignant');
Route::get('direction/eleve','DirectionController@eleve')->name('direction_eleve');
Route::get('direction/ajouter/groupe','DirectionController@Group')->name('direction_group');

// TeacherController
Route::get('enseignant','TeacherController@index')->name('teacher_index');

//Auth
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


//services section
Route::get('service','ServiceController@index')->name('service_index');
Route::get('service/creation/{id}','ServiceController@create')->name('service_create');
Route::post('service','ServiceController@store')->name('service_store');
Route::get('service/{service}','ServiceController@show')->name('service_show');
Route::get('service/{service}/modifier','ServiceController@edit')->name('service_edit');
Route::put('service/{service}','ServiceController@update')->name('service_update');
Route::delete('service/{service}','ServiceController@destroy')->name('service_delete');

//academy section
Route::get('academie','AcademyController@index')->name('academy_index');
Route::get('academie/creation','AcademyController@create')->name('academy_create');
Route::post('academie','AcademyController@store')->name('academy_store');
Route::get('academie/{academy}','AcademyController@show')->name('academy_show');
Route::get('academie/{academy}/modifier','AcademyController@edit')->name('academy_edit');
Route::put('academie/{academy}','AcademyController@update')->name('academy_update');
Route::delete('academie/{academy}','AcademyController@destroy')->name('academy_delete');


//particulars section
Route::get('particulier','ParticularController@index')->name('particular_index');
Route::get('particulier/creation','ParticularController@create')->name('particular_create');
Route::post('particulier','ParticularController@store')->name('particular_store');
Route::get('particulier/{particular}','ParticularController@show')->name('particular_show');
Route::get('particulier/{particular}/modifier','ParticularController@edit')->name('particular_edit');
Route::put('particulier/{particular}','ParticularController@update')->name('particular_update');
Route::delete('particulier/{particular}','ParticularController@destroy')->name('particular_delete');

