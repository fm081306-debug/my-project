<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\cateController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
route::get('/', function () {
    return view('welcome');
});


/****************** Admin Routes ******************/
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/categories', [categoryController::class, 'index']);
Route::get('/categories/create', [categoryController::class, 'create']);
Route::resource('countries', CountryController::class);                         
Route::resource('clients', ClientController::class);
Route::resource('requests', RequestController::class);
Route::resource('appointments', AppointmentController::class);
Route::resource('users', UserController::class);