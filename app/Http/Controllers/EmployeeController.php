<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class EmployeeController extends Controller
{
    function HomePage()
    {
        return redirect()->route('employee.dashboard');
    }

    function EmployeeProfile()
    {
        $employee = User::find(Auth::id());
        return view('employee.profile.myprofile' ,compact('employee'));
    }

    function EmployeeUpdateProfile(Request $request)
    {
        $notification = array(
            'message' => 'تم تعديل بيانات الحساب  بنجاح',
            'alert-type' => 'warning'
        );
        User::where('id',Auth::id())->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect()->back()->with($notification);
    }

    function AddPhoto()
    {
        $employee = User::find(Auth::user()->id);
        return view('employee.profile.add_photo' ,compact('employee'));
    }

    function StorePhoto(Request $request)
    {
        $new_img = $request->file('photo');
        $old_img = $request->old_photo;
        if($old_img)
        {
            $gen_name = hexdec(uniqid());
            $exe = strtolower($new_img->getClientOriginalExtension());
            $full_name = $gen_name.'.'.$exe;
            $path = 'back-end/img/employee/';
            $new_img->move($path,$full_name);
            $last_name = $path.$full_name;
            unlink($old_img);
            User::where('id',Auth::id())->update([
                'profile_photo_path' => $last_name
            ]);
            $notification = array(
                'message' => 'تم اضافة الصورة بنجاح',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);

        }else{
            $gen_name = hexdec(uniqid());
            $exe = strtolower($new_img->getClientOriginalExtension());
            $full_name = $gen_name.'.'.$exe;
            $path = 'back-end/img/employee/';
            $new_img->move($path,$full_name);
            $last_name = $path.$full_name;
            User::where('id',Auth::id())->update([
                'profile_photo_path' => $last_name
            ]);
            $notification = array(
                'message' => 'تم اضافة الصورة بنجاح',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);

        }
}

    function ChangePassword()
    {
    return view('employee.profile.changepassword');
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
            $employee = User::find(Auth::id());
            $employee->password = Hash::make($request->n_pass);
            $employee->save();
            Auth::logout();
            $request->session()->invalidate();
            $notification = array(
                'message' => 'تم تعديل كلمة المرور بنجاح',
                'alert-type' => 'warning'
            );
            return redirect()->route('login')->with($notification);
        }else
        {
            $notification = array(
                'message' => 'كلمة المرور الحالية غير صحيحة يرجى التأكد',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }


}

}
