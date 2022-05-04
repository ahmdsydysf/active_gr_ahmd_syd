<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team_member extends Model
{
    use HasFactory;
    protected $fillable = [

        'name_en',
        'name_ar',
        'position_en',
        'position_ar',
        'order',
        'active',
        'image',
        'facebook',
        'twitter',
        'instagram'
    ];
}
