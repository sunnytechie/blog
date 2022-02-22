<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_first_name',
        'user_last_name',
        'user_phone',
        'user_address',
        'user_city',
        'user_state',
        'user_zip',
        'user_country',
        'user_thumbnail',
        'user_occupation_title',
        'user_company',
        'user_facebook',
        'user_twitter',
        'user_instagram',
        'user_linkedin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
