<?php

namespace App\Http\Controllers;

use App\Orgao;

class OrgaoController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/v1/orgao",
     *      operationId="index",
     *      tags={"Orgão"},
     *      summary="Listagem",
     *      description="Recupera a lista de orgãos cadastrados no sistema",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       )
     *     )
     *
     * Recupera a lista de orgãos cadastrados no sistema
     */
    public function index()
    {
        $data = Orgao::all(['id','nome']);

        return response()->json([
            'error' => false,
            'data'  => $data,
        ], 200);
    }
}
