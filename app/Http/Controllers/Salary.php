<?php

namespace App\Http\Controllers;

use App\Models\Attendances;
use App\Models\Atts;
use App\Models\Employees;
use App\Models\Salarys;
use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Salary extends Controller
{
    function index()
    {
        return view('salary.index');
    }

    function create(Request $request)
    {
//        $extra=Settings::get('extra');
//        $discount=Settings::get('discount');
//        $extraDiff=round(((strtotime(Attendances::get('attendance_date')))-(strtotime(Atts::get('start_time'))))/3600, 1);
//        $discountDiff=Attendances::get('attendance_date');
//        dd($extraDiff);
//        $salary = $request->salary;
//        $diffTime = round((strtotime($request->endTime) - strtotime($request->startTime)) / 3600, 1);
//
//        $allHour = $diffTime * 30;
//        $salaryOfHour = $salary / $allHour;
        $salary=Employees::get()->value('salary');
        $starttime=Attendances::get()->value('attendance_date');
        $staticstarttime=Atts::get()->value('start_time');
        $staticendtime=Atts::get()->value('end_time');
        $endtime=Attendances::get()->value('check_out_date');
        $ExtradiffTime = round((strtotime($starttime) - strtotime($staticstarttime)) / 3600, 1);
        $DiscountdiffTime = round((strtotime($endtime) - strtotime($staticendtime)) / 3600, 1);
       $totalextra=$ExtradiffTime +  $DiscountdiffTime;
        $extra=Settings::get()->value('extra');
      //  $totalsalary=$extra * $salaryOfHour;

        $salaryPerhour= round((strtotime($endtime) - strtotime($starttime)) / 3600, 1);
        $totalsalary=$salary / $salaryPerhour *30;
       // dd($totalsalary);

        $month = Carbon::parse($request->month)->format('m');
        $year = Carbon::parse($request->month)->format('Y');

        $attends = Attendances::select('employee_id')->whereYear('created_at', $year)->whereMonth('created_at', $month)->get();
       //dd($attends);
        return view('salary.create', compact('attends','month','year'));
    }

    public function invoice($employee_id,$year,$month){
       //dd(auth()->user()->id);
        $employee=Employees::find($employee_id);
       // dd($employee);
        $attendDays = Attendances::where('employee_id',$employee_id)->whereYear('created_at', $year)->whereMonth('created_at', $month)->count();
        $dayMonth=Carbon::now()->month($month)->daysInMonth;
        //$dayOfYears=Carbon::now()->year($year)->daysInYear;
        //dd($dayMonth);
        $absenceDays = $dayMonth- Attendances::where('employee_id',$employee_id)->whereYear('created_at', $year)->whereMonth('created_at', $month)->count();

        return view('salary.invoice',compact('employee','attendDays','absenceDays'));

    }
}
