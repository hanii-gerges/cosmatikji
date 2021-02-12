<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MultiPic;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;


class MultiPicContoller extends Controller
{

    function MultiPic($id)
    {
        $images = MultiPic::where('product_id',$id)->paginate(5);
        return view('admin.multipic.index',compact('images'));
    }


    function AddMulti()
    {
        return view('admin.multipic.add');
    }


    function store(Request $request)
    {
        $validationData = $request->validate([

            'product_id' => 'required',
            'image' => 'required',
         ],[
                'product_id.required' => 'يرجى ادخال رقم المنتج ',
                'image.required' => 'يرجى اختيار صورة واحدة على الاقل',
            ]);

            $images = $request->file('image');
            // print_r($images);
            foreach($images as $image)
            {
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('back-end/multipic/'.$name_gen);
                $last_name = 'back-end/multipic/'.$name_gen;
                MultiPic::insert([
                'product_id' => $request->product_id,
                'image' => $last_name,
                'created_at' => Carbon::now()
            ]);
        }
            $notification = array(
                'message' => 'تم اضافة صور المنتج بنجاح',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);


    }

    function Delete($id)
    {
        MultiPic::where('id',$id)->delete();

        $notification = array(
            'message' => 'تم اضافة صور المنتج بنجاح',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);

    }

    function Edit($id)
    {
        $image = MultiPic::find($id);
        return view('admin.multipic.edit',compact('image'));
    }

    function Update(Request $request,$id)
    {
        $old = $request->old_img;
        $new = $request->file('new_img');
            $gen_name = hexdec(uniqid());
            $exe = strtolower($new->getClientOriginalExtension());
            $full_name = $gen_name.'.'.$exe;
            $path = 'back-end/multipic/';
            $new->move($path,$full_name);
            $last_name = $path.$full_name;
            unlink($old);
            MultiPic::where('id',$id)->update([
                'image' => $last_name,
            ]);
            $notification = array(
                'message' => 'تم تعديل المنتج بنجاح',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);


    }

    ///////////////////////////////////////////////////////////////////////////
    // Emplyee functions
    function EmpMultiPic($id)
    {
        $images = MultiPic::where('product_id',$id)->paginate(5);
        return view('employee.multipic.index',compact('images'));
    }


    function EmpAddMulti()
    {
        return view('employee.multipic.add');
    }


    function Empstore(Request $request)
    {
        $validationData = $request->validate([

            'product_id' => 'required',
            'image' => 'required',
         ],[
                'product_id.required' => 'يرجى ادخال رقم المنتج ',
                'image.required' => 'يرجى اختيار صورة واحدة على الاقل',
            ]);

             $images = $request->file('image');
            foreach($images as $image)
            {
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(300,300)->save('back-end/multipic/'.$name_gen);
                $last_name = 'back-end/multipic/'.$name_gen;
                MultiPic::insert([
                'product_id' => $request->product_id,
                'image' => $last_name,
                'created_at' => Carbon::now()
            ]);
            }
            $notification = array(
                'message' => 'تم اضافة صور المنتج بنجاح',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);


    }

    function EmpDelete($id)
    {
        MultiPic::where('id',$id)->delete();

        $notification = array(
            'message' => 'تم اضافة صور المنتج بنجاح',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);

    }

    function EmpEdit($id)
    {
        $image = MultiPic::find($id);
        return view('employee.multipic.edit',compact('image'));
    }

    function EmpUpdate(Request $request,$id)
    {
        $old = $request->old_img;
        $new = $request->file('new_img');
            $gen_name = hexdec(uniqid());
            $exe = strtolower($new->getClientOriginalExtension());
            $full_name = $gen_name.'.'.$exe;
            $path = 'back-end/multipic/';
            $new->move($path,$full_name);
            $last_name = $path.$full_name;
            unlink($old);
            MultiPic::where('id',$id)->update([
                'image' => $last_name,
            ]);
            $notification = array(
                'message' => 'تم تعديل المنتج بنجاح',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);


    }


    function Test(Request $request)
    {
        $states = $request->states;
        echo $states;
        // Order::where('id',$id)->update([
        //     'states' => $states
        // ]);
    }


}
