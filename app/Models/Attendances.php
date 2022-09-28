<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'date', 'attendance_date', 'check_out_date','startHour','endHour'];
    public function employes(){
        return $this->belongsTo(Employees::class,'employee_id','id');
    }
}
