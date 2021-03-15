<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MultiPicContoller;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\EmployeeController;
//use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\MessageController;


use App\Http\Controllers\SubCategoryController;
use App\Models\Cart;
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

Route::get('/',[HomeController::class,'index']);

// fontend categories

Route::get('/go/{id}',function($id){
    echo $id;
})->name('go');



// Admin Routes
Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    $users = count(User::where('utype','user')->get());
    $products = count(Product::all());
    $employees = count(User::where('utype','employee')->get());
    $orders_recived = count(Order::all()->where('status',1));
    $orders_unrecived = count(Order::all()->where('status',0));
    return view('admin.dashboard' , compact('users','products','employees','orders_recived','orders_unrecived'));

})->name('admin.dashboard');

Route::get('/home' , [AdminController::class , 'HomePage'])->name('home');
Route::get('/logout' , [AdminController::class , 'logout'])->name('logout');
Route::get('/users/create' , [AdminController::class , 'CreateEmployee'])->name('create.emp');
Route::post('/users' , [AdminController::class , 'StoreEmployee'])->name('store.emp');
Route::get('/users' , [AdminController::class , 'ViewAllEmp'])->name('view.all.emp');
Route::get('/users/{users}/edit' , [AdminController::class , 'EditEmpByAdmin'])->name('admin.edit.emp');
Route::post('/users/{user}' , [AdminController::class , 'UpdateEmpByAdmin'])->name('admin.update.emp');
Route::delete('/users/{user}' , [AdminController::class , 'DeleteEmp'])->name('delete.emp');
Route::get('/users/{user}' , [AdminController::class , 'AdminProfile'])->name('admin.profile');
Route::get('/admin/change/password/' , [AdminController::class , 'ChangePassword'])->name('admin.change.password');
Route::post('/admin/update/password/' , [AdminController::class , 'UpdatePassword'])->name('admin.update.password');
// Route::get('/admin/add/photo/' , [AdminController::class , 'AddPhoto'])->name('admin.add.photo');
// Route::post('/admin/update/photo/' , [AdminController::class , 'StorePhoto'])->name('admin.store.photo');


// Employee Routes
// Route::middleware(['auth:sanctum', 'verified'])->get('/employee/dashboard', function () {
//     $categories = count(Category::all());
//     $subcategories = count(SubCategory::all());
//     $products = count(Product::all());
//     return view('employee.dashboard',compact('categories','subcategories','products'));
// })->name('employee.dashboard');

// Route::get('employee/home' , [EmployeeController::class , 'HomePage'])->name('emp.home');
// Route::get('employee/profile' , [EmployeeController::class , 'EmployeeProfile'])->name('employee.profile');
// Route::post('employee/update/profile' , [EmployeeController::class , 'EmployeeUpdateProfile'])->name('employee.update.profile');
// Route::get('employee/add/photo' , [EmployeeController::class , 'AddPhoto'])->name('employee.add.photo');
// Route::post('employee/store/photo' , [EmployeeController::class , 'StorePhoto'])->name('employee.store.photo');
// Route::get('employee/change/password' , [EmployeeController::class , 'ChangePassword'])->name('employee.change.password');
// Route::post('employee/update/password' , [EmployeeController::class , 'UpdatePassword'])->name('employee.update.password');





// Category Routes
// Route::get('employee/add/category' , [CategoryController::class , 'AddCat'])->name('create.cat');
// Route::post('employee/store/category' , [CategoryController::class , 'StoreCat'])->name('store.cat');
// Route::get('employee/view/all/categories' , [CategoryController::class , 'ViewAllCat'])->name('view.all.cat');
// Route::get('employee/edit/category/{id}' , [CategoryController::class , 'EditCat'])->name('edit.cat');
// Route::post('employee/update/category/{id}' , [CategoryController::class , 'UpdateCat'])->name('update.cat');
// Route::get('employee/delete/category/{id}' , [CategoryController::class , 'DeleteCat'])->name('delete.cat');

//Admin Category Routes
Route::get('/admin/categories' , [CategoryController::class , 'AdminViewAllCat'])->name('admin.view.all.cat');
Route::get('/categories/create' , [CategoryController::class , 'AdminAddCat'])->name('admin.create.cat');
Route::post('/categories' , [CategoryController::class , 'AdminStoreCat'])->name('admin.store.cat');
Route::get('/categories/{category}/edit' , [CategoryController::class , 'AdminEditCat'])->name('admin.edit.cat');
Route::post('/categories/{category}' , [CategoryController::class , 'AdminUpdateCat'])->name('admin.update.cat');
Route::delete('/categories/{category}' , [CategoryController::class , 'AdminDeleteCat'])->name('admin.delete.cat');

// SubCategory Route
// Route::get('employee/add/sub/category' , [SubCategoryController::class , 'AddSubCat'])->name('add.subCat');
// Route::post('employee/store/sub/category' , [SubCategoryController::class , 'StoreSubCat'])->name('store.subCat');
// Route::get('employee/view/all/sub/categories' , [SubCategoryController::class , 'ViewAllSubCat'])->name('view.all.subCat');
// Route::get('employee/edit/sub/category/{id}' , [SubCategoryController::class , 'EditSubCat'])->name('edit.subCat');
// Route::post('employee/update/sub/category/{id}' , [SubCategoryController::class , 'UpdateSubCat'])->name('update.subCat');
// Route::get('employee/delete/sub/category/{id}' , [SubCategoryController::class , 'DeleteSubCat'])->name('delete.subCat');

// Admin SubCategory Route
Route::get('/subcategories' , [SubCategoryController::class , 'AdminViewAllSubCat'])->name('admin.view.all.subCat');
Route::get('/subcategories/create' , [SubCategoryController::class , 'AdminAddSubCat'])->name('admin.add.subCat');
Route::post('/subcategories' , [SubCategoryController::class , 'AdminStoreSubCat'])->name('admin.store.subCat');
Route::get('/subcategories/{subcategory}/edit' , [SubCategoryController::class , 'AdminEditSubCat'])->name('admin.edit.subCat');
Route::put('/subcategories/{subcategory}' , [SubCategoryController::class , 'AdminUpdateSubCat'])->name('admin.update.subCat');
Route::delete('/subcategories/{subcategory}' , [SubCategoryController::class , 'AdminDeleteSubCat'])->name('admin.delete.subCat');


// Product Routes
// Route::get('employee/add/product' , [ProductController::class ,'AddProduct'])->name('add.product');
// Route::post('employee/store/product' , [ProductController::class , 'StoreProduct'])->name('store.product');
// Route::get('employee/view/all/product' , [ProductController::class ,'ViewAllProducts'])->name('view.all.product');
// Route::get('employee/edit/product/{id}' , [ProductController::class ,'EditProduct'])->name('edit.product');
// Route::get('employee/delete/product{id}' , [ProductController::class ,'DeleteProduct'])->name('delete.product');
// Route::post('employee/update/product/{id}' , [ProductController::class , 'UpdateProduct'])->name('update.product');

// Admin Product Routes
Route::get('/admin/products' , [ProductController::class ,'AdminViewAllProducts'])->name('admin.view.all.product');
Route::get('/products/create' , [ProductController::class ,'AdminAddProduct'])->name('admin.add.product');
Route::post('/products' , [ProductController::class , 'AdminStoreProduct'])->name('admin.store.product');
Route::get('/products/{product}/edit' , [ProductController::class ,'AdminEditProduct'])->name('admin.edit.product');
Route::put('products/{product}' , [ProductController::class , 'AdminUpdateProduct'])->name('admin.update.product');
Route::delete('/products/{product}' , [ProductController::class ,'AdminDeleteProduct'])->name('admin.delete.product');

// MultiPic Routes For Admin
// Route::get('/admin/add/product/images' , [MultiPicContoller::class ,'AddMulti'])->name('admin.add.multipic');
// Route::post('/admin/stroe/product/images' , [MultiPicContoller::class ,'Store'])->name('admin.store.multipic');
// Route::get('/admin/show/product/images/{id}' , [MultiPicContoller::class ,'MultiPic'])->name('admin.show.multipic');
// Route::get('/admin/delete/{id}' , [MultiPicContoller::class ,'Delete'])->name('admin.delete.img');
// Route::get('/admin/edit/{id}' , [MultiPicContoller::class ,'Edit'])->name('admin.edit.img');
// Route::post('/admin/update/image/{id}' , [MultiPicContoller::class ,'Update'])->name('admin.update.img');

// MultiPic Routes For Employee
// Route::get('/employee/add/product/images' , [MultiPicContoller::class ,'EmpAddMulti'])->name('emp.add.multipic');
// Route::post('/employee/stroe/product/images' , [MultiPicContoller::class ,'EmpStore'])->name('emp.store.multipic');
// Route::get('/employee/show/product/images/{id}' , [MultiPicContoller::class ,'EmpMultiPic'])->name('emp.show.multipic');
// Route::get('/employee/delete/{id}' , [MultiPicContoller::class ,'EmpDelete'])->name('emp.delete.img');
// Route::get('/employee/edit/{id}' , [MultiPicContoller::class ,'EmpEdit'])->name('emp.edit.img');
// Route::post('/employee/update/image/{id}' , [MultiPicContoller::class ,'EmpUpdate'])->name('emp.update.img');


// Admin Order Routes
Route::get('/admin/orders' ,[OrderController::class,'adminRecived'])->name('admin.recived');
Route::post('/orders/{order}' , [OrderController::class , 'updateOrderStatus'])->name('change.status');
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

//Review Routes
Route::post('reviews',[ReviewController::class,'store']);

