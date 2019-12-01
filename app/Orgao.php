<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orgao extends Model
{
    use SoftDeletes;

    /**
     * Programas vinculados
     */
    public function programas()
    {
        return $this->hasMany('App\Programa');
    }
}
