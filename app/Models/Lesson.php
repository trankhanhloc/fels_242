<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'title', 
        'content', 
        'category_id', 
        'user_id', 
        'point', 
        'number_of_word',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class,'test_id','id');
    }

    public function words()
    {
        return $this->hasMany(Word::class,'lesson_id','id');
    }

    public function answers()
    {
        return $this->hasMany(Word::class,'lesson_id','id');
    }
}
}
