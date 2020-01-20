<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Получить все модели, обладающие commentable.
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}




