<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Email extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'subject',
        'content',
        'email_account_id'
    ];

    public function emailAccount() {
    return $this->belongsTo(EmailAccount::class);
}
}
