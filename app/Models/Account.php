<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;
     protected $fillable = [
        'account_mail',
        'email_account_id'
    ];

public function emailAccount(): BelongsTo {
    return $this->belongsTo(EmailAccount::class);
}
}
