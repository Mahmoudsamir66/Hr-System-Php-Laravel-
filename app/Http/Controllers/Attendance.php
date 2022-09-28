<?php

namespace App\Http\Controllers;

use App\Models\Attendances;
use App\Models\Atts;
use App\Models\Employees;
use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Attendance extends Controller
{
    function create()
    {
        $items = Attendances::get();
//        dd($items);
        $Employees = Employees::get();
        return view('att.create', compact('items', 'Employees'));
    }

    function store(Request $request)
    {


      $day=Carbon::parse($request->date)->format('l');
       $start_time=Atts::where('name',$day)->value('start_time');
       $end_timee=Atts::where('name',$day)->value('end_time');
        $diffStart =round((strtotime($request->attendance_date) - strtotime($start_time))/3600, 1);
        $diffEnd =round((strtotime($request->check_out_date) - strtotime($end_timee))/3600, 1);
       $finalDiff=$diffEnd-$diffStart;



        $salary=Employees::select('salary')->get();
//        $totalsalary=$salary/$diffEnd;
//        dd($totalsalary);
        Attendances::updateOrCreate([
            'employee_id' => $request->employee_id,
            'date' => $request->date],[
            'attendance_date' => $request->attendance_date,
            'check_out_date' => $request->check_out_date,
            'startHour' => $diffStart,
            'endHour' => $diffEnd,
        ]);
        // $Employs=Employees::where('name',$request->name)->get();
        // dd($request);
        return redirect()->back();
    }

    function delete(Attendances $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
