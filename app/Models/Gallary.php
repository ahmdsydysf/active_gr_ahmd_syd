<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
    use HasFactory;
    protected $fillable = [

        'path',
        'type',
        'category_id',
        'description_en',
        'description_ar',
        'order',
        'active'

    ];

    public function gallary_category()
    {
        return $this->belongsTo(Gallary_category::class, 'category_id', 'id');
    }
}
