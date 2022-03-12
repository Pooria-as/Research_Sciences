<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Field;
class College extends Model
{
    protected $fillable = ['name', 'image', 'description', 'phone'];

    public function Field()
    {
        return $this->hasMany(Field::class);
    }
}
