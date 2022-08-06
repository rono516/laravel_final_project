<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'title',
        'description',
        'active'

    ];

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }

    public function students(){
        return $this->belongsToMany(User::class, 'progress_student');
    }
}
