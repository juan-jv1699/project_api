<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesPublication extends Model
{
    protected $fillable = [
        'id_publication',
        'img01',
        'img02',
        'img03',
        'img04'
    ];
}
