<?php

namespace App\Http\Controllers;

use App\Banca;
use Illuminate\Http\Request;

class BancaController extends Controller
{

    /**
     * @OA\Get(
     *      path="/api/v1/banca",
     *      operationId="index",
     *      tags={"Banca"},
     *      summary="Listagem",
     *      description="Recupera a lista de bancas cadastradas no sistema",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *     )
     *
     * Retorna uma lista com as bancas cadastradas
     */
    public function index()
    {
        $data = Banca::all(['id','sigla','nome']);

        return response()->json([
            'error' => false,
            'data'  => $data,
        ], 200);
    }
}
