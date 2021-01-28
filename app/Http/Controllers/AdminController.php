<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function CreateEmployee()
    {
        return view('admin.emp.create');
    }

    function HomePage()
    {
        return view('admin.index');
    }
}
