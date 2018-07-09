<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'category_id', 
        'title', 
        'content', 
        'picture', 
        'number_of_lesson',
  ];
  
  public function lessons()
  {
      return $this->hasMany(Lesson::class, 'course_id', 'id');
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
