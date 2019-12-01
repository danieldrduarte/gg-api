<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProgramaController extends Controller
{
    /**
     * Exibe a lista com todos os programas
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {

        $data = Programa::with('orgao','banca')->get();

        return response()->json([
            'error' => false,
            'data'  => $data,
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $data = Programa::with('orgao','banca')->find($id);

        return response()->json([
            'error' => false,
            'data'  => $data,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $data = Programa::with('orgao','banca')->find(Programa::create($request->all()));

            $response = response()->json([
                'error' => false,
                'message' => 'Programa salvo com sucesso',
                'data'  => $data,
            ], 200);
        }catch (\Exception $e){
            $response = response()->json([
                'error' => true,
                'exception' => $e->getMessage(),
                'message' => 'Não foi possível salvar o Programa',
                'data'  => [],
            ], 400);
        }

        return $response;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        try {
            $programa = Programa::find($id);
            $programa->nome = $request->input('nome');
            $programa->orgao_id = $request->input('orgao_id');
            $programa->banca_id = $request->input('banca_id');
            $programa->save();

            $data = Programa::with('orgao','banca')->find($programa->id);

            $response = response()->json([
                'error' => false,
                'message' => 'Programa atualizado com sucesso',
                'data'  => $data,
            ], 200);
        }catch (\Exception $e){
            $response = response()->json([
                'error' => true,
                'exception' => $e->getMessage(),
                'message' => 'Não foi possível atualizar o Programa',
                'data'  => [],
            ], 400);
        }

        return $response;
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $programa = Programa::findOrFail($id);
            $programa->delete();

            return response()->json([
                'error' => false,
                'message'  => "O Programa foi deletado com sucesso",
            ], 200);
        }catch (\Exception $e){
            $response = response()->json([
                'error' => true,
                'exception' => $e->getMessage(),
                'message' => 'Não foi possível deletar o Programa',
                'data'  => [],
            ], 400);
        }

        return $response;
    }
}
