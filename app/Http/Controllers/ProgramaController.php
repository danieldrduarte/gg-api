<?php

namespace App\Http\Controllers;

use App\Assunto;
use App\Programa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProgramaController extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/v1/programa",
     *      operationId="index",
     *      tags={"Programa"},
     *      summary="Listagem",
     *      description="Recupera a lista de programas cadastrados no sistema",
     *      @OA\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *     )
     *
     * Returns list of projects
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
     * @OA\Get(
     *      path="/api/v1/programa/{id}",
     *      operationId="show",
     *      tags={"Programa"},
     *      summary="Recuperar",
     *      description="Recupera um registro de programa cadastrado no sistema",
     *      @OA\Parameter(
     *          name="id",
     *          description="ID do programa",
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
     *     )
     *
     * Recupera um registro de programa cadastrado no sistema
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
     * @OA\Post(
     *      path="/api/v1/programa",
     *      operationId="store",
     *      tags={"Programa"},
     *      summary="Salvar",
     *      description="Salva um registro de programa no banco de dados",
     *      @OA\Parameter(
     *          name="orgao_id",
     *          description="ID do orgão",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="banca_id",
     *          description="ID do banca",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="nome",
     *          description="Nome do programa",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
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
     * )
     *
     * Recupera um registro de programa cadastrado no sistema
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
     * @OA\Put(
     *      path="/api/v1/programa/{id}",
     *      operationId="update",
     *      tags={"Programa"},
     *      summary="Atualizar",
     *      description="Atualiza um registro de programa no banco de dados",
     *      @OA\Parameter(
     *          name="id",
     *          description="ID do programa",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="orgao_id",
     *          description="ID do orgão",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="banca_id",
     *          description="ID do banca",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Parameter(
     *          name="nome",
     *          description="Nome do programa",
     *          required=true,
     *          in="query",
     *          @OA\Schema(
     *              type="string"
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
     * )
     *
     * Recupera um registro de programa cadastrado no sistema
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
     * @OA\Delete(
     *      path="/api/v1/programa/{id}",
     *      operationId="destroy",
     *      tags={"Programa"},
     *      summary="Deletar",
     *      description="Deleta um registro de programa cadastrado no sistema",
     *      @OA\Parameter(
     *          name="id",
     *          description="ID do programa",
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
     * Delete um registro de programa cadastrado no sistema
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
