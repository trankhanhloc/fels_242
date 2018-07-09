<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $fillable = [
        'vietnamese_meaning',
        'english_meaning',
        'lesson_id',
    ];
    public function lessons()
    {
        return $this->belongsTo(Lesson::class);
    }
}
