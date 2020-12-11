<?php
use  App\Http\Controllers\AdmController;
use  App\Http\Controllers\PaginaPController;
use  App\Http\Controllers\PerfilController;
use App\Http\Controllers\UserController;

Route::resource('/adm' , AdmController::class);
Route::resource('/home' , PaginaPController::class);
Route::resource('/' , PaginaPController::class);
Route::resource('/user' , UserController::class);
Auth::routes();

Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Auth::routes();

Route::get('/x', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
