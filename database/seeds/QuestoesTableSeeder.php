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
                    $questao->assunto_id = rand(1,73);
                    $questao->banca_id   = $banca;
                    $questao->orgao_id   = $orgao;
                    $questao->save();
                });
            }
        }
    }
}
