<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [

        'dept_name',

    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'department_id'); // 'department_id' is the foreign key in courses table
    }

    public function faculties()
    {
        return $this->hasMany(Faculty::class, 'dept_id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'department_id'); // Assuming 'department_id' is the foreign key in students table
    }

}
