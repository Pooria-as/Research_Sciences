<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'name',
        'family',
        'image',
        'degree',
        'Gender',
        'filed',
        'email',
        'birth_date',
        'Univercity_name',
        'about_me',
    ];
}
