<?php

use Illuminate\Support\Facades\Route;

// home page
Route::get('/home', 'MainController@home') -> name('home');

// employee
Route::get('/employee/index', 'MainController@indexEmplo') -> name('index-employee');

Route::get('/employee/show/{id}', 'MainController@showEmplo') -> name('show-employee');

Route::get('/employee/create', 'MainController@createEmplo') -> name('create-employee');
Route::post('/employee/store', 'MainController@storeEmplo') -> name('store-employee');

// task
Route::get('/task/index', 'MainController@indexTask') -> name('index-task');

Route::get('/task/show/{id}', 'MainController@showTask') -> name('show-task');