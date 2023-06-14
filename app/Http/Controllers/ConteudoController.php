<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conteudo;
use App\Models\Doenca;
use App\Models\Pesquisador;
use Illuminate\Support\Facades\DB;

class ConteudoController extends Controller
{
    // PROJETO1
    public function Projeto1()
    {
        $pesquisadores = DB::select("SELECT * FROM pesquisadors ORDER BY categoria DESC");

        return view('respirasaude.projeto1', compact('pesquisadores'));
    }

    public function novoConteudo(Request $request)
    {
        // VERIFICAR UMA FUNÇÃO AQUI!
    }

    // EXIBIR MODAL DE EDIÇÃO DOENÇA
    public function editDoenca($id)
    {
        return view('dashboard.publicacao', ['editar_doenca' => $id]);
    }

    // EXIBIR MODAL DE EDIÇÃO DOENÇA
    public function editarDoenca(Request $request, $id)
    {
        $doenca = Doenca::findOrFail($id);

        $texto1 = strip_tags($request->definicao);
        $texto1 = mb_convert_encoding($texto1, 'UTF-8', 'HTML-ENTITIES');

        $texto2 = strip_tags($request->controle);
        $texto2 = mb_convert_encoding($texto2, 'UTF-8', 'HTML-ENTITIES');

        $texto3 = strip_tags($request->tratamento);
        $texto3 = mb_convert_encoding($texto3, 'UTF-8', 'HTML-ENTITIES');

        $doenca->update([
            'nome'       => $request->nome,
            'definicao'  => $texto1,
            'controle'   => $texto2,
            'tratamento' => $texto3,
            'tipo'       => $request->tipo,
        ]);

        return redirect()->route('admin.painel_publicacao');
    }

    // DELETAR PUBLICAÇÃO DE DOENÇA
    public function deleteDoenca($id)
    {
        Doenca::findOrFail($id)->delete();

        return redirect()->route('admin.painel_publicacao');
    }



    // EXIBIR MODAL DE EDIÇÃO DOENÇA
    public function editConteudo($id)
    {
        return view('dashboard.publicacao', ['editar_conteudo' => $id]);
    }

    // EXIBIR MODAL DE EDIÇÃO DOENÇA
    public function editarConteudo(Request $request, $id)
    {
        $conteudo   = Conteudo::findOrFail($id);

        $linha_utf  = utf8_encode($request->texto);

        $texto      = strip_tags($request->texto);
        $texto      = mb_convert_encoding($texto, 'UTF-8', 'HTML-ENTITIES');

        $texto2     = strip_tags($request->texto2);
        $texto2     = mb_convert_encoding($texto2, 'UTF-8', 'HTML-ENTITIES');

        $texto3     = strip_tags($request->texto3);
        $texto3     = mb_convert_encoding($texto3, 'UTF-8', 'HTML-ENTITIES');

        $texto4     = strip_tags($request->texto4);
        $texto4     = mb_convert_encoding($texto4, 'UTF-8', 'HTML-ENTITIES');

        $texto5     = strip_tags($request->texto5);
        $texto5     = mb_convert_encoding($texto5, 'UTF-8', 'HTML-ENTITIES');


        $texto_eng  = strip_tags($request->texto_eng);
        $texto_eng  = mb_convert_encoding($texto_eng, 'UTF-8', 'HTML-ENTITIES');

        $texto2_eng = strip_tags($request->texto2_eng);
        $texto2_eng = mb_convert_encoding($texto2_eng, 'UTF-8', 'HTML-ENTITIES');

        $texto3_eng = strip_tags($request->texto3_eng);
        $texto3_eng = mb_convert_encoding($texto3_eng, 'UTF-8', 'HTML-ENTITIES');

        $texto4_eng = strip_tags($request->texto4_eng);
        $texto4_eng = mb_convert_encoding($texto4_eng, 'UTF-8', 'HTML-ENTITIES');

        $texto5_eng = strip_tags($request->texto5_eng);
        $texto5_eng = mb_convert_encoding($texto5_eng, 'UTF-8', 'HTML-ENTITIES');

        $conteudo->update([
            'titulo'        => $request->titulo,
            'subtitulo'     => $request->subtitulo,
            'texto'         => $texto,
            'texto2'        => $texto2,
            'texto3'        => $texto3,
            'texto4'        => $texto4,
            'texto5'        => $texto5,
            'titulo_eng'    => $request->titulo_eng,
            'subtitulo_eng' => $request->subtitulo_eng,
            'texto_eng'     => $texto_eng,
            'texto2_eng'    => $texto2_eng,
            'texto3_eng'    => $texto3_eng,
            'texto4_eng'    => $texto4_eng,
            'texto5_eng'    => $texto5_eng,
        ]);

        return redirect()->route('admin.painel_publicacao');
    }

    // DELETAR PUBLICAÇÃO DE PESQUISA
    public function deleteConteudo($id)
    {
        Conteudo::findOrFail($id)->delete();

        return redirect()->route('admin.painel_publicacao');
    }

    // DOENÇAS CRÔNICAS
    public function DoencaCronica($id)
    {
        return view('respirasaude.doencas', ['doenca' => $id]);
    }

    // DOENÇAS AGUDAS
    public function DoencaAguda($id)
    {
        return view('respirasaude.doencas', ['doenca' => $id]);
    }

    // PÁGINA DE DOENÇA
    public function PagDoencas($tipo, $doenca)
    {
        $doenca = $doenca;
        $tipo   = $tipo;

        return view('respirasaude.doencas', compact('doenca', 'tipo'));
    }

    // PÁGINA DE REVISÃO SISTEMÁTICA
    public function PagRevisaoSistematica()
    {
        return view('respirasaude.revisao_sistematica');
    }

    // PESQUISADORES PROJETO 1
    public function PesquisadoresProjeto1($tipo, $nome)
    {
        $pesquisador = $nome;
        $categoria   = $tipo;

        return view('respirasaude.projeto1', ['pesquisador' => $pesquisador, 'categoria' => $categoria]);
    }

    // PESQUISADORES PROJETO 1
    public function PesquisadoresProjeto2($tipo, $nome)
    {
        $pesquisador = $nome;
        $categoria   = $tipo;

        return view('respirasaude.projeto2', ['pesquisador' => $pesquisador, 'categoria' => $categoria]);
    }

    // PESQUISADORES PROJETO 3
    public function PesquisadoresProjeto3($tipo, $nome)
    {
        $pesquisador = $nome;
        $categoria   = $tipo;

        return view('respirasaude.projeto3', ['pesquisador' => $pesquisador, 'categoria' => $categoria]);
    }

    // EBOOK EVENTO
    public function BannerEbook($tipo)
    {
        $categoria = $tipo;

        return view('laire.home', ['evento_cat' => $categoria]);
    }

    // EBOOK EVENTO RESPIRA
    public function BannerEvento($tipo)
    {
        $categoria = $tipo;

        return view('respirasaude.home', ['evento_cat' => $categoria]);
    }
}
