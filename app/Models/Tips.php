<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tips extends Model
{
    use HasFactory;

    protected $table = 'tips';
    protected $fillable = [
        'id',
        'tips_name',
        'age_category',
        'image',
    ];
}
