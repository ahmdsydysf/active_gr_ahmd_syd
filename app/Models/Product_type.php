<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;
    protected $fillable = [

        'type_en',
        'type_ar',
        'category_id',
        'order',
        'image',
        'description_en',
        'description_ar',
    ];

    public function product_category()
    {
        return $this->belongsTo(Product_category::class, 'category_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'type_id');
    }
}
