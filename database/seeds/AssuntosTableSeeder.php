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
            ['id' => '001', 'ordem' => '001', 'assunto_pai_id' => null,  'nome' => 'Língua Portuguesa'],
            ['id' => '002', 'ordem' => '001001', 'assunto_pai_id' => '001', 'nome' => 'Língua Portuguesa e Ensino'],
            ['id' => '003', 'ordem' => '001002', 'assunto_pai_id' => '001', 'nome' => 'Literatura'],
            ['id' => '004', 'ordem' => '001003', 'assunto_pai_id' => '001', 'nome' => 'Redação oficial'],
            ['id' => '005', 'ordem' => '001003001', 'assunto_pai_id' => '004', 'nome' => 'Manual de Redação da Presidência da República'],
            ['id' => '006', 'ordem' => '001004', 'assunto_pai_id' => '001', 'nome' => 'Usos da Norma Padrão Culta'],
            ['id' => '007', 'ordem' => '001005', 'assunto_pai_id' => '001', 'nome' => 'Assuntos relacionados à revisão de texto'],
            ['id' => '008', 'ordem' => '001006', 'assunto_pai_id' => '001', 'nome' => 'Fonologia'],
            ['id' => '009', 'ordem' => '001006001', 'assunto_pai_id' => '008', 'nome' => 'Fonemas e Letras'],
            ['id' => '010', 'ordem' => '001006002', 'assunto_pai_id' => '008', 'nome' => 'Classificação dos Fonemas'],
            ['id' => '011', 'ordem' => '001006003', 'assunto_pai_id' => '008', 'nome' => 'Vogais, Consoantes, Semivogais'],
            ['id' => '012', 'ordem' => '001006004', 'assunto_pai_id' => '008', 'nome' => 'Classificaçào das Vogais'],
            ['id' => '013', 'ordem' => '001006005', 'assunto_pai_id' => '008', 'nome' => 'Classificação das Consoantes'],
            ['id' => '014', 'ordem' => '001006006', 'assunto_pai_id' => '008', 'nome' => 'Encontro Vocálico'],
            ['id' => '015', 'ordem' => '001006007', 'assunto_pai_id' => '008', 'nome' => 'Ditongo'],
            ['id' => '016', 'ordem' => '001006008', 'assunto_pai_id' => '008', 'nome' => 'Tritongo'],
            ['id' => '017', 'ordem' => '001006009', 'assunto_pai_id' => '008', 'nome' => 'Hiato'],
            ['id' => '018', 'ordem' => '001006010', 'assunto_pai_id' => '008', 'nome' => 'Divisão Silábica'],
            ['id' => '019', 'ordem' => '001006011', 'assunto_pai_id' => '008', 'nome' => 'Otras relacionadas a fonologia'],
            ['id' => '020', 'ordem' => '001007', 'assunto_pai_id' => '001', 'nome' => 'Ortografia'],
            ['id' => '021', 'ordem' => '001007001', 'assunto_pai_id' => '020', 'nome' => 'Alfabeto Português'],
            ['id' => '022', 'ordem' => '001007002', 'assunto_pai_id' => '020', 'nome' => 'Emprego de Letras'],
            ['id' => '023', 'ordem' => '001007003', 'assunto_pai_id' => '020', 'nome' => 'Uso do Apostrofo'],
            ['id' => '024', 'ordem' => '001007004', 'assunto_pai_id' => '020', 'nome' => 'Uso do Hífen'],
            ['id' => '025', 'ordem' => '001007005', 'assunto_pai_id' => '020', 'nome' => 'Uso das Iniciais Maiúsculas'],
            ['id' => '026', 'ordem' => '001007006', 'assunto_pai_id' => '020', 'nome' => 'Uso das iniciais Minusculas'],
            ['id' => '027', 'ordem' => '001007007', 'assunto_pai_id' => '020', 'nome' => 'Abreviação, Abreviaturas e Siglas'],
            ['id' => '028', 'ordem' => '001007008', 'assunto_pai_id' => '020', 'nome' => 'Acentuação Gráfica'],
            ['id' => '029', 'ordem' => '001007008001', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Monossílabos'],
            ['id' => '030', 'ordem' => '001007008002', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Vocábulos Oxítonos'],
            ['id' => '031', 'ordem' => '001007008003', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Vocábulos Paroxítonos'],
            ['id' => '032', 'ordem' => '001007008004', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Vocábulos Proparoxítonos'],
            ['id' => '033', 'ordem' => '001007008005', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Ditongos Abertos'],
            ['id' => '034', 'ordem' => '001007008006', 'assunto_pai_id' => '028', 'nome' => 'Acentuação do Hiato êe'],
            ['id' => '035', 'ordem' => '001007008007', 'assunto_pai_id' => '028', 'nome' => 'Acentuação do Hiato ôo'],
            ['id' => '036', 'ordem' => '001007008008', 'assunto_pai_id' => '028', 'nome' => 'Acentuação das Letras i e u'],
            ['id' => '037', 'ordem' => '001007008009', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Vocábulos Proparoxítonos'],
            ['id' => '038', 'ordem' => '001007008010', 'assunto_pai_id' => '028', 'nome' => 'Acentuação dos Grupos qu e gu'],
            ['id' => '039', 'ordem' => '001007008011', 'assunto_pai_id' => '028', 'nome' => 'Acentuação Diferencial'],

            //Análise das Demonstrações Contábeis
            ['id' => '040', 'ordem' => '002', 'assunto_pai_id' => null, 'nome' => 'Análise das Demonstrações Contábeis'],
            ['id' => '041', 'ordem' => '002001', 'assunto_pai_id' => '040', 'nome' => 'Análise de liquidez'],
            ['id' => '042', 'ordem' => '002001001', 'assunto_pai_id' => '041', 'nome' => 'Análise do fluxo de caixa'],
            ['id' => '043', 'ordem' => '002001002', 'assunto_pai_id' => '041', 'nome' => 'Análise do ciclo operacional e análise do ciclo financeiro'],
            ['id' => '044', 'ordem' => '002001003', 'assunto_pai_id' => '041', 'nome' => 'Indicadores'],
            ['id' => '045', 'ordem' => '002002', 'assunto_pai_id' => '040', 'nome' => 'Considerações de natureza não-financeira (qualitativa)'],
            ['id' => '046', 'ordem' => '002002001', 'assunto_pai_id' => '045', 'nome' => 'Limitações da análise por indicadores'],
            ['id' => '047', 'ordem' => '002002002', 'assunto_pai_id' => '045', 'nome' => 'Indicadores de mercado'],
            ['id' => '048', 'ordem' => '002003', 'assunto_pai_id' => '040', 'nome' => 'Retorno sobre o capital empregado'],
            ['id' => '049', 'ordem' => '002003001', 'assunto_pai_id' => '048', 'nome' => 'Componentes'],
            ['id' => '050', 'ordem' => '002003002', 'assunto_pai_id' => '048', 'nome' => 'Retorno sobre o Ativo'],
            ['id' => '051', 'ordem' => '002003003', 'assunto_pai_id' => '048', 'nome' => 'Alavancagem financeira'],
            ['id' => '052', 'ordem' => '002003004', 'assunto_pai_id' => '048', 'nome' => 'Retorno sobre o Patrimônio Líquido'],
            ['id' => '053', 'ordem' => '002003005', 'assunto_pai_id' => '048', 'nome' => 'Ebitda'],
            ['id' => '054', 'ordem' => '002003006', 'assunto_pai_id' => '048', 'nome' => 'Indicadores'],
            ['id' => '055', 'ordem' => '002003007', 'assunto_pai_id' => '048', 'nome' => 'Economic Value Aded - EVA (Lucro Residual)'],
            ['id' => '056', 'ordem' => '002004', 'assunto_pai_id' => '040', 'nome' => 'Análise da lucratividade'],
            ['id' => '057', 'ordem' => '002004001', 'assunto_pai_id' => '056', 'nome' => 'Análise da formação do resultado'],
            ['id' => '058', 'ordem' => '002004002', 'assunto_pai_id' => '056', 'nome' => 'Análise da Receita'],
            ['id' => '059', 'ordem' => '002004003', 'assunto_pai_id' => '056', 'nome' => 'Análise das despesas e análise da variação'],
            ['id' => '060', 'ordem' => '002004004', 'assunto_pai_id' => '056', 'nome' => 'Análise dos custos dos produtos vendidos/serviços prestados'],
            ['id' => '061', 'ordem' => '002004005', 'assunto_pai_id' => '056', 'nome' => 'Indicadores'],
            ['id' => '062', 'ordem' => '002005', 'assunto_pai_id' => '040', 'nome' => 'Análise da estrutura de capital e da solvência'],
            ['id' => '063', 'ordem' => '002005001', 'assunto_pai_id' => '062', 'nome' => 'Indicadores e medidas de solvência'],
            ['id' => '064', 'ordem' => '002006', 'assunto_pai_id' => '040', 'nome' => 'Informações extraídas das Notas Explicativas'],
            ['id' => '065', 'ordem' => '002007', 'assunto_pai_id' => '040', 'nome' => 'Análise horizontal e vertical'],
            ['id' => '066', 'ordem' => '002007001', 'assunto_pai_id' => '065', 'nome' => 'Análise de tendências'],
            ['id' => '067', 'ordem' => '002007002', 'assunto_pai_id' => '065', 'nome' => 'Grupos de comparação'],

            //Música
            ['id' => '068', 'ordem' => '003', 'assunto_pai_id' => null, 'nome' => 'Música'],
            ['id' => '069', 'ordem' => '003001', 'assunto_pai_id' => '068', 'nome' => 'Teoria Musical e Conceitos Fundamentais'],
            ['id' => '070', 'ordem' => '003002', 'assunto_pai_id' => '068', 'nome' => 'Instrumentos Musicais'],
            ['id' => '071', 'ordem' => '003003', 'assunto_pai_id' => '068', 'nome' => 'História da Música'],
            ['id' => '072', 'ordem' => '003004', 'assunto_pai_id' => '068', 'nome' => 'Percepção Musical'],
            ['id' => '073', 'ordem' => '003005', 'assunto_pai_id' => '068', 'nome' => 'Linguagem Musical'],
        ]);
    }
}

