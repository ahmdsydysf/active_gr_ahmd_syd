<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_type extends Model
{
    use HasFactory;


    protected $fillable = [

        'message_type_en',
        'message_type_ar'

    ];

    public function messages()

    {

        return $this->hasMany(Messages::class);
    }
}
