<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'name',
        'description',
        'stars',
        'images',
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'images' => 'array',
    ];
}
