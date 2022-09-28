<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Settings;
use Illuminate\Http\Request;

class Setting extends Controller
{
   function create(){
       return view('setting.create');
   }
   function store(Request $request){
       $extra=$request->extra;
//       dd($extra);
       $salary=Employees::get('salary');

      // dd($salary);
       Settings::create([

       'extra'=>$request->extra,
           'discount'=>$request->discount,
           'holidays'=>$request->holidays,
       ]);
       return redirect()->back();
   }
}
