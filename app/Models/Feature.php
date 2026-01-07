<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

class Feature extends Model
{
    use Translatable;

    protected $fillable = ['icon', 'title', 'description', 'order'];

    protected $casts = [
        'title' => 'array',
        'description' => 'array'
    ];
}
