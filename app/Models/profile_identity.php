<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile_identity extends Model
{
    use HasFactory;
    protected $table = 'profile_identity';
    protected $fillable = [	
        'name',	
        'age',	
        'image',
    ];
}
