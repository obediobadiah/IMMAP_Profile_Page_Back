<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile_experience extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $fillable = [	
        'job',	
        'startdate',	
        'enddate',
        'companyname',
        'companylogo',	
        'jobdescript',
    ];
}
