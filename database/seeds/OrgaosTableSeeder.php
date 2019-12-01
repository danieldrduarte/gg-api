<?php

use Illuminate\Database\Seeder;

class OrgaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orgaos')->insert([
            ['id' => '001', 'sigla' => 'EBSERH',  'nome' => 'IEmpresa Brasileira de Serviços Hospitalares - EBSERH '],
            ['id' => '002', 'sigla' => 'STJ',  'nome' => 'Superior Tribunal de Justiça '],
            ['id' => '003', 'sigla' => 'DPF',  'nome' => 'Departamento de Polícia Federal'],
            ['id' => '004', 'sigla' => 'PGE/PE',  'nome' => 'Procuradoria Geral do Estado'],
            ['id' => '005', 'sigla' => 'PGR',  'nome' => 'Procuradoria Geral da República'],
            ['id' => '006', 'sigla' => 'OAB',  'nome' => 'Ordem dos Advogados do Brasil'],
        ]);
    }
}
