<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['blog_id', 'type'];

    const LIKE = 'like';
    const DISLIKE = 'dislike';

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}

