<?php

use Illuminate\Support\Facades\Route;

// employee
Route::get('/employee/index', 'MainController@indexEmplo') -> name('index-employee');

Route::get('/employee/show/{id}', 'MainController@showEmplo') -> name('show-employee');

Route::get('/employee/create', 'MainController@createEmplo') -> name('create-employee');
Route::post('/employee/store', 'MainController@storeEmplo') -> name('store-employee');

// task
Route::get('/task/index', 'MainController@indexTask') -> name('index-task');