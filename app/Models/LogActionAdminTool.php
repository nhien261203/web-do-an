<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActionAdminTool extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin', 
        'action', 
        'data', 
        'time', 
        'method', 
        'route', 
        'ip'
    ];

    // Thiết lập quan hệ với model User
    public function user()
    {
        return $this->belongsTo(User::class, 'admin');  // 'admin' là khóa ngoại
    }
}
