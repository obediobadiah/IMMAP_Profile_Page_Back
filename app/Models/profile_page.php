<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile_page extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $fillable = [	
        'name',	
        'age',	
        'job',	
        'startdate',	
        'enddate',
        'companyname',	
        'companylogo',	
        'jobdescript',	
        'image',
    ];

}
