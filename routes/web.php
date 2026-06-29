<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});


// ======================
// Routes (index pages)
// ======================

Route::get('/services', [ServiceController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/countries', [CountryController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index']);
Route::get('/requests', [RequestController::class, 'index']);
Route::get('/appointments', [AppointmentController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);


// ======================
// Resource Routes (CRUD)
// ======================

Route::resource('services', ServiceController::class);
Route::resource('categories', CategoryController::class);
Route::resource('countries', CountryController::class);
Route::resource('clients', ClientController::class);
Route::resource('requests', RequestController::class);
Route::resource('appointments', AppointmentController::class);
Route::resource('users', UserController::class);