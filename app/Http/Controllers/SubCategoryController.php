<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
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
        ]);

        SubCategory::insert([
            'category_id' => $request->cat_id,
            'name' => $request->subname,
        ]);
        $notification = array(
            'message' => 'تم اضافة الصنف الفرعي بنجاح',
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
        SubCategory::where('id',$id)->update([
            'category_id' => $request->cat_id,
            'name' => $request->subname
        ]);
        $notification = array(
            'message' => 'تم تعديل الصنف الفرعي بنجاح',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }

    function DeleteSubCat($id)
    {

        SubCategory::where('id',$id)->delete();
        $notification = array(
            'message' => 'تم حذف الصنف بنجاح',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

}
