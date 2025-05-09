<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'subtitle',
        'image',
        'category',
        'content',
    ];

    // Quan hệ với User (nếu có)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
