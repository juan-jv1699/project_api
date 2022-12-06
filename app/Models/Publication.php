<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
