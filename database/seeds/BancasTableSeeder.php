<?php

use Illuminate\Database\Seeder;

class BancasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bancas')->insert([
            ['id' => '001', 'sigla' => 'Instituto Quadrix',  'nome' => 'Instituto Quadrix'],
            ['id' => '002', 'sigla' => 'FCC',  'nome' => 'Fundação Carlos Chagas'],
            ['id' => '003', 'sigla' => 'CESPE/CEBRASPE',  'nome' => 'Centro de Seleção e de Promoção de Eventos UnB'],
            ['id' => '004', 'sigla' => 'FGV',  'nome' => 'Fundação Getúlio Vargas'],
            ['id' => '005', 'sigla' => 'VUNESP',  'nome' => 'Fundação para o Vestibular da Universidade Estadual Paulista'],
        ]);
    }
}
