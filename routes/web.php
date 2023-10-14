<?php

use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Front\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[WebsiteController::class,'home'])->name('home');
Route::get('/blog-category/{id}',[WebsiteController::class,'blogCategory'])->name('blogs.category');
Route::get('/blog-details/{id}',[WebsiteController::class,'blogDetails'])->name('blogs.details');
Route::get('/about',[WebsiteController::class,'about'])->name('about');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('blog-categories',BlogCategoryController::class);
    Route::resource('blogs',BlogController::class);

});
