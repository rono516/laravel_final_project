<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'course_students');
    }

//    public function coursestudent(): BelongsTo
//    {
//        return $this->belongsTo(CourseStudent::class);
//    }
}
