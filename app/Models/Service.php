<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [

        'title_en',
        'service_en',
        'text_en',
        'text_ar',
        'image',
        'video',
        'post_date',
        'pdf_en',
        'pdf_ar',
        'service_type_id',
        'order',
        'active'

    ];


    public function serevice_type()
    {
        return $this->belongsTo(Service_type::class, 'service_type_id', 'id');
    }
}
