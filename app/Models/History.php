<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function posts() {
        return $this->HasMany(Post::class);
    }



    use HasFactory;
    protected $fillable = [
        'post_id',
         'user_id',
         'post_body',
        'post_title',
        'post_thumbnail',
    ];
}
