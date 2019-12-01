<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Assunto extends Model
{
    use SoftDeletes;

    public function pai(){
        return $this->hasOne('App\Assunto','assunto_pai_id');
    }

    /**
     * Recupera do banco todas as arvores de assuntos contando as questões por orgão e banca
     * @param $orgao_id integer
     * @param $banca_id integer
     * @return array
     */
    public function getArvoresAssuntosByOrgaoAndBanca($orgao_id, $banca_id)
    {
        $results = DB::select("SELECT
                                        a.id,
                                        a.assunto_pai_id,
                                        a.ordem,
                                        a.nome,
                                        COUNT(q.id) AS total_questoes
                                    FROM
                                        grancursos.assuntos a
                                            LEFT JOIN
                                        questaos q ON a.id = q.assunto_id AND q.deleted_at IS NULL AND orgao_id = ? AND banca_id = ?
                                    WHERE
                                        a.deleted_at IS NULL AND a.ordem IS NOT NULL
                                    GROUP BY
                                        1,2,3,4
                                    ORDER BY
                                        a.ordem ASC",
                                    [$orgao_id, $banca_id]
        );

        return $results;
    }
}
