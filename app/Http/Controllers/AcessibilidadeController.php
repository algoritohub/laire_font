<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcessibilidadeController extends Controller
{
    // AUMENTAR TAMANHO DE FONT
    public function ScaleFontUp()
    {
        $session_font = session('font');

        if (isset($session_font)) {
            $number_font = $session_font;

            if ($number_font <= 17) {
                $number_font = $number_font + 1;

                session()->forget('font');

                session()->put('font', $number_font);
            }
        }

        else {
            $number_font = 15;
            $number_font = $number_font + 1;            
            session()->put('font', $number_font);
        }

        // return redirect()->route('home.respira_saude');
        return back();
    }

    // DIMINUIR TAMANHO DE FONT
    public function ScaleFontDown()
    {
        $session_font = session('font');

        if (isset($session_font)) {
            $number_font = $session_font;

            if ($number_font >= 16) {
                $number_font = $number_font - 1;

                session()->forget('font');

                session()->put('font', $number_font);
            }
        }

        else {
            $number_font = 15;
            session()->put('font', $number_font);
        }

        // return redirect()->route('home.respira_saude');
        return back();
    }

    // IDIOMA EM INGLÊS
    public function idiomaIng()
    {
        // CRIAR UMA SESSÃO DE LINGUA INGLESA
        session()->put('idioma', 'ing');

        return back();
    }

    // IDIOMA EM PORTUGUÊS
    public function idiomaPtBr()
    {
        // MATAR UMA SESSÃO DE LINGUA INGLESA
        session()->forget('idioma');

        return back();
    }
}
