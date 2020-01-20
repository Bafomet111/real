<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /** Отказ от обработки полей по умолчанию
     * @var bool
     */
    public $timestamps = false;

    /**
     * Получить все комментарии статьи.
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }
}
