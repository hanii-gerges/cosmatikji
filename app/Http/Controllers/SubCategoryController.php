<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    function AddSubCat()
    {
        $categories = Category::all();
        return view('employee.subcategories.create')->with('categories',$categories);
    }

    function StoreSubCat(Request $request)
    {
        $validationData = $request->validate([
            'category_id' => 'required',
            'name' => 'required'
        ],
    [
            'category_id.required' => 'يرجى ادخال رقم القسم الرئيسي',
            'name.required' => 'يرجى كتابة اسم القسم الفرعي'

    ]);

        SubCategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'تم اضافة القسم الفرعي بنجاح',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    function ViewAllSubCat()
    {
        $subcategories = SubCategory::paginate(5);
        // $subcategories = DB::table('sub_categories')->latest()->first();
        return view('employee.subcategories.view',compact('subcategories'));
    }

    function EditSubCat($id)
    {
        $subcategory = SubCategory::find($id);
        $categories = Category::all();
        return view('employee.subcategories.edit',compact('subcategory','categories'));
    }

    function UpdateSubCat(Request $request , $id)
    {
        $validationData = $request->validate([
            'cat_id' => 'required',
            'subname' => 'required'
        ],
        [
                'cat_id.required' => 'يرجى ادخال رقم القسم الرئيسي',
                'subname.required' => 'يرجى كتابة اسم القسم الفرعي'

        ]);

        SubCategory::where('id',$id)->update([
            'category_id' => $request->cat_id,
            'name' => $request->subname
        ]);
        $notification = array(
            'message' => 'تم تعديل القسم الفرعي بنجاح',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    function DeleteSubCat($id)
    {

        SubCategory::where('id',$id)->delete();
        $notification = array(
            'message' => 'تم حذف القسم الفرعي بنجاح',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    //////////////////////////////////////////////////////////////////////////////////////

    // Admin SubCategory Functions
    function AdminAddSubCat()
    {
        $categories = Category::all();
        return view('admin.subcategories.create')->with('categories',$categories);
    }

    function AdminStoreSubCat(Request $request)
    {
        $validationData = $request->validate([
            'category_id' => 'required',
            'name' => 'required'
        ],
    [
            'category_id.required' => 'يرجى ادخال رقم القسم الرئيسي',
            'name.required' => 'يرجى كتابة اسم القسم الفرعي'

    ]);

        SubCategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'created_at' => Carbon::now()

        ]);
        $notification = array(
            'message' => 'تم اضافة القسم الفرعي بنجاح',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    function AdminViewAllSubCat()
    {
        $subcategories = SubCategory::latest()->paginate(5);
        // $subcategories = DB::table('sub_categories')->latest()->first();
        return view('admin.subcategories.view',compact('subcategories'));
    }

    function AdminEditSubCat($id)
    {
        $subcategory = SubCategory::find($id);
        return view('admin.subcategories.edit',compact('subcategory'));
    }

    function AdminUpdateSubCat(Request $request , $id)
    {
        $validationData = $request->validate([
            'cat_id' => 'required',
            'subname' => 'required'
        ],
        [
                'cat_id.required' => 'يرجى ادخال رقم القسم الرئيسي',
                'subname.required' => 'يرجى كتابة اسم القسم الفرعي'

        ]);

        SubCategory::where('id',$id)->update([
            'category_id' => $request->cat_id,
            'name' => $request->subname
        ]);
        $notification = array(
            'message' => 'تم تعديل القسم الفرعي بنجاح',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    function AdminDeleteSubCat($id)
    {

        SubCategory::where('id',$id)->delete();
        $notification = array(
            'message' => 'تم حذف القسم الفرعي بنجاح',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }



}
