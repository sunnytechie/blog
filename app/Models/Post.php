<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function history()
    {
        return $this->belongsTo(History::class);
    }

    protected $fillable = [
        'thumbnail',
        'sound',
        'title',
        'body',
        'category',
        'event_location',
        'display_date',
        'url',
        'memory_verse',
        'prayer',
        'author',
        'slug',
        'tag',
    ];
}
