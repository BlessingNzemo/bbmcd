<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'full_name',
        'bio',
        'profile_picture',
        'cover_picture',
        'phone',
        'location',
        'is_public'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function galleryImages()
    {
        return $this->hasMany(GalleryImage::class);
    }

    public function socialLinks()
    {
        return $this->hasMany(SocialLink::class);
    }
}
