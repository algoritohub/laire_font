<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conteudo;
use App\Models\Doenca;
use App\Models\Pesquisador;
use Illuminate\Support\Facades\DB;
use File;

class ConteudoController extends Controller
{
    // HOME
    public function HomeRespira()
    {
        $doencas_agudas    = DB::select("SELECT * FROM doencas WHERE tipo = 1 ORDER BY id DESC");
        $doencas_cronicas  = DB::select("SELECT * FROM doencas WHERE tipo = 2 ORDER BY id DESC");
        $eventos           = DB::select("SELECT * FROM eventos");
        $conteudo          = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 4");
        @$descricao        = strip_tags($conteudo[0]->descricao);
        @$descricao        = mb_convert_encoding($descricao, 'UTF-8', 'HTML-ENTITIES');
        @$descricao_blocos = explode('.', $descricao);

        return view('respirasaude.home', compact('doencas_agudas', 'doencas_cronicas', 'conteudo', 'descricao_blocos', 'eventos'));
    }

    // PROJETO1
    public function Projeto1()
    {
        $pesquisadores    = DB::select("SELECT * FROM pesquisadors ORDER BY categoria DESC");
        $doencas_cronicas = DB::select("SELECT * FROM doencas WHERE tipo = 2 ORDER BY id DESC");

        $bloco_principal  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 1 AND posicao = 3");
        @$descricao_prime = strip_tags($bloco_principal[0]->descricao);
        @$descricao_prime = mb_convert_encoding($descricao_prime, 'UTF-8', 'HTML-ENTITIES');
        @$explode_texto   = explode('.', $descricao_prime);

        @$bloco_conteudo  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 1 AND posicao != 3");

        return view('respirasaude.projeto1', compact('pesquisadores', 'doencas_cronicas', 'bloco_principal', 'descricao_prime', 'bloco_conteudo', 'explode_texto'));
    }

    // PROJETO2
    public function Projeto2()
    {
        $pesquisadores  = DB::select("SELECT * FROM pesquisadors ORDER BY categoria DESC");
        $doencas_agudas = DB::select("SELECT * FROM doencas WHERE tipo = 1 ORDER BY id DESC");

        $bloco_principal  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 2 AND posicao = 3");
        @$descricao_prime = strip_tags($bloco_principal[0]->descricao);
        @$descricao_prime = mb_convert_encoding($descricao_prime, 'UTF-8', 'HTML-ENTITIES');
        @$explode_texto   = explode('.', $descricao_prime);

        @$bloco_conteudo  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 2 AND posicao != 3");

        return view('respirasaude.projeto2', compact('pesquisadores', 'doencas_agudas', 'bloco_principal', 'descricao_prime', 'bloco_conteudo', 'explode_texto'));
    }

    // PROJETO3
    public function Projeto3()
    {
        $pesquisadores    = DB::select("SELECT * FROM pesquisadors ORDER BY categoria DESC");
        $doencas_cronicas = DB::select("SELECT * FROM doencas WHERE tipo = 2 ORDER BY id DESC");

        $bloco_principal  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 3 AND posicao = 3");
        @$descricao_prime = strip_tags($bloco_principal[0]->descricao);
        @$descricao_prime = mb_convert_encoding($descricao_prime, 'UTF-8', 'HTML-ENTITIES');
        @$explode_texto   = explode('.', $descricao_prime);

        @$bloco_conteudo  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 3 AND posicao != 3");

        return view('respirasaude.projeto3', compact('pesquisadores', 'doencas_cronicas', 'bloco_principal', 'descricao_prime', 'bloco_conteudo', 'explode_texto'));
    }

    // PROJETO4
    public function Projeto4()
    {
        $pesquisadores    = DB::select("SELECT * FROM pesquisadors ORDER BY categoria DESC");
        $doencas_cronicas = DB::select("SELECT * FROM doencas WHERE tipo = 2 ORDER BY id DESC");

        return view('respirasaude.responsivo_templete', compact('pesquisadores', 'doencas_cronicas'));
    }

    public function AddNewDoenca(Request $request)
    {
        $doenca = new Doenca;
        $doenca->nome       = trim($request->nome);
        $doenca->definicao  = $request->definicao;
        $doenca->controle   = $request->controle;
        $doenca->tratamento = $request->tratamento;

        if ($request->hasFile('video') && $request->file('video')->isValid()) {

            $requestImage = $request->video;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('videos/doencas'), $imageName);

            $doenca->video = $imageName;
        }

        if ($request->hasFile('audio') && $request->file('audio')->isValid()) {

            $requestImage = $request->audio;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('audios/doencas'), $imageName);

            $doenca->video = $imageName;
        }

        if ($request->hasFile('imagem1') && $request->file('imagem1')->isValid()) {

            $requestImage = $request->imagem1;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/doencas'), $imageName);

            $doenca->imagem1 = $imageName;
        }

        if ($request->hasFile('imagem2') && $request->file('imagem2')->isValid()) {

            $requestImage = $request->imagem2;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/doencas'), $imageName);

            $doenca->imagem2 = $imageName;
        }

        if ($request->hasFile('imagem3') && $request->file('imagem3')->isValid()) {

            $requestImage = $request->imagem3;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/doencas'), $imageName);

            $doenca->imagem3 = $imageName;
        }

        $doenca->tipo = $request->tipo;

        $doenca->save();

        return redirect()->route('admin.doencas.pag');
    }

    // EXIBIR MODAL DE EDIÇÃO DOENÇA
    public function editDoenca($id)
    {
        if(session()->has('admin')){

            $doencas    = DB::select("SELECT * FROM doencas ORDER BY id DESC");
            $doenca_edt = Doenca::where('id', $id)->first();

            return view('dashboard.doencas', compact('doenca_edt', 'doencas'));
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    // EXIBIR MODAL DE EDIÇÃO DOENÇA
    public function editarDoenca(Request $request, $id)
    {
        $doenca = Doenca::findOrFail($id);

        $doenca->update([
            'nome'       => $request->nome,
            'definicao'  => $request->definicao,
            'controle'   => $request->controle,
            'tratamento' => $request->tratamento,
            'tipo'       => $request->tipo,
        ]);

        if ($request->hasFile('video') && $request->file('video')->isValid()) {

            if(!empty($doenca->video)){
                File::delete('videos/doencas/'.$doenca->video);
            }

            $requestImage = $request->video;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('videos/doencas'), $imageName);

            $doenca->update([
                'video' => $imageName,
            ]);
        }

        if ($request->hasFile('audio') && $request->file('audio')->isValid()) {

            if(!empty($doenca->audio)){
                File::delete('audios/doencas/'.$doenca->audio);
            }

            dd("audio aqui");
            exit();

            $requestImage = $request->audio;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('audio/doencas'), $imageName);

            $doenca->update([
                'audio' => $imageName,
            ]);
        }

        if ($request->hasFile('imagem1') && $request->file('imagem1')->isValid()) {

            File::delete('img/doencas/'.$doenca->imagem1);

            $requestImage = $request->imagem1;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/doencas'), $imageName);

            $doenca->update([
                'imagem1' => $imageName,
            ]);
        }

        if ($request->hasFile('imagem2') && $request->file('imagem2')->isValid()) {

            File::delete('img/doencas/'.$doenca->imagem2);

            $requestImage = $request->imagem2;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/doencas'), $imageName);

            $doenca->update([
                'imagem2' => $imageName,
            ]);
        }

        if ($request->hasFile('imagem3') && $request->file('imagem3')->isValid()) {

            File::delete('img/doencas/'.$doenca->imagem3);

            $requestImage = $request->imagem3;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/doencas'), $imageName);

            $doenca->update([
                'imagem3' => $imageName,
            ]);
        }

        return redirect()->route('admin.doencas.pag');
    }

    // DELETAR PUBLICAÇÃO DE DOENÇA
    public function deleteDoenca($id)
    {
        Doenca::findOrFail($id)->delete();

        return redirect()->route('admin.doencas.pag');
    }



    // EXIBIR MODAL DE EDIÇÃO DOENÇA
    public function editConteudo($id)
    {
        if(session()->has('admin')){

            $pesquisadores = DB::select("SELECT * FROM pesquisadors ORDER BY id DESC");
            $doencas       = DB::select("SELECT * FROM doencas ORDER BY id DESC");
            $conteudos     = DB::select("SELECT * FROM conteudos ORDER BY id DESC");
            $conteudo      = Conteudo::where('id', $id)->first();

            return view('dashboard.publicacao', compact('conteudo', 'pesquisadores', 'doencas', 'conteudos'));
        }
        else{
            return redirect()->route('dashboard');
        }
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
        $doenca    = DB::select("SELECT * FROM doencas WHERE tipo = 2 AND id = '$id' ORDER BY id DESC");
        $definicao = strip_tags($doenca[0]->definicao);
        $definicao = mb_convert_encoding($definicao, 'UTF-8', 'HTML-ENTITIES');
        $doencas_cronicas = DB::select("SELECT * FROM doencas WHERE tipo = 2 ORDER BY id DESC");
        $doencas_agudas   = DB::select("SELECT * FROM doencas WHERE tipo = 1 ORDER BY id DESC");

        return view('respirasaude.doencas', compact('doenca', 'definicao', 'doencas_cronicas', 'doencas_agudas'));
    }

    // DOENÇAS AGUDAS
    public function DoencaAguda($id)
    {
        $doenca    = DB::select("SELECT * FROM doencas WHERE tipo = 1 AND id = '$id' ORDER BY id DESC");
        $definicao = strip_tags($doenca[0]->definicao);
        $definicao = mb_convert_encoding($definicao, 'UTF-8', 'HTML-ENTITIES');
        $doencas_cronicas = DB::select("SELECT * FROM doencas WHERE tipo = 2 ORDER BY id DESC");
        $doencas_agudas   = DB::select("SELECT * FROM doencas WHERE tipo = 1 ORDER BY id DESC");

        return view('respirasaude.doencas', compact('doenca', 'definicao', 'doencas_cronicas', 'doencas_agudas'));
    }

    // PÁGINA DE REVISÃO SISTEMÁTICA
    public function PagRevisaoSistematica()
    {
        $pesquisadores    = DB::select("SELECT * FROM pesquisadors ORDER BY id DESC");
        $doencas          = DB::select("SELECT * FROM doencas ORDER BY id DESC");
        $conteudo         = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 4");
        $doencas_cronicas = DB::select("SELECT * FROM doencas WHERE tipo = 2 ORDER BY id DESC");
        $doencas_agudas   = DB::select("SELECT * FROM doencas WHERE tipo = 1 ORDER BY id DESC");

        return view('respirasaude.revisao_sistematica', compact('conteudo', 'doencas', 'pesquisadores', 'doencas_cronicas', 'doencas_agudas'));
    }

    // PESQUISADORES PROJETO 1
    public function PesquisadoresProjeto1($id)
    {
        $doencas_cronicas = DB::select("SELECT * FROM doencas WHERE tipo = 2 ORDER BY id DESC");
        $bloco_principal  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 1 AND posicao = 3");
        @$descricao_prime = strip_tags($bloco_principal[0]->descricao);
        @$descricao_prime = mb_convert_encoding($descricao_prime, 'UTF-8', 'HTML-ENTITIES');
        @$explode_texto   = explode('.', $descricao_prime);
        @$bloco_conteudo  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 1 AND posicao != 3");
        $pesquisador_info = Pesquisador::where('id', $id)->first();
        $descricao_info   = strip_tags($pesquisador_info->descricao);
        $descricao_prime  = mb_convert_encoding($descricao_info, 'UTF-8', 'HTML-ENTITIES');
        $pesquisadores    = DB::select("SELECT * FROM pesquisadors ORDER BY categoria DESC");

        return view('respirasaude.projeto1', compact('pesquisador_info', 'pesquisadores', 'descricao_info', 'bloco_conteudo', 'explode_texto', 'descricao_prime', 'doencas_cronicas', 'bloco_principal'));
    }

    // PESQUISADORES PROJETO 1
    public function PesquisadoresProjeto2($id)
    {
        $doencas_agudas   = DB::select("SELECT * FROM doencas WHERE tipo = 1 ORDER BY id DESC");
        $bloco_principal  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 2 AND posicao = 3");
        @$descricao_prime = strip_tags($bloco_principal[0]->descricao);
        @$descricao_prime = mb_convert_encoding($descricao_prime, 'UTF-8', 'HTML-ENTITIES');
        @$explode_texto   = explode('.', $descricao_prime);
        @$bloco_conteudo  = DB::select("SELECT * FROM conteudo_respiras WHERE projeto = 2 AND posicao != 3");
        $pesquisador_info = Pesquisador::where('id', $id)->first();
        $descricao_info   = strip_tags($pesquisador_info->descricao);
        $descricao_info   = mb_convert_encoding($descricao_info, 'UTF-8', 'HTML-ENTITIES');
        $pesquisadores    = DB::select("SELECT * FROM pesquisadors ORDER BY categoria DESC");

        return view('respirasaude.projeto2', compact('pesquisador_info', 'pesquisadores', 'descricao_info', 'bloco_conteudo', 'explode_texto', 'descricao_prime', 'doencas_agudas', 'bloco_principal'));
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
