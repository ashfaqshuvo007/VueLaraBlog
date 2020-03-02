<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'cat_id', 'author_id', 'title', 'excerpt', 'desc', 'media', 'published'
    ];

    public function categories()
    {
        $this->belongsTo(Category::class);
    }

    public function subscribers()
    {
        $this->belongsTo(Subscriber::class);
    }

    public function comments()
    {
        $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function likes()
    {
        $this->hasMany(Like::class);
    }
}
