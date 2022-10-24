<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ImageController;

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
Route::get('/', 'App\Http\Controllers\PagesController@goToPage');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/profile', 'App\Http\Controllers\PagesController@profile');
// use resource since we are going to get data
Route::resource('contacts', 'App\Http\Controllers\ContactsController');
//Routes for images
Route::get('/add-image', [ImageController::class, 'create'])->name('image.add');
Route::post('/store-image', [ImageController::class, 'store'])->name('image.store');
Route::get('/show-image', [ImageController::class, 'show'])->name('image.show');


// Route::get('/', function () {
//     return view('welcome');
    // return '<h1> Hello! This my first laravel Code<h1>';
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
