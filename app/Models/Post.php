<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * Получить все комментарии статьи.
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
