<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NomeDoModelo;

class NomeDoController extends Controller
{
    public function mostrar($id)
    {
        $registro = NomeDoModelo::find($id);

        if ($registro) {
            return view('mostrar_registro', ['registro' => $registro]);
        } else {
            return response('Registro não encontrado', 404);
        }
    }
}
