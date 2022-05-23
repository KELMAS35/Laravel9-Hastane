<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

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

Route::prefix('admin')->name('admin.')->group(function () {

Route::get('/',[AdminHomeController::class,'index'])->name('index');

//ADMIN CATEGORY ROUTES//

Route::prefix('category')->name('category.')->group(function () {

Route::get('/category',[AdminCategoryController::class,'index'])->name('index');

Route::get('/create',[AdminCategoryController::class,'create'])->name('create');

Route::post('/store',[AdminCategoryController::class,'store'])->name('store');

Route::get('/edit/{id}',[AdminCategoryController::class,'edit'])->name('edit');

Route::post('/update/{id}',[AdminCategoryController::class,'update'])->name('update');

Route::get('/destroy/{id}',[AdminCategoryController::class,'destroy'])->name('destroy');

Route::get('/show/{id}',[AdminCategoryController::class,'show'])->name('show');
});

});