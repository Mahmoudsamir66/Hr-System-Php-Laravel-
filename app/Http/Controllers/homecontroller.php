<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    function index(){
        $employeeCount=Employees::count();
        return view('hr.index',compact('employeeCount'));
    }
}
