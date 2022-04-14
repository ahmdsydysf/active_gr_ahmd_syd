<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $fillable = [

        'name_en',
        'name_ar',
        'logo',
        'description_en',
        'description_ar',
        'website',
        'facebook',
        'twitter',
        'instagram',
        'order'

    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'type_id');
    }
}
