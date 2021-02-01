<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;






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
    $users = count(User::where('utype','user')->get());
    $products = count(Product::all());
    $employees = count(User::where('utype','employee')->get());
    return view('admin.dashboard' , compact('users','products','employees'));

})->name('admin.dashboard');
Route::get('home' , [AdminController::class , 'HomePage'])->name('home');
Route::get('logout' , [AdminController::class , 'logout'])->name('logout');
Route::get('create/employee/' , [AdminController::class , 'CreateEmployee'])->name('create.emp');
Route::post('store/employee/' , [AdminController::class , 'StoreEmployee'])->name('store.emp');
Route::get('view/all/employee/' , [AdminController::class , 'ViewAllEmp'])->name('view.all.emp');
Route::get('edit/employee/by/admin/{id}' , [AdminController::class , 'EditEmpByAdmin'])->name('admin.edit.emp');
Route::post('update/employee/by/admin/{id}' , [AdminController::class , 'UpdateEmpByAdmin'])->name('admin.update.emp');
Route::get('delete/employee/{id}' , [AdminController::class , 'DeleteEmp'])->name('delete.emp');
Route::get('admin/profile/' , [AdminController::class , 'AdminProfile'])->name('admin.profile');
Route::post('admin/update/profile/' , [AdminController::class , 'UpdateProfile'])->name('admin.update.profile');
Route::get('admin/change/password/' , [AdminController::class , 'ChangePassword'])->name('admin.change.password');
Route::post('admin/update/password/' , [AdminController::class , 'UpdatePassword'])->name('admin.update.password');
Route::get('admin/add/photo/' , [AdminController::class , 'AddPhoto'])->name('admin.add.photo');
Route::post('admin/update/photo/' , [AdminController::class , 'StorePhoto'])->name('admin.store.photo');


// Employee Routes
Route::middleware(['auth:sanctum', 'verified' , 'authemployee'])->get('/employee/dashboard', function () {
    $categories = count(Category::all());
    $subcategories = count(SubCategory::all());
    $products = count(Product::all());
    return view('employee.dashboard',compact('categories','subcategories','products'));
})->name('employee.dashboard');
Route::get('employee/home' , [EmployeeController::class , 'HomePage'])->name('emp.home');
Route::get('employee/profile' , [EmployeeController::class , 'EmployeeProfile'])->name('employee.profile');
Route::post('employee/update/profile' , [EmployeeController::class , 'EmployeeUpdateProfile'])->name('employee.update.profile');
Route::get('employee/add/photo' , [EmployeeController::class , 'AddPhoto'])->name('employee.add.photo');
Route::post('employee/store/photo' , [EmployeeController::class , 'StorePhoto'])->name('employee.store.photo');
Route::get('employee/change/password' , [EmployeeController::class , 'ChangePassword'])->name('employee.change.password');
Route::post('employee/update/password' , [EmployeeController::class , 'UpdatePassword'])->name('employee.update.password');





// Category Routes
Route::get('employee/add/category' , [CategoryController::class , 'AddCat'])->name('create.cat');
Route::post('employee/store/category' , [CategoryController::class , 'StoreCat'])->name('store.cat');
Route::get('employee/view/all/categories' , [CategoryController::class , 'ViewAllCat'])->name('view.all.cat');
Route::get('employee/edit/category/{id}' , [CategoryController::class , 'EditCat'])->name('edit.cat');
Route::post('employee/update/category/{id}' , [CategoryController::class , 'UpdateCat'])->name('update.cat');
Route::get('employee/delete/category/{id}' , [CategoryController::class , 'DeleteCat'])->name('delete.cat');


// SubCategory Route
Route::get('employee/add/sub/category' , [SubCategoryController::class , 'AddSubCat'])->name('add.subCat');
Route::post('employee/store/sub/category' , [SubCategoryController::class , 'StoreSubCat'])->name('store.subCat');
Route::get('employee/view/all/sub/categories' , [SubCategoryController::class , 'ViewAllSubCat'])->name('view.all.subCat');
Route::get('employee/edit/sub/category/{id}' , [SubCategoryController::class , 'EditSubCat'])->name('edit.subCat');
Route::post('employee/update/sub/category/{id}' , [SubCategoryController::class , 'UpdateSubCat'])->name('update.subCat');
Route::get('employee/delete/sub/category/{id}' , [SubCategoryController::class , 'DeleteSubCat'])->name('delete.subCat');




