<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body'];

    public function comments()
    {
        return $this->hasMany(Comment::class);

    }
    public function likes()
    {
        return $this->hasMany(Like::class)->where('type', Like::LIKE);
    }

    public function dislikes()
    {
        return $this->hasMany(Like::class)->where('type', Like::DISLIKE);
    }
}
