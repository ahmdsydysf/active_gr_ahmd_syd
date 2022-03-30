<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;

    protected $fillable = [

        'message_type_id',
        'message_date',
        'name',
        'mobile',
        'email',
        'subject',
        'message'

    ];
    public function message_type()

    {

        return $this->belongsTo(Message_Type::class);
    }
}
