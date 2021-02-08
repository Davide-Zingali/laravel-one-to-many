<?php

use Illuminate\Support\Facades\Route;

// home page
Route::get('/home', 'MainController@home') -> name('home');


// employee
Route::get('/employee/index', 'EmployeeController@indexEmplo') -> name('index-employee');

Route::get('/employee/show/{id}', 'EmployeeController@showEmplo') -> name('show-employee');

Route::get('/employee/create', 'EmployeeController@createEmplo') -> name('create-employee');
Route::post('/employee/store', 'EmployeeController@storeEmplo') -> name('store-employee');


// task
Route::get('/task/index', 'TaskController@indexTask') -> name('index-task');

Route::get('/task/show/{id}', 'TaskController@showTask') -> name('show-task');

Route::get('/task/create', 'TaskController@createTask') -> name('create-task');
Route::post('/task/store', 'TaskController@storeTask') -> name('store-task');


// typology