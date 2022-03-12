<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Field;
class Grade extends Model
{
    protected $fillable = ['name'];

    protected $dates = ['created_at', 'updated_at'];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}
