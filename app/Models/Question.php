<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question',
        'test_id',
    ];

    public function answers()
    {
        return $this->hasOne(Answer::class,'question_id','id');
    }
    
    public function lessons()
    {
        return $this->belongsTo(Lesson::class);
    }
}
