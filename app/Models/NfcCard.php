<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NfcCard extends Model
{
    protected $fillable = [
        'card_number',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
