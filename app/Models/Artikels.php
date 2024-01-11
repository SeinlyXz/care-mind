<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikels extends Model
{
    protected $fillable = ['title', 'content', 'is_published', 'author_id'];

    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Redakturs::class, 'author_id');
    }
}
