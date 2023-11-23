<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $fillable = [
        'stream_id',
        'name',
    ];

    public function stream()
    {
        return $this->belongsTo(Stream::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
