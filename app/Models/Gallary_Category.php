<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallary_Category extends Model
{
    use HasFactory;
    protected $fillable = [

        'category_en',
        'category_ar',
        'decription_en',
        'decription_ar',
        'order'

    ];
}
