<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MultiPicContoller;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
//use App\Http\Controllers\EmployeeController;
//use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MessageController;


use App\Http\Controllers\SubCategoryController;
//use App\Http\Controllers\ProductController;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\MultiPic;
use App\Models\SubCategory;
use App\Models\Order;







// use App\Http\Controllers\CategoryController;
// use App\Models\Category;
// >>>>>>> a3dbc06813b9cb27d3bf1c65fb3fef29f01a4f85


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
    $categories = Category::all();
    return view('welcome',compact('categories'));
});

// fontend categories

Route::get('/go/{id}',function($id){
    echo $id;
})->name('go');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Admin Routes
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/dashboard', function () {
    $users = count(User::where('utype','user')->get());
    $products = count(Product::all());
    $employees = count(User::where('utype','employee')->get());
    $orders_recived = count(Order::all()->where('status',1));
    $orders_unrecived = count(Order::all()->where('status',0));
    return view('admin.dashboard' , compact('users','products','employees','orders_recived','orders_unrecived'));

})->name('admin.dashboard');

Route::get('/home' , [AdminController::class , 'HomePage'])->name('home');
Route::get('/logout' , [AdminController::class , 'logout'])->name('logout');
Route::get('/create/employee/' , [AdminController::class , 'CreateEmployee'])->name('create.emp');
Route::post('/store/employee/' , [AdminController::class , 'StoreEmployee'])->name('store.emp');
Route::get('/view/all/employee/' , [AdminController::class , 'ViewAllEmp'])->name('view.all.emp');
Route::get('/edit/employee/by/admin/{id}' , [AdminController::class , 'EditEmpByAdmin'])->name('admin.edit.emp');
Route::post('/update/employee/by/admin/{id}' , [AdminController::class , 'UpdateEmpByAdmin'])->name('admin.update.emp');
Route::get('/delete/employee/{id}' , [AdminController::class , 'DeleteEmp'])->name('delete.emp');
Route::get('/admin/profile/' , [AdminController::class , 'AdminProfile'])->name('admin.profile');
Route::post('/admin/update/profile/' , [AdminController::class , 'UpdateProfile'])->name('admin.update.profile');
Route::get('/admin/change/password/' , [AdminController::class , 'ChangePassword'])->name('admin.change.password');
Route::post('/admin/update/password/' , [AdminController::class , 'UpdatePassword'])->name('admin.update.password');
Route::get('/admin/add/photo/' , [AdminController::class , 'AddPhoto'])->name('admin.add.photo');
Route::post('/admin/update/photo/' , [AdminController::class , 'StorePhoto'])->name('admin.store.photo');


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

//Admin Category Routes
Route::get('admin/add/category' , [CategoryController::class , 'AdminAddCat'])->name('admin.create.cat');
Route::post('admin/store/category' , [CategoryController::class , 'AdminStoreCat'])->name('admin.store.cat');
Route::get('admin/view/all/categories' , [CategoryController::class , 'AdminViewAllCat'])->name('admin.view.all.cat');
Route::get('admin/edit/category/{id}' , [CategoryController::class , 'AdminEditCat'])->name('admin.edit.cat');
Route::post('admin/update/category/{id}' , [CategoryController::class , 'AdminUpdateCat'])->name('admin.update.cat');
Route::get('admin/delete/category/{id}' , [CategoryController::class , 'AdminDeleteCat'])->name('admin.delete.cat');

// SubCategory Route
Route::get('employee/add/sub/category' , [SubCategoryController::class , 'AddSubCat'])->name('add.subCat');
Route::post('employee/store/sub/category' , [SubCategoryController::class , 'StoreSubCat'])->name('store.subCat');
Route::get('employee/view/all/sub/categories' , [SubCategoryController::class , 'ViewAllSubCat'])->name('view.all.subCat');
Route::get('employee/edit/sub/category/{id}' , [SubCategoryController::class , 'EditSubCat'])->name('edit.subCat');
Route::post('employee/update/sub/category/{id}' , [SubCategoryController::class , 'UpdateSubCat'])->name('update.subCat');
Route::get('employee/delete/sub/category/{id}' , [SubCategoryController::class , 'DeleteSubCat'])->name('delete.subCat');

// Admin SubCategory Route
Route::get('admin/add/sub/category' , [SubCategoryController::class , 'AdminAddSubCat'])->name('admin.add.subCat');
Route::post('admin/store/sub/category' , [SubCategoryController::class , 'AdminStoreSubCat'])->name('admin.store.subCat');
Route::get('admin/view/all/sub/categories' , [SubCategoryController::class , 'AdminViewAllSubCat'])->name('admin.view.all.subCat');
Route::get('admin/edit/sub/category/{id}' , [SubCategoryController::class , 'AdminEditSubCat'])->name('admin.edit.subCat');
Route::post('admin/update/sub/category/{id}' , [SubCategoryController::class , 'AdminUpdateSubCat'])->name('admin.update.subCat');
Route::get('admin/delete/sub/category/{id}' , [SubCategoryController::class , 'AdminDeleteSubCat'])->name('admin.delete.subCat');


// Product Routes
Route::get('employee/add/product' , [ProductController::class ,'AddProduct'])->name('add.product');
Route::post('employee/store/product' , [ProductController::class , 'StoreProduct'])->name('store.product');
Route::get('employee/view/all/product' , [ProductController::class ,'ViewAllProducts'])->name('view.all.product');
Route::get('employee/edit/product/{id}' , [ProductController::class ,'EditProduct'])->name('edit.product');
Route::get('employee/delete/product{id}' , [ProductController::class ,'DeleteProduct'])->name('delete.product');
Route::post('employee/update/product/{id}' , [ProductController::class , 'UpdateProduct'])->name('update.product');

// Admin Product Routes
Route::get('admin/add/product' , [ProductController::class ,'AdminAddProduct'])->name('admin.add.product');
Route::post('admin/store/product' , [ProductController::class , 'AdminStoreProduct'])->name('admin.store.product');
Route::get('admin/view/all/product' , [ProductController::class ,'AdminViewAllProducts'])->name('admin.view.all.product');
Route::get('admin/edit/product/{id}' , [ProductController::class ,'AdminEditProduct'])->name('admin.edit.product');
Route::get('admin/delete/product{id}' , [ProductController::class ,'AdminDeleteProduct'])->name('admin.delete.product');
Route::post('admin/update/product/{id}' , [ProductController::class , 'AdminUpdateProduct'])->name('admin.update.product');

// MultiPic Routes For Admin
Route::get('/admin/add/product/images' , [MultiPicContoller::class ,'AddMulti'])->name('admin.add.multipic');
Route::post('/admin/stroe/product/images' , [MultiPicContoller::class ,'Store'])->name('admin.store.multipic');
Route::get('/admin/show/product/images/{id}' , [MultiPicContoller::class ,'MultiPic'])->name('admin.show.multipic');
Route::get('/admin/delete/{id}' , [MultiPicContoller::class ,'Delete'])->name('admin.delete.img');
Route::get('/admin/edit/{id}' , [MultiPicContoller::class ,'Edit'])->name('admin.edit.img');
Route::post('/admin/update/image/{id}' , [MultiPicContoller::class ,'Update'])->name('admin.update.img');

// MultiPic Routes For Employee
Route::get('/employee/add/product/images' , [MultiPicContoller::class ,'EmpAddMulti'])->name('emp.add.multipic');
Route::post('/employee/stroe/product/images' , [MultiPicContoller::class ,'EmpStore'])->name('emp.store.multipic');
Route::get('/employee/show/product/images/{id}' , [MultiPicContoller::class ,'EmpMultiPic'])->name('emp.show.multipic');
Route::get('/employee/delete/{id}' , [MultiPicContoller::class ,'EmpDelete'])->name('emp.delete.img');
Route::get('/employee/edit/{id}' , [MultiPicContoller::class ,'EmpEdit'])->name('emp.edit.img');
Route::post('/employee/update/image/{id}' , [MultiPicContoller::class ,'EmpUpdate'])->name('emp.update.img');


// Admin Order Routes
Route::get('/recived/orders' ,[OrderController::class,'adminRecived'])->name('admin.recived');
Route::get('/unrecived/orders' ,[OrderController::class,'adminUnRecived'])->name('admin.unrecived');
Route::post('/change/status' , [OrderController::class , 'updateOrderStatus'])->name('change.status');
// Route::view('/unrecived/orders' ,'admin.orders.unrecived');
//Route::post('/test' ,[MultiPicContoller::class,'Test'])->name('test');

// HOME PAGE Route
Route::get('/home',[Controller::class , 'Home'])->name('front.home');

// Contact Us Routes
Route::get('/contact',[MessageController::class , 'Contact'])->name('contact');
Route::post('/send/message' , [MessageController::class , 'Store'])->name('store.msg');

// Messages Route
Route::get('/view/message',[MessageController::class , 'View'])->name('view.message');
Route::get('/delete/message/{id}',[MessageController::class , 'Delete'])->name('delete.message');




//Category Routes
Route::get('categories/{category}',[CategoryController::class,'showCategory']);
Route::get('categories/{category}/subcategories/{subcategory}',[CategoryController::class,'showSubCategory']);


//Product Routes
Route::get('products/{product}',[ProductController::class,'show']);


//Cart Routes
Route::get('carts/{cart}',[CartController::class,'show']);
Route::put('carts/addTotalToCart',[CartController::class,'addTotalToCart']);

//CartItem Routes
Route::post('cartitems/addToCart',[CartItemController::class,'addToCart']);
Route::delete('cartitems/removeFromCart',[CartItemController::class,'removeFromCart']);

//Order Routes
Route::get('orders/create',[OrderController::class,'create']);
Route::post('orders',[OrderController::class,'store']);

