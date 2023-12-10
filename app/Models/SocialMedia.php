<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'ig',
        'twitter',
        'fb',
        'github',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
