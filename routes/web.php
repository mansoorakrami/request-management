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


Auth::routes(['verify' => true]);

Route::get('/superadmin', 'HomeController@superadminindex')->name('superadmin.index');
Route::get('/master', 'HomeController@masterindex')->name('master.index');
Route::get('/successor', 'HomeController@successorindex')->name('successor.index');
Route::get('/owner', 'HomeController@ownerindex')->name('owner.index');
Route::get('/protection', 'HomeController@protectionindex')->name('protection.index');
Route::get('/financial', 'HomeController@financialindex')->name('financial.index');
Route::get('/support', 'HomeController@supportindex')->name('support.index');
Route::get('/home', 'HomeController@index');


Route::resource('organizations', 'OrganizationController');


Route::resource('roles', 'RoleController');

Route::resource('severities', 'SeverityController');

Route::get('products/{id}/attributes', 'ProductController@attributes')->name('products.attributes');


Route::resource('categories', 'CategoryController');





Route::resource('tickets', 'TicketController');

Route::resource('messages', 'MessageController');
















