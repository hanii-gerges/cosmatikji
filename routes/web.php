<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Admin Routes
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');
Route::get('home' , [AdminController::class , 'HomePage'])->name('home');
Route::get('logout' , [Controller::class , 'logout'])->name('logout');
Route::get('create/employee/' , [AdminController::class , 'CreateEmployee'])->name('create.emp');

//Category Routes
Route::get('categories',[CategoryController::class,'showCategory']);




