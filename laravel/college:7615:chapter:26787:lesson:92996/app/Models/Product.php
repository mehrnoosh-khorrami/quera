<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    //one to one
    //هر محصول متعلق به یک کاربر است
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function rates()
    {
        return $this->morphMany(Rate::class, 'rateable');
    }






}
