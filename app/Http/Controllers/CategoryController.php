<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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



}
