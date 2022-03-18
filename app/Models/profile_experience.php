<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile_experience extends Model
{
    use HasFactory;
    protected $table = 'profile_experience';
    protected $fillable = [	
        'name',	
        'job',	
        'startdate',	
        'enddate',
        'companyname',
        'companylogo',	
        'jobdescript',
    ];
}
