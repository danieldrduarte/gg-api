<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programa extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'orgao_id',
        'banca_id',
    ];
}
