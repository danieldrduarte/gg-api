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
//        1	EBSERH
//        2	STJ
//        3	DPF
//        4	PGE/PE
//        5	PGR
//        6	OAB

//1	Instituto Quadrix
//2	FCC
//3	CESPE/CEBRASPE
//4	FGV
//5	VUNESP


        factory(App\Questao::class, 10)->create([
            'assunto_id' => rand(1,73),
            'banca_id'   => rand(1,5),
            'orgao_id'   => rand(1,6),
        ]);
    }
}
