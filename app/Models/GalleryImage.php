<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $fillable = [
        'profile_id',
        'image_path',
        'caption',
        'is_visible',
        'order'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
