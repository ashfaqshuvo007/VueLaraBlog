<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $fillable = [
        'name', 'email', 'website', 'message'
    ];


    public function comments()
    {
        $this->hasMany(Comment::class);
    }
    public function likes()
    {
        $this->hasMany(Like::class);
    }
}
