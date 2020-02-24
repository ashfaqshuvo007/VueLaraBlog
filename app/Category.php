<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PDO;

class Category extends Model
{
    protected $fillable = [
        'cat_name', 'published'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
