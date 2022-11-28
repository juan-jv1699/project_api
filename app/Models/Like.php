<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'publication_id',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function publication()
    {
        return $this->belongsToMany(Role::class);
    }

    public function user()
    {
        return $this->hasOne(UserData::class);
    }
}
