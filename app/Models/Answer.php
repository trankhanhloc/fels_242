<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
    	'correct_answer', 
        'question_id', 
        'lesson_id', 
    ];
    public function lesson()
    {
    	return $this->belongsTo(Lesson::class);
    }

    public function question()
    {
    	return $this->belongsTo(Question::class);
    }
}
