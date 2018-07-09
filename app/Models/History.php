<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'status', 
        'test_id', 
        'user_id',
    ];
    
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
