<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Panel\HomeController as PanelHomeController;
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
Auth::routes();


    Route::get("test",function (){
        return session()->all();
       // return storage("liara")->url("public/2022/09/17/4fhTBjOvPCyhX6SUxFNPWZSwRfdgpd4bMUC4pxu4.jpg");
    });


    Route::get("/",[HomeController::class,"index"])->name("index");
    Route::get("/category/{postcategory:slug}",[HomeController::class,"category"])->name("category.index");


    Route::prefix("admin")->middleware("isAdmin")->group(function (){
        Route::get("/",[AdminHomeController::class,"index"])->name("index.admin");
        Route::resource("blog",BlogController::class)->names("admin.blog")->parameter("blog","post");

    });

    Route::prefix("panel")->middleware("isAdmin")->group(function (){
        Route::get("/",[PanelHomeController::class,"index"])->name("index.panel");
        //Route::resource("blog",BlogController::class)->names("admin.blog")->parameter("blog","post");

    });





    Route::get("/{post:slug}",[HomeController::class,"post"])->name("post.single");