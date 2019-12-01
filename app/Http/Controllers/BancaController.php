<?php

namespace App\Http\Controllers;

use App\Banca;
use Illuminate\Http\Request;

class BancaController extends Controller
{
    /**
     * Exibe a lista com todas as bancas
     *
     * @return \Illuminate\Http\JsonResponse
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
