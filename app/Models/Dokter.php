<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $primaryKey = 'id_dokter';

    protected $fillable = [
        'id_dokter',
        'nama',
        'email',
        'password',
        'profile_picture',
        'email_verified_at',
    ];

    use HasFactory;
}
