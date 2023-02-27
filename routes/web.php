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
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index'])->name('index');

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/search/name', [StudentController::class, 'searchByName']);

Route::get('/search/email', [StudentController::class, 'searchByEmail']);