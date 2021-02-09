<?php

use Illuminate\Support\Facades\Route;

// home page
Route::get('/home', function() {
    return view('pages.home-page');
}) -> name('home');


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
Route::get('/typology/index', 'TypologyController@indexTypology') -> name('index-typology');

Route::get('/typology/show/{id}', 'TypologyController@showTypology') -> name('show-typology');

Route::get('/typology/create', 'TypologyController@createTypology') -> name('create-typology');
Route::post('/typology/store', 'TypologyController@storeTypology') -> name('store-typology');

Route::get('/typology/edit/{id}', 'TypologyController@editTypology') -> name('edit-typology');
Route::post('/typology/update/{id}', 'TypologyController@updateTypology') -> name('update-typology');