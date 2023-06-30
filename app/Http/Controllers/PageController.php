<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metrica;
use App\Models\Pesquisador;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    // PÁGINAS GERAIS
    public function HomeLaire()
    {
        $pesquisadores = Pesquisador::all();

        return view('laire.home', compact('pesquisadores'));
    }

    public function PesquisadoresLaire($id)
    {
        $pesquisadores = Pesquisador::all();
        $modal_usuario = Pesquisador::find($id);

        return view('laire.home', compact('pesquisadores', 'modal_usuario'));
    }
}
