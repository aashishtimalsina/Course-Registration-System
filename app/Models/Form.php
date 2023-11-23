<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'university_id',
        'college_id',
        'college_email',
        'name',
        'address',
        'phone',
        'stream',
        'semester',
        'courses',
    ];
}
