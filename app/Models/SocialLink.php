<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $fillable = [
        'profile_id',
        'platform_name',
        'platform_url',
        'platform_icon',
        'is_visible',
        'display_order'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
