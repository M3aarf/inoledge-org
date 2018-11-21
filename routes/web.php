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
});
Route::get('/students/new', function () 
{
    return view('students/new');
});
Route::get('/courses', function ()
{
    return view('pages/courses');
});
Route::get('/courses/new', function ()
{
    return view('courses/new');
});
Route::get('/camp', function ()
{
    return view('pages/camp');
});
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
Route::POST('/students/new','students@new')->name('add_new_student');