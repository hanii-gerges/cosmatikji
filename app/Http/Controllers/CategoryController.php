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
            ]);
        Category::insert([
            'name' => $request->name
            ]);
            $notification = array(
                'message' => 'تم اضافة الصنف بنجاح',
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
        Category::where('id',$id)->update([
            'name' => $request->name
        ]);
        $notification = array(
            'message' => 'تم تعديل الصنف بنجاح',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }

    function DeleteCat($id)
    {
        $notification = array(
            'message' => 'تم حذف الصنف بنجاح',
            'alert-type' => 'error'
        );
        Category::where('id' , $id)->delete();
        return redirect()->back()->with($notification);
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

        $products = SubCategory::where('category_id',$category->id)->first()->products()->paginate(9);
        $categories = Category::all();
        
        return view('categories.show')->with('category',$category)
                                      ->with('categories',$categories)
                                      ->with('products',$products)
                                      ->with('cart',$cart);
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
        $products = $subcategory->products()->paginate(9);
        $categories = Category::all();

        return view('categories.show')->with('category',$category)
                                      ->with('categories',$categories)
                                      ->with('products',$products)
                                      ->with('subcategory',$subcategory)
                                      ->with('cart',$cart);
    }


}
