<?php

namespace App\Http\Controllers;

<<<<<<< HEAD


=======
use App\Models\Cart;
>>>>>>> e4ba1b14ca594aa015c1767c78d2ace21d49a2c7
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
<<<<<<< HEAD
        $products = SubCategory::where('category_id',$category->id)->first()->products;

=======
        $cart = Cart::where('id',session()->get('cart'))->first();
        if(!session()->has('cart'))
        {
            $cart = Cart::create();
        }
        $products = SubCategory::where('category_id',$category->id)->first()->products()->paginate(9);
        $categories = Category::all();
        
>>>>>>> e4ba1b14ca594aa015c1767c78d2ace21d49a2c7
        return view('categories.show')->with('category',$category)
                                      ->with('categories',$categories)
                                      ->with('products',$products)
                                      ->with('cart',$cart);
    }

<<<<<<< HEAD
    function AdminUpdateCat(Request $request , $id)
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

    function AdminDeleteCat($id)
    {
        $notification = array(
            'message' => 'تم حذف القسم بنجاح',
            'alert-type' => 'error'
        );
        Category::where('id' , $id)->delete();
        return redirect()->back()->with($notification);
=======
    public function showSubCategory(Category $category,SubCategory $subcategory)
    {
        $cart = Cart::where('id',session()->get('cart'))->first();
        if(!session()->has('cart'))
        {
            $cart = Cart::create();
        }
        $products = $subcategory->products()->paginate(9);
        $categories = Category::all();

        return view('categories.show')->with('category',$category)
                                      ->with('categories',$categories)
                                      ->with('products',$products)
                                      ->with('subcategory',$subcategory)
                                      ->with('cart',$cart);
>>>>>>> e4ba1b14ca594aa015c1767c78d2ace21d49a2c7
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
