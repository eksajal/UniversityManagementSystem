<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'student_number',
        'guardian_number',
        'student_id',
        'department',
        'address',
        'student_img',
    ];

    public function department(){
        return $this->belongsTo(Department::class, 'department_id');
    }


}
