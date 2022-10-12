<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::Class, 'about'])->name('about');
Route::get('/contact', [HomeController::Class, 'contact'])->name('contact');


// Properties Route
Route::get('/properties', [PropertiesController::Class, 'index'])->name('properties');
Route::get('/single-property', [PropertiesController::Class, 'single_property'])->name('single-property');