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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','CollegeController@index');
Route::get('/sign_up','CollegeController@sign_up');
Route::post('/sign_up','CollegeController@post_sign_up');
Route::get('/login','CollegeController@login');
Route::post('/login','CollegeController@post_login');
Route::get('/enter_student_details','CollegeController@enter_student_details');
Route::post('/enter_student_details','CollegeController@post_student_details');
Route::get('/admin','CollegeController@admin');
Route::get('/manager','CollegeController@manager');
Route::get('/edit_student/{id}','CollegeController@edit_student');
Route::post('/edit_student/{id}','CollegeController@post_edit_student');
Route::get('/delete_student/{id}','CollegeController@delete_student');
Route::get('/status','CollegeController@status');
Route::get('/search','CollegeController@search');
