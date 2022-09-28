<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salarys extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'phone',
        'salary',
        'attendance_day',
        'absent_day',
        'overtime_hour',
        'discount_hour',
        'extra',
        'discount',
        'total',

    ];
}
