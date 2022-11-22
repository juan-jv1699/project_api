<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $fillable = [
        'preferences',
        'photo',
        'gender',
        'description',
        'user_id',
        'docs',
        'location'
    ];
}
