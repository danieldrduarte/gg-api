<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programa extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'sigla',
        'orgao_id',
        'banca_id',
    ];

    public function banca(){
        return $this->belongsTo('App\Banca')->select(array('id', 'nome'));
    }

    public function orgao(){
        return $this->belongsTo('App\Orgao')->select(array('id', 'sigla', 'nome'));
    }
}
