<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    protected $fillable = [
        'preferences',
        'photo',
        'gender',
        'description',
        'id_user',
        'docs',
        'location'
    ];
}
