<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\College;
use App\Models\Grade;
class Field extends Model
{
    protected $fillable = ['name', 'college_id', 'grade_id'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function college()
    {
        return $this->belongsTo(College::class);
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
