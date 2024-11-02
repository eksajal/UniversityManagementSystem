<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'dept_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

}
