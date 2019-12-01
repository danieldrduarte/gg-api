<?php

namespace App\Http\Controllers;

use App\Orgao;

class OrgaoController extends Controller
{
    /**
     * Exibe a lista com todos os orgãos
     *
     * @return \Illuminate\Http\JsonResponse
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
