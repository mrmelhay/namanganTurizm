<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class HeroSlide extends Model
{
    use Translatable;

    protected $fillable = ['image_path', 'title', 'subtitle', 'link', 'button_text', 'order', 'is_active'];

    protected $casts = [
        'title' => 'array',
        'subtitle' => 'array',
        'button_text' => 'array',
        'is_active' => 'boolean'
    ];
}
