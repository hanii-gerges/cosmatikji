<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MessageController extends Controller
{

    function contact()
    {
        return view('front.contactus');
    }

    function Store(Request $request)
    {
        $validationData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'userSubject' => 'required',
            'userEmail' => 'required',
            'userMessage' => 'required',
        ],
    [
        'firstName.required' => 'يرجى ادخال الاسم الاول',
        'lastName.required' => 'يرجى ادخال الاسم الاخير',
        'userSubject.required' => 'يرجى كتابة الموضوع',
        'userEmail.required' => 'يرجى ادخال ايميل المستخدم',
        'userMessage.required' => 'يرجى كتابة الرسالة',
    ]);

    Message::insert([
        'first_name' => $request->firstName,
        'last_name' => $request->lastName,
        'subject' => $request->userSubject,
        'email' => $request->userEmail,
        'message' => $request->userMessage,
        'created_at' => Carbon::now()
    ]);
        $notifiction = array(
            'alert-type' => 'info',
            'message' => 'تم ارسال رسالتك بنجاح'
        );

    return redirect()->back()->with($notifiction);

    }

    function View()
    {
         $messages = Message::latest()->paginate(5);
        //$messages = DB::table('messages')->orderByDesc('id');
        // $messages = Message::first();

        return view('admin.message.view', compact('messages'));
    }

    function Delete($id)
    {
        Message::where('id',$id)->delete();

        $notifiction = array(
            'alert-type' => 'error',
            'message' => 'تم حذف الرسالة بنجاح'
        );

    return redirect()->back()->with($notifiction);

    }

}
