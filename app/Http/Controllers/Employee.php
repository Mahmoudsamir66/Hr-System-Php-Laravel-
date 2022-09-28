<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\get;

class Employee extends Controller
{
    function create()
    {

        return view('employee.create');
    }

    function store(Request $request)
    {
        $salary = $request->salary;
        $diffTime = round((strtotime($request->endTime) - strtotime($request->startTime)) / 3600, 1);
        $allHour = $diffTime * 30;
        $salaryOfHour = $salary / $allHour;
//        $extra=Settings::get()->value('extra');
//        $totalsalary=$extra * $salaryOfHour;
//         dd($totalsalary);
        Employees::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'dateOfContract' => $request->dateOfContract,
            'type' => $request->type,
            'startTime' => $request->startTime,
            'endTime' => $request->endTime,
            'salary' => $request->salary,
            'salaryHour' => $salaryOfHour,
            'nationalId' => $request->nationalId,
            'nationality' => $request->nationality,
            'file' => $request->file->store('emp/upload'),

        ]);
        return redirect()->back();

    }

    function index()
    {    $items = Employees::orderBy('id', 'DESC')->paginate(1);
       // $last2 = DB::table('items')->orderBy('id', 'DESC')->first();
       // $items = Employees::get();
        //dd($items);
        return view('employee.index', compact('items'));
    }
}
