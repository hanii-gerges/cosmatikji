<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Product;





class AdminController extends Controller
{
    function CreateEmployee()
    {
        return view('admin.emp.create');
    }

    function HomePage()
    {

        return redirect()->route('admin.dashboard');
    }



    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        return redirect()->route('login');
    }

    function StoreEmployee(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required',
            'email' => 'required |email|unique:users',
            'password' => 'required |min:8',
            'utype' => 'required'
        ]);

        $data = array();
        $data ['name'] = $request->name;
        $data ['email'] = $request->email;
        $data ['password'] = Hash::make($request->password);
        $data ['utype'] = $request->utype;
        DB::table('users')->insert($data);
        $notification = array(
            'message' => 'تم اضافة العضو بنجاح',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


    }

    function ViewAllEmp()
    {
        $employees = User::where('utype' , 'employee')->latest()->paginate(4);
        return view('admin.emp.view_all' , compact('employees'));
    }

    function EditEmpByAdmin($id)
    {
        $employee = User::find($id);
        return view('admin.emp.edit',compact('employee'));
    }

    function UpdateEmpByAdmin(Request $request , $id)
    {
        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'utype' => $request->utype,
        ]);
        $notification = array(
            'message' => 'تم تعديل بيانات الموظف بنجاح',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }

    function DeleteEmp($id)
    {
        $notification = array(
            'message' => 'تم حذف الموظف بنجاح',
            'alert-type' => 'error'
        );
        DB::table('users')->where('id',$id)->delete();
        return redirect()->back()->with($notification);
    }

    function AddPhoto()
    {
        $admin = User::find(Auth::id());
        return view('admin.profile.add_photo',compact('admin'));
    }

    function StorePhoto(Request $request)
    {
        $old_image = $request->old_photo;
        if($old_image)
        {
            $image = $request->file('photo');
        $gen_name = hexdec(uniqid());
        $ext = strtolower($image->getClientOriginalExtension());
        $full_name = $gen_name.'.'.$ext;
        $path = 'back-end/img/';
        $image->move($path,$full_name);
        $last_image = $path.$full_name;
        unlink($old_image);
        User::where('id',Auth::user()->id)->update([
            'profile_photo_path' => $last_image
        ]);
        $notification = array(
            'message' => 'تم اضافة الصورة بنجاح',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
        }else{
            $image = $request->file('photo');
        $gen_name = hexdec(uniqid());
        $ext = strtolower($image->getClientOriginalExtension());
        $full_name = $gen_name.'.'.$ext;
        $path = 'back-end/img/';
        $image->move($path,$full_name);
        $last_image = $path.$full_name;
        User::where('id',Auth::user()->id)->update([
            'profile_photo_path' => $last_image
        ]);
        $notification = array(
            'message' => 'تم اضافة الصورة بنجاح',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
        }

    }



    function AdminProfile()
    {
        if(Auth::user())
        {
        $admin = User::find(Auth::user()->id);
        return view('admin.profile.my_profile' ,compact('admin'));
        }

    }

    function UpdateProfile(Request $request)
    {
        /* $new_image = $request->file('new_img');
        if(!empty($new_image)){
        $old_image = $request->old_img;
        $gen_name = hexdec(uniqid());
        $ext = strtolower($new_image->getClientOriginalExtension());
        $full_name = $gen_name.'.'.$ext;
        $path = 'back-end/img/';
        $new_image->move($path,$full_name);
        $last_image = $path.$full_name;
        unlink($old_image);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile_photo_path = $last_image;
        $user->save();
        return redirect()->back('success' , 'تم تعديل الحساب بنجاح');
        }else
        {
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            return redirect()->back('success' , 'تم تعديل الحساب بنجاح');
        }
        */
        if(Auth::user())
        {
            User::find(Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email

            ]);
            $notification = array(
                'message' => 'تم تعديل بيانات الحساب بنجاح',
                'alert-type' => 'warning'
            );
            return redirect()->back()->with($notification);
        }else
        {
            return redirect()->route('login');
        }


    }

    function ChangePassword()
    {
        return view('admin.profile.change_password');
    }

    function UpdatePassword(Request $request)
    {

        $validationData = $request->validate([
            'c_pass' => 'required|min:8',
            'n_pass' => 'required|min:8',
            'confirm' => 'required|same:n_pass'
        ]);
        $old_pass = Auth::user()->password;
        if(Hash::check($request->c_pass, $old_pass))
        {
            $new_pass = Hash::make($request->n_pass);
            $admin = User::find(Auth::id());
            $admin->password = $new_pass;
            $admin->save();
            Auth::logout();
            $request->session()->invalidate();
            $notification = array(
                'message' => 'تم تعديل كلمة المرور بنجاح',
                'alert-type' => 'warning'
            );
            return redirect()->route('login')->with($notification);
        }else{
            $notification = array(
                'message' => 'كلمة المرور الحالية غير صحيحة يرجى التأكد',
                'alert-type' => 'error'
            );
           return redirect()->back()->with($notification);
        }

    }





}
