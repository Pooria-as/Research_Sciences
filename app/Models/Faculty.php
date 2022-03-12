<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillble = [
        'name',
        'family',
        'image',
        'degree',
        'email',
        'birth_date',
        'Univercity_name',
        'about_me',
    ];
}
