<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\News\NewsController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ApplicationController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/news-details/{id}', [ApplicationController::class, 'newsdetails'])->name('news-details');

Route::group(['namespace' => 'Backend', 'prefix' => 'company-backend', 'middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/adduser', [UserController::class, 'create'])->name('adduser');
    Route::post('/users/adduser', [UserController::class, 'store'])->name('storeuser');
    Route::get('/users/edituser/{id}', [UserController::class, 'edit'])->name('edituser');
    Route::post('/users/edituser/{id}' ,[UserController::class, 'update'])->name('updateuser');
    Route::get('/users/deleteuser/{id}', [UserController::class, 'delete'])->name('deleteuser');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/categories/addcategory', [CategoryController::class, 'create'])->name('addcategory');
    Route::post('/categories/addcategory', [CategoryController::class, 'store'])->name('storecategory');
    Route::get('/categories/editcategory/{id}', [CategoryController::class, 'edit'])->name('editcategory');
    Route::post('/categories/editcategory/{id}' ,[CategoryController::class, 'update'])->name('updatecategory');
    Route::get('/categories/deletecategory/{id}', [CategoryController::class, 'delete'])->name('deletecategory');

    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/news/addnews', [NewsController::class, 'create'])->name('addnews');
    Route::post('/news/addnews', [NewsController::class, 'store'])->name('storenews');
    Route::get('/news/editnews/{id}', [NewsController::class, 'edit'])->name('editnews');
    Route::post('/news/editnews/{id}' ,[NewsController::class, 'update'])->name('updatenews');
    Route::get('/news/deletenews/{id}', [NewsController::class, 'delete'])->name('deletenews');

    

    


    
});
