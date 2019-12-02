<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{

    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Processo seletivo GG Educacional - Árvore de assuntos",
     *      @OA\Contact(
     *          email="danieldrduarte@gmail.com"
     *      )
     * )
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
