<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

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

//2-Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});
//3- Call Controller Function
Route::get('/',[HomeController::class,'index'])->name('home');
//4- Route -> Controller ->View
Route::get('/test',[HomeController::class,'test'])->name('test');
//5- Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');
//Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



//ADMIN PANEL ROUTES//

Route::get('/admin',[AdminHomeController::class,'index'])->name('admin');

//ADMIN CATEGORY ROUTES//

Route::get('/admin/category',[App\Http\Controllers\AdminPanel\CategoryController::class,'index'])->name('admin_category');

Route::get('/admin/category/create',[App\Http\Controllers\AdminPanel\CategoryController::class,'create'])->name('admin_category_create');