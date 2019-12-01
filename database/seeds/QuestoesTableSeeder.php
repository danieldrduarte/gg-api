<?php

use Illuminate\Database\Seeder;

class QuestoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($banca = 1; $banca <= 5; $banca++){
            for($orgao = 1; $orgao <= 6; $orgao++) {
                factory(App\Questao::class, 1000)->create()->each(function ($questao) use ($banca, $orgao){

                    $assunto = 0;
                    while (in_array($assunto,[0,1,40,68])){
                        $assunto = rand(1,73);
                    }

                    $questao->assunto_id = $assunto;
                    $questao->banca_id   = $banca;
                    $questao->orgao_id   = $orgao;
                    $questao->save();
                });
            }
        }
    }
}
