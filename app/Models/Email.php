<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'mails';
    protected $fillable = [
        'user_id' , 'subject' , 'to' , 'body' , 'status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

