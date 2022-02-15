<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestifyPrayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'senderName',
        'senderEmail',
        'senderPhone',
        'senderAddress',
        'category',
        'details',
    ];
}
