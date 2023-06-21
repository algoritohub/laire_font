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
}
