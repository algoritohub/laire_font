<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    // FEED DE NOTÍCIA
    public function feedNoticias()
    {
        return view('laire.noticias');
    }
}
