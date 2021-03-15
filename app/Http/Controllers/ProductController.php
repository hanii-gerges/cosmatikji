<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function AddProduct()
    {
        return view('employee.products.create');
    }

    function StoreProduct(Request $request)
    {

         $validationData = $request->validate([

            'subcat_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            //'photo' => 'required',
            'description' => 'required',
         ],[
                'subcat_id.required' => 'يرجى ادخال رقم القسم الفرعي',
                'name.required' => 'يرجى كتابة اسم المنتج',
                'price.required'=> 'يرجى ادخال سعر المنتج',
                'description.required'=> 'يرجى كتابة وصف عن المنتج'
            ]);
            //$photo = $request->file('photo');

            /*$gen_name = hexdec(uniqid());
            $exe = strtolower($photo->getClientOriginalExtension());
            $full_name = $gen_name.'.'.$exe;
            $path = 'back-end/img/product/';
            $photo->move($path,$full_name);
            $last_name = $path.$full_name;*/
            Product::insert([
                'subcategory_id' => $request->subcat_id,
                'name' => $request->name,
                'price' => $request->price,
                //'image' => $last_name,
                'description' => $request->description,

                ]);
                $notification = array(
                    'message' => 'تم اضافة المنتج بنجاح',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
    }


    function ViewAllProducts()
    {
        $products = Product::paginate(6);
        return view('employee.products.view',compact('products'));

    }

    function EditProduct($id)
    {
        $product = Product::find($id);
        return view('employee.products.edit',compact('product'));
    }

    function UpdateProduct(Request $request ,$id)
    {
        $validationData = $request->validate([
            'subcat_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ],
        [
            'subcat_id.required' => 'يرجى ادخال رقم القسم الفرعي',
            'name.required' => 'يرجى كتابة اسم المنتج',
            'price.required'=> 'يرجى ادخال سعر المنتج',
            'description.required'=> 'يرجى كتابة وصف عن المنتج'
        ]);

        // $new_img = $request->file('photo');
        // $old_img = $request->old_photo;
        /*if(isset($new_img))
        {
            $gen_name = hexdec(uniqid());
            $exe = strtolower($new_img->getClientOriginalExtension());
            $full_name = $gen_name.'.'.$exe;
            $path = 'back-end/img/product/';
            $new_img->move($path,$full_name);
            $last_name = $path.$full_name;
            unlink($old_img);
            Product::where('id',$id)->update([
                'subcategory_id' => $request->subcat_id,
                'name' => $request->name,
                'price' => $request->price,
                'image' => $last_name,
                'description' => $request->description,
            ]);
            $notification = array(
                'message' => 'تم تعديل المنتج بنجاح',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);

        }*/
        //else
        //{
            Product::where('id',$id)->update([
                'subcategory_id' => $request->subcat_id,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
            ]);
            $notification = array(
                'message' => 'تم تعديل المنتج بنجاح',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        //}
    }


    function DeleteProduct($id)
    {
        Product::where('id',$id)->delete();
        $notification = array(
            'message' => 'تم حذف المنتج بنجاح',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }


    ///////////////////////////////////////////////////////////////////////////////////
    // Admin  Product Functions

    function AdminAddProduct()
    {
        return view('admin.products.create');
    }

    function AdminStoreProduct(Request $request)
    {

         $validationData = $request->validate([

            'subcat_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
         ],[
                'subcat_id.required' => 'يرجى ادخال رقم القسم الفرعي',
                'name.required' => 'يرجى كتابة اسم المنتج',
                'price.required'=> 'يرجى ادخال سعر المنتج',
                'description.required'=> 'يرجى كتابة وصف عن المنتج'
            ]);
            // $photo = $request->file('photo');

            // $gen_name = hexdec(uniqid());
            // $exe = strtolower($photo->getClientOriginalExtension());
            // $full_name = $gen_name.'.'.$exe;
            // $path = 'back-end/img/product/';
            // $photo->move($path,$full_name);
            // $last_name = $path.$full_name;
            Product::insert([
                'subcategory_id' => $request->subcat_id,
                'name' => $request->name,
                'price' => $request->price,
                // 'image' => $last_name,
                'description' => $request->description,

                ]);
                $notification = array(
                    'message' => 'تم اضافة المنتج بنجاح',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
    }


    function AdminViewAllProducts()
    {
        $products = Product::paginate(6);
        return view('admin.products.view',compact('products'));

    }

    function AdminEditProduct($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }

    function AdminUpdateProduct(Request $request ,$id)
    {
        $validationData = $request->validate([
            'subcat_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ],
        [
            'subcat_id.required' => 'يرجى ادخال رقم القسم الفرعي',
            'name.required' => 'يرجى كتابة اسم المنتج',
            'price.required'=> 'يرجى ادخال سعر المنتج',
            'description.required'=> 'يرجى كتابة وصف عن المنتج'
        ]);

        /*$new_img = $request->file('photo');
        $old_img = $request->old_photo;
        if(isset($new_img))
        {
            $gen_name = hexdec(uniqid());
            $exe = strtolower($new_img->getClientOriginalExtension());
            $full_name = $gen_name.'.'.$exe;
            $path = 'back-end/img/product/';
            $new_img->move($path,$full_name);
            $last_name = $path.$full_name;
            unlink($old_img);
            Product::where('id',$id)->update([
                'subcategory_id' => $request->subcat_id,
                'name' => $request->name,
                'price' => $request->price,
                'image' => $last_name,
                'description' => $request->description,
            ]);
            $notification = array(
                'message' => 'تم تعديل المنتج بنجاح',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);

        }*/
        //else
        //{
            Product::where('id',$id)->update([
                'subcategory_id' => $request->subcat_id,
                'name' => $request->name,
                'price' => $request->price,
                'description' => $request->description,
            ]);
            $notification = array(
                'message' => 'تم تعديل المنتج بنجاح',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);

       // }
    }


    function AdminDeleteProduct($id)
    {
        Product::where('id',$id)->delete();
        $notification = array(
            'message' => 'تم حذف المنتج بنجاح',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);

    }


    public function show(Product $product)
    {
        $cart = Cart::where('id',session()->get('cart'))->first();
        if(!request()->session()->has('cart') || !$cart)
        {
            $cart = Cart::create();
            config(['lifetime' => 43200,'expire_on_close' => true]);
            session(['cart' => $cart->id,'item' => []]);
        }
        $categories = Category::all();
        return view('products.show')->with('product',$product)
                                    ->with('categories',$categories)
                                    ->with('cart',$cart);
                                    
    }

}
