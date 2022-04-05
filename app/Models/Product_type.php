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
        'order'

    ];

    public function product_category()
    {
        return $this->belongsTo(Product_category::class, 'category_id', 'id');
    }
}
