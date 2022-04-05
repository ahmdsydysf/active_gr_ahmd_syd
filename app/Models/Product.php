<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [

        'name_en',
        'description_en',
        'name_ar',
        'description_ar',
        'image',
        'pdf_en',
        'pdf_ar',
        'factory_id',
        'partner_id',
        'type_id',
        'active'

    ];

    public function factory()
    {
        return $this->belongsTo(Factory::class, 'factory_id', 'id');
    }
    public function partner()
    {
        return $this->belongsTo(Partner::class, 'partner_id', 'id');
    }
    public function product_type()
    {
        return $this->belongsTo(Product_type::class, 'type_id', 'id');
    }
}
