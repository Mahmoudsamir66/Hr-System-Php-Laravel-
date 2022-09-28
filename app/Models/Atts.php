<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atts extends Model
{
    use HasFactory;
    protected $fillable=['name',
        'start_time',
        'end_time',
        'user_id',
    ];
    public function users()
    {
     return $this->belongsTo(User::class,'user_id','id');
    }
}
