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

Route::get('/', function () 
{
    return view('pages/home');
});
Route::get('/students', function () 
{
    return view('pages/students');
})->name('students');
Route::get('/students/new', function () 
{
    return view('students/new');
});
Route::get('/courses', 'courses@index')->name('courses');
Route::get('/courses/view/{id}', 'courses@viewCourse')->name('viewcourse');
Route::get('/courses/new', function ()
{
    return view('courses/new');
});
Route::get('camp', 'camps@index');
Route::get('/camp/new', function ()
{
    return view('camp/new');
});
Route::get('/invoices', function ()
{
    return view('pages/invoices');
});
Route::get('/invoices/new', function ()
{
    return view('invoices/new');
});

Route::get('/invoices/reports', function ()
{
    return view('invoices/reports');
});
Route::get('/students/reports', function ()
{
    return view('students/reports');
});
Route::POST('/students/new','students@new')->name('add_new_student');
Route::get('student/{id}', 'students@viewStudent')->name('showStudent');
Route::POST('student/update/', 'students@update_student')->name('update_student');

//course
Route::POST('/courses/new','courses@new')->name('add_new_course');
//Route::get('student/{id}', 'students@viewStudent')->name('showStudent');
Route::get('courses/edit/{id}', 'courses@edit')->name('edit_course');
Route::POST('courses/update/', 'courses@update_course')->name('update_course');
Route::get('datatable', 'DataTableController@datatable');
// Get Data
Route::get('datatable/getStudents', 'DataTableController@getStudents')->name('getStudents');
Route::get('camp/new', 'camps@new')->name('campNew');
Route::get('camp/{id}', 'camps@view')->name('campView');
Route::POST('camp/new/add', 'camps@add_new')->name('add_new_camp');
