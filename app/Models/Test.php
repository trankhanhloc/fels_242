<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'exam_time', 
        'exam_date', 
        'lesson_id', 
        'point_need_pass',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class,'test_id','id');
    }

    public function results()
    {
        return $this->hasMany(Result::class,'test_id','id');
    }

    public function histories()
    {
        return $this->hasMany(History::class,'test_id','id');
    }
}
