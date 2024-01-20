<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatpawsy extends Model
{
    protected $fillable = [
        'ip_address',
        'hit_count'
    ];

    use HasFactory;
}
