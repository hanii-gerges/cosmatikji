<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class CategoryController extends Controller
{
    function AddCat()
    {
        return view('employee.categories.create');
    }

    function StoreCat(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required',
        ],
        [
            'name.required' => 'يرجى كتابة اسم القسم الرئيسي',
            ]);
        Category::insert([
            'name' => $request->name
            ]);
            $notification = array(
                'message' => 'تم اضافة القسم بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
    }


    function ViewAllCat()
    {
        $categories = Category::paginate(5);
        return view('employee.categories.view', compact('categories'));
    }

    function EditCat($id)
    {
        $category = Category::find($id);
        return view('employee.categories.edit',compact('category'));
    }


    function UpdateCat(Request $request , $id)
    {
        $validationData = $request->validate([
            'name' => 'required',
            ],
            [
                'name.required' => 'يرجى كتابة اسم القسم الرئيسي',
                ]);

        Category::where('id',$id)->update([
            'name' => $request->name
        ]);
        $notification = array(
            'message' => 'تم تعديل القسم بنجاح',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }


    function DeleteCat($id)
    {
        $notification = array(
            'message' => 'تم حذف القسم بنجاح',
            'alert-type' => 'error'
        );
        Category::where('id' , $id)->delete();
        return redirect()->back()->with($notification);
    }


    //////////////////////////////////////////////////////////////////////////////////////////////////
    // Admin Functions
    function AdminAddCat()
    {
        return view('admin.categories.create');
    }

    function AdminStoreCat(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required',
        ],
        [
            'name.required' => 'هذا الحقل مطلوب',
        ]);

        $category = Category::create([
            'name' => $request->name
        ]);

        if(request('image')){
            $category->addMediaFromRequest('image')->toMediaCollection();
        }

        $notification = array(
            'message' => 'تم اضافة القسم بنجاح',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    function AdminViewAllCat()
    {
        $categories = Category::paginate(5);
        return view('admin.categories.view', compact('categories'));
    }

    function AdminEditCat($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit',compact('category'));
    }

    public function showCategory(Category $category)
    {
        $cart = Cart::where('id',session()->get('cart'))->first();
        if(!request()->session()->has('cart') || !$cart)
        {
            $cart = Cart::create();
            config(['lifetime' => 43200,'expire_on_close' => true]);
            session(['cart' => $cart->id,'item' => []]);
        }

        $products = SubCategory::where('category_id',$category->id)->first()->products()->paginate(12);
        $categories = Category::all();
        
        return view('categories.show')->with('category',$category)
                                      ->with('categories',$categories)
                                      ->with('products',$products)
                                      ->with('cart',$cart);
    }

    function AdminUpdateCat(Request $request , Category $category)
    {
        $validationData = $request->validate([
        'name' => 'required',
        ],
        [
            'name.required' => 'يرجى كتابة اسم القسم الرئيسي',
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        if(request('image')){
            $category->addMediaFromRequest('image')->toMediaCollection();
        }

        $notification = array(
            'message' => 'تم تعديل القسم بنجاح',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }

    function AdminDeleteCat($id)
    {
        $notification = array(
            'message' => 'تم حذف القسم بنجاح',
            'alert-type' => 'error'
        );
        Category::where('id' , $id)->delete();
        return redirect()->back()->with($notification);
    }
    public function showSubCategory(Category $category,SubCategory $subcategory)
    {
        $cart = Cart::where('id',session()->get('cart'))->first();
        if(!request()->session()->has('cart') || !$cart)
        {
            $cart = Cart::create();
            config(['lifetime' => 43200,'expire_on_close' => true]);
            session(['cart' => $cart->id,'item' => []]);
        }
        $products = $subcategory->products()->paginate(12);
        $categories = Category::all();

        return view('categories.show')->with('category',$category)
                                      ->with('categories',$categories)
                                      ->with('products',$products)
                                      ->with('subcategory',$subcategory)
                                      ->with('cart',$cart);
    }


}

// =======
// use App\Models\Category;
// use App\Models\SubCategory;
// use Illuminate\Http\Request;

// class CategoryController extends Controller
// {
//     public function showCategory(Category $category)
//     {
//         $products = SubCategory::where('category_id',$category->id)->first()->products;

//         return view('categories.show');
//     }

//     public function showSubCategory(Category $category,$subcategory_id)
//     {

//         $products = SubCategory::findOrFail($subcategory_id)->products;
//         return view('categories.show');
//     }

// >>>>>>> a3dbc06813b9cb27d3bf1c65fb3fef29f01a4f85
// }
