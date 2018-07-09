<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'gender', 
        'address', 
        'birthday', 
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function follows()
    {
        return $this->hasMany(Follow::class,'user_id','id');
    }

    public function histories()
    {
        return $this->hasMany(History::class,'user_id','id');
    }
    
    public function lessons()
    {
        return $this->hasMany(Lesson::class,'user_id','id');
    }

    public function results()
    {
        return $this->hasMany(Result::class,'user_id','id');
    }
}
