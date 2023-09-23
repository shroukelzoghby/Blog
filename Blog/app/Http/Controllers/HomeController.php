<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // we connect to Model and find ths instance of id = 1
        $employee=Employee::find(1);

        return view('welcome',compact('employee'));
    }
}
