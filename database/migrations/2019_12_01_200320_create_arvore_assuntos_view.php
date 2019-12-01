<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArvoreAssuntosView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW arvoreAssuntosView AS
                            SELECT
                                a.id,
                                a.assunto_pai_id,
                                a.ordem,
                                a.nome,
                                COUNT(q.id) AS total_questoes
                            FROM
                                grancursos.assuntos a
                            LEFT JOIN
                                questaos q ON a.id = q.assunto_id AND q.deleted_at IS NULL
                            WHERE
                                a.deleted_at IS NULL AND a.ordem IS NOT NULL
                            GROUP BY
                                1,2,3,4
                            ORDER BY
                                a.ordem ASC");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::statement("DROP VIEW companiesView IF EXISTS;");
    }
}
