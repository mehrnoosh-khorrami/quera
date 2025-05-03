<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
