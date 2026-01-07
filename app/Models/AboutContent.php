<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'title',
        'content',
        'image',
    ];

    protected $casts = [
        'title' => 'array',
        'content' => 'array',
    ];
}
