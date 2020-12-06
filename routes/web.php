<?php
use  App\Http\Controllers\AdmController;

Route::resource('/adm' , AdmController::class) -> middleware('auth');
Route::resource('/perfils', 'App\Http\Controllers\PerfilController')-> middleware('auth');



Auth::routes();


Route::get('/', [App\Http\Controllers\PaginaPController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\PaginaPController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
