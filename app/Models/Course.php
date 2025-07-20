<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
    ];
    protected $casts = [
    'start_date' => 'datetime',
    'end_date' => 'datetime',
];

    // public function students()
    // {
    //     return $this->belongsToMany(Student::class, 'course_student');
    // }

    // public function instructors()
    // {
    //     return $this->belongsToMany(Instructor::class, 'course_instructor');
    // }
}
