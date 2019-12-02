<?php

namespace App\Http\Controllers;

use App\Assunto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AssuntoController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/v1/arvores-assuntos/orgao/{orgao_id}/banca/{banca_id}",
     *      operationId="getArvoresByOrgaoAndBanca",
     *      tags={"Assunto"},
     *      summary="Arvore de assuntos",
     *      description="Recupera a lista de orgãos cadastrados no sistema",
     *      @OA\Parameter(
     *          name="orgao_id",
     *          description="ID do orgão",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="banca_id",
     *          description="ID da banca",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *       @OA\Response(
     *          response=400,
     *          description="Bad request"
     *       ),
     *     )
     *
     * Recupera a lista de orgãos cadastrados no sistema
     */
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
