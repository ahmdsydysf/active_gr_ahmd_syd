<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_type extends Model
{
    use HasFactory;


    protected $fillable = [

        'message_type'

    ];

    public function messages()

    {

        return $this->hasMany(Messages::class);
    }
}
