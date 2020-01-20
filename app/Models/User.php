<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** Отказ от обработки полей по умолчанию
     * @var bool
     */
    public $timestamps = false;

    public function roles()
    {
//        return $this->belongsToMany("App\Models\Role", null, "user_id");
    }

}
