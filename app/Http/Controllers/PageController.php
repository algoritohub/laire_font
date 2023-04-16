<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metrica;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    // PÁGINAS GERAIS
    public function HomeLaire()
    {
        // CRIAR NOVA SESSÃO
        // @$session_val = session('visitor');

        // $datas = date('d-m-Y', time());

        // if (!isset($session_val) and empty($session_val)) {

        //     $number_session = random_int(10000000, 99999999);
        //     session()->put('visitor', $number_session);

        //     $visita = new Metrica;
        //     $visita->pages      = "home_laire";
        //     $visita->views      = 1;
        //     $visita->record     = $datas;
        //     $visita->session_nb = $number_session;

        //     $visita->save();
        // }

        // else{

        //     $metrica = DB::select("SELECT * FROM metricas WHERE session_nb = '$session_val' AND pages = 'home_laire'");
        //     $counter = count($metrica);

        //     if ($counter == 0) {

        //         $visita = new Metrica;
        //         $visita->pages      = "home_laire";
        //         $visita->views      = 1;
        //         $visita->record     = $datas;
        //         $visita->session_nb = $session_val;

        //         $visita->save();
        //     }
        // }

        return view('laire.home');
    }
}
