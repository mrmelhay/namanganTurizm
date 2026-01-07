<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory, Translatable;

    protected $fillable = [
        'title',
        'description',
        'price',
        'duration',
        'transport_type',
        'route_list',
        'images',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'route_list' => 'array',
        'images' => 'array',
    ];
}
