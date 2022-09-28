<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'address',
        'email',
        'phone',
        'date',
        'dateOfContract',
        'type',
        'startTime',
        'endTime',
        'salary',
        'nationalId',
        'nationality',
        'file',
        'salaryHour',
'ahmed'
    ];
}
