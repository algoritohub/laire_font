<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosController extends Controller
{
    // EXIBIR PÁGINA DE EVENTOS ENCERRADOS
    public function EventosEncerrados()
    {
        return view('respirasaude.eventos');
    }

    // EXIBIR PÁGINA DE EVENTOS FUTUROS
    public function EventosFuturos()
    {
        return view('respirasaude.eventos');
    }

    // EXIBIR PÁGINA DO EVENTO
    public function EventoPagina()
    {
        return view('respirasaude.evento');
    }
}
