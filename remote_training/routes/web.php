<?php

use Illuminate\Support\Facades\Route;

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
    if(!auth()->check()){
        return view('welcome');
    }
    else if(Laratrust::hasRole('admin')){
        return view('admin.index');
    }
    else if(Laratrust::hasRole('su_admin')){
        return view('su_admin.index');
    }
    else if(Laratrust::hasRole('user')){
        return view('user.index');
    }
});

Auth::routes();

/****************Admin routes*********************/
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/list', 'AdminController@list')->name('admin.list');
Route::get('/admin/list/{id}/upload', 'AdminController@file_up');
Route::post('/admin/list/{id}/upload', 'AdminController@upload');
Route::get('/admin/list/{id}/show', 'AdminController@show');



Route::get('/su_admin', 'SuperadminController@index')->name('su_admin');

/****************Users routes*********************/
Route::get('/user', 'UserController@index')->name('user');
Route::get('/user/info', 'UserController@info')->name('user.info');
Route::get('/user/body', 'UserController@body')->name('user.body');//body è riferito alle clinical info
Route::get('/user/protocol', 'UserController@protocol')->name('user.protocol');
Route::get('/user/progress', 'UserController@progress')->name('user.progress');
Route::get('/user/compilation', 'UserController@compilation');
Route::post('/user/compilation2', 'UserController@store_personal');
Route::get('/user/compilation2', 'UserController@compilation2');
Route::post('/user/info', 'UserController@store_clinical');
Route::get('/user/info/edit', 'UserController@personal_edit');
Route::post('/user/info', 'UserController@store_personal_edit');
Route::get('/user/body/edit', 'UserController@clinical_edit');




