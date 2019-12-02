<?php

namespace App\Http\Controllers;

use App\Assunto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AssuntoController extends Controller
{


    public function getArvoresByOrgaoAndBanca($orgao_id, $banca_id)
    {
        try {
            $assunto = new Assunto();
            $dados = $assunto->getArvoresAssuntosByOrgaoAndBanca($orgao_id,$banca_id);
            $dados = $this->organizaArvoreAssuntos($dados);

            return response()->json([
                'error' => false,
                'message'  => "Árvores de assunto recuperadas com sucesso",
                'data' => $dados
            ], 200);
        }catch (\Exception $e){
            $response = response()->json([
                'error' => true,
                'exception' => $e->getMessage(),
                'message' => 'Não foi possível recuperar as árvores de assuntos',
                'data'  => [],
            ], 400);
        }

        return $response;
    }

    private function organizaArvoreAssuntos(array $arrAssuntos, $assuntoPaiId = null)
    {
        $arrAssuntosOrganizados = [];
        foreach ($arrAssuntos as &$assunto) {
            if($assuntoPaiId == $assunto->assunto_pai_id) {
                $assunto->filhos = $this->organizaArvoreAssuntos($arrAssuntos, $assunto->id);
                $arrAssuntosOrganizados[] = $assunto;
            }
        }

        return $arrAssuntosOrganizados;
    }
}
