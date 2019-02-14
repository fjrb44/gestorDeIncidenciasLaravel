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

Auth::routes();

Route::get('/new_ticket', 'TicketController@index');
Route::post('/new_ticket', 'TicketController@create');

//Admin routes
Route::get('/admin/tickets', 'TicketController@adminIndex')->middleware("admin");
//Route::post('/admin/close_ticket/{ticket_id}', 'AdminController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


