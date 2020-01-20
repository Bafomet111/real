<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /** Отказ от обработки полей по умолчанию
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Получить все модели, обладающие commentable.
     */
    public function commentable()
    {
        return $this->morphTo();
    }
}




