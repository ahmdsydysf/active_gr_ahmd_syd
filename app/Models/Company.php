<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [

        'overview_en',
        'overview_ar',
        'mission_en',
        'mission_ar',
        'vision_en',
        'vision_ar',
        'company_video'

    ];
}
