<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'image_path',
        'title',
    ];

    protected $casts = [
        'title' => 'array',
    ];
}
