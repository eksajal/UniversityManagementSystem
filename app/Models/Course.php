<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [

        'description',
        'title'

    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function faculties()
    {
        return $this->hasMany(Faculty::class, 'course_id');
    }
}
