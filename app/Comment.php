<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'owner_id', 'post_id'
    ];

    public function subcribers()
    {
        $this->belongsTo(Subscriber::class);
    }
    public function posts()
    {
        $this->belongsTo(Post::class);
    }
}
