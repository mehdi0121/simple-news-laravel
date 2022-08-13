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

Route::namespace('App\\Http\\Controllers')->group(function (){

    Route::get("/","HomeController@index")->name("index");
    Route::get("/category/{postcategory:slug}","HomeController@category")->name("category.index");

    Route::get("/{post:slug}","HomeController@post")->name("post.single");



});



Auth::routes();

