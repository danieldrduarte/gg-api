<?php

use Illuminate\Database\Seeder;

class AssuntosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assuntos')->insert([
            //Língua Portuguesa
            ['id' => '001', 'assunto_pai_id' => null,  'nome' => 'Língua Portuguesa'],
            ['id' => '002', 'assunto_pai_id' => '001', 'nome' => 'Língua Portuguesa e Ensino'],
            ['id' => '003', 'assunto_pai_id' => '001', 'nome' => 'Literatura'],
            ['id' => '004', 'assunto_pai_id' => '001', 'nome' => 'Redação oficial'],
            ['id' => '005', 'assunto_pai_id' => '004', 'nome' => 'Manual de Redação da Presidência da República'],
            ['id' => '006', 'assunto_pai_id' => '001', 'nome' => 'Usos da Norma Padrão Culta'],
            ['id' => '007', 'assunto_pai_id' => '001', 'nome' => 'Assuntos relacionados à revisão de texto'],
            ['id' => '008', 'assunto_pai_id' => '001', 'nome' => 'Fonologia'],
            ['id' => '009', 'assunto_pai_id' => '008', 'nome' => 'Fonemas e Letras'],
            ['id' => '010', 'assunto_pai_id' => '008', 'nome' => 'Classificação dos Fonemas'],
            ['id' => '011', 'assunto_pai_id' => '008', 'nome' => 'Vogais, Consoantes, Semivogais'],
            ['id' => '012', 'assunto_pai_id' => '008', 'nome' => 'Classificaçào das Vogais'],
            ['id' => '013', 'assunto_pai_id' => '008', 'nome' => 'Classificação das Consoantes'],
            ['id' => '014', 'assunto_pai_id' => '008', 'nome' => 'Encontro Vocálico'],
            ['id' => '015', 'assunto_pai_id' => '008', 'nome' => 'Ditongo'],
            ['id' => '016', 'assunto_pai_id' => '008', 'nome' => 'Tritongo'],
            ['id' => '017', 'assunto_pai_id' => '008', 'nome' => 'Hiato'],
            ['id' => '018', 'assunto_pai_id' => '008', 'nome' => 'Divisão Silábica'],
            ['id' => '020', 'assunto_pai_id' => '001', 'nome' => 'Ortografia'],
            ['id' => '021', 'assunto_pai_id' => '020', 'nome' => 'Alfabeto Português'],
            ['id' => '022', 'assunto_pai_id' => '020', 'nome' => 'Emprego de Letras'],
            ['id' => '023', 'assunto_pai_id' => '020', 'nome' => 'Uso do Apostrofo'],
            ['id' => '024', 'assunto_pai_id' => '020', 'nome' => 'Uso do Hífen'],
            ['id' => '025', 'assunto_pai_id' => '020', 'nome' => 'Uso das Iniciais Maiúsculas'],
            ['id' => '026', 'assunto_pai_id' => '020', 'nome' => 'Uso das iniciais Minusculas'],
            ['id' => '027', 'assunto_pai_id' => '020', 'nome' => 'Abreviação, Abreviaturas e Siglas'],
            ['id' => '028', 'assunto_pai_id' => '020', 'nome' => 'Acentuação Gráfica'],
            ['id' => '029', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Monossílabos'],
            ['id' => '030', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Vocábulos Oxítonos'],
            ['id' => '031', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Vocábulos Paroxítonos'],
            ['id' => '032', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Vocábulos Proparoxítonos'],
            ['id' => '033', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Ditongos Abertos'],
            ['id' => '034', 'assunto_pai_id' => '028', 'nome' => 'Acentuação do Hiato êe'],
            ['id' => '035', 'assunto_pai_id' => '028', 'nome' => 'Acentuação do Hiato ôo'],
            ['id' => '036', 'assunto_pai_id' => '028', 'nome' => 'Acentuação das Letras i e u'],
            ['id' => '037', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Vocábulos Proparoxítonos'],
            ['id' => '038', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Grupos qu e gu'],
            ['id' => '039', 'assunto_pai_id' => '028', 'nome' => 'Acentuação Diferencial'],

            //Análise das Demonstrações Contábeis
            ['id' => '040', 'assunto_pai_id' => null, 'nome' => 'Análise das Demonstrações Contábeis'],
            ['id' => '041', 'assunto_pai_id' => '040', 'nome' => 'Análise de liquidez'],
            ['id' => '042', 'assunto_pai_id' => '041', 'nome' => 'Análise do fluxo de caixa'],
            ['id' => '043', 'assunto_pai_id' => '041', 'nome' => 'Análise do ciclo operacional e análise do ciclo financeiro'],
            ['id' => '044', 'assunto_pai_id' => '041', 'nome' => 'Indicadores'],
            ['id' => '045', 'assunto_pai_id' => '040', 'nome' => 'Considerações de natureza não-financeira (qualitativa)'],
            ['id' => '046', 'assunto_pai_id' => '045', 'nome' => 'Limitações da análise por indicadores'],
            ['id' => '047', 'assunto_pai_id' => '045', 'nome' => 'Indicadores de mercado'],
            ['id' => '048', 'assunto_pai_id' => '040', 'nome' => 'Retorno sobre o capital empregado'],
            ['id' => '049', 'assunto_pai_id' => '048', 'nome' => 'Componentes'],
            ['id' => '050', 'assunto_pai_id' => '048', 'nome' => 'Retorno sobre o Ativo'],
            ['id' => '051', 'assunto_pai_id' => '048', 'nome' => 'Alavancagem financeira'],
            ['id' => '052', 'assunto_pai_id' => '048', 'nome' => 'Retorno sobre o Patrimônio Líquido'],
            ['id' => '053', 'assunto_pai_id' => '048', 'nome' => 'Ebitda'],
            ['id' => '054', 'assunto_pai_id' => '048', 'nome' => 'Indicadores'],
            ['id' => '055', 'assunto_pai_id' => '048', 'nome' => 'Economic Value Aded - EVA (Lucro Residual)'],
            ['id' => '056', 'assunto_pai_id' => '040', 'nome' => 'Análise da lucratividade'],
            ['id' => '057', 'assunto_pai_id' => '056', 'nome' => 'Análise da formação do resultado'],
            ['id' => '058', 'assunto_pai_id' => '056', 'nome' => 'Análise da Receita'],
            ['id' => '059', 'assunto_pai_id' => '056', 'nome' => 'Análise das despesas e análise da variação'],
            ['id' => '060', 'assunto_pai_id' => '056', 'nome' => 'Análise dos custos dos produtos vendidos/serviços prestados'],
            ['id' => '061', 'assunto_pai_id' => '056', 'nome' => 'Indicadores'],
            ['id' => '062', 'assunto_pai_id' => '040', 'nome' => 'Análise da estrutura de capital e da solvência'],
            ['id' => '063', 'assunto_pai_id' => '062', 'nome' => 'Indicadores e medidas de solvência'],
            ['id' => '064', 'assunto_pai_id' => '040', 'nome' => 'Informações extraídas das Notas Explicativas'],
            ['id' => '065', 'assunto_pai_id' => '040', 'nome' => 'Análise horizontal e vertical'],
            ['id' => '066', 'assunto_pai_id' => '065', 'nome' => 'Análise de tendências'],
            ['id' => '067', 'assunto_pai_id' => '065', 'nome' => 'Grupos de comparação'],

            //Música
            ['id' => '068', 'assunto_pai_id' => null, 'nome' => 'Música'],
            ['id' => '069', 'assunto_pai_id' => '068', 'nome' => 'Teoria Musical e Conceitos Fundamentais'],
            ['id' => '070', 'assunto_pai_id' => '068', 'nome' => 'Instrumentos Musicais'],
            ['id' => '071', 'assunto_pai_id' => '068', 'nome' => 'História da Música'],
            ['id' => '072', 'assunto_pai_id' => '068', 'nome' => 'Percepção Musical'],
            ['id' => '073', 'assunto_pai_id' => '068', 'nome' => 'Linguagem Musical'],
        ]);
    }
}

