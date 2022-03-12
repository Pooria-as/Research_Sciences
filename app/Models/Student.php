<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Field;
use App\Models\Grade;

class Student extends Model
{
    protected $fillable = [
        'name',
        'family',
        'grade_id',
        'field_id',
        'image',
        'birthdate',
        'national_code',
        'Gender',
    ];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function field()
    {
        return $this->belongsTo(Field::class);
    }
}
