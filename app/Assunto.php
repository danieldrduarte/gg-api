<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assunto extends Model
{
    use SoftDeletes;

    public function pai(){
        return $this->hasOne('App\Assunto','assunto_pai_id');
    }

}
