<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'admin1';

    protected $fillable = [
        'title',
        'article',
        'tag',
        'star',
        'image',
    ];
}
