<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    function AddSubCat()
    {
        return view('employee.subcategories.create');
    }

    function StoreSubCat(Request $request)
    {
        $validationData = $request->validate([
            'cat_id' => 'required',
            'subname' => 'required'
        ],
    [
            'cat_id.required' => 'يرجى ادخال رقم القسم الرئيسي',
            'subname.required' => 'يرجى كتابة اسم القسم الفرعي'

    ]);

        SubCategory::insert([
            'category_id' => $request->cat_id,
            'name' => $request->subname,
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
        return view('employee.subcategories.edit',compact('subcategory'));
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
        return view('admin.subcategories.create');
    }

    function AdminStoreSubCat(Request $request)
    {
        $validationData = $request->validate([
            'cat_id' => 'required',
            'subname' => 'required'
        ],
    [
            'cat_id.required' => 'يرجى ادخال رقم القسم الرئيسي',
            'subname.required' => 'يرجى كتابة اسم القسم الفرعي'

    ]);

        SubCategory::insert([
            'category_id' => $request->cat_id,
            'name' => $request->subname,
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
