<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'user',
        'service_name',
        'service_type',
        'phone',
        'date_booking'
    ];

    // Relasi ke User menggunakan email
    public function getUser()
    {
        return $this->belongsTo(User::class, 'user', 'email');
    }
}
