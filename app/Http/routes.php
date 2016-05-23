<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('front.home');
});
Route::get('/Admin', function () {
    return view('back.login');
});
Route::post('/login', 'FrontLoginController@ValidateUser');
Route::post('/Admin/Login', 'AdminLoginController@Login');
Route::get('/Admin/Add', function () {
    return view('back.manageAdmin.Add');
});
Route::get('/Admin/Logout', 'AdminLoginController@Logout');
Route::get('/Admin/Search', 'AdminManageController@Search');
Route::get('/Admin/Manage', 'AdminManageController@Index');
Route::get('/Admin/Edit/{id}', 'AdminManageController@Edit');
Route::get('/Admin/Delete/{id}', 'AdminManageController@Delete');
Route::post('/Admin/Edit/Submit/{id}', 'AdminManageController@Edit');
Route::post('/Admin/Add/Submit', 'AdminManageController@Add');

test
