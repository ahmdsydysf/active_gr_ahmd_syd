<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallary_category extends Model
{
    use HasFactory;
    protected $fillable = [

        'category_en',
        'category_ar',
        'description_en',
        'description_ar',
        'order'

    ];
}
