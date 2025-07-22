<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'start_date',
        'end_date',
    ];
    protected $casts = [
    'start_date' => 'datetime',
    'end_date' => 'datetime',
];

public function user()
    {
        return $this->belongsTo(User::class);
    }


}
