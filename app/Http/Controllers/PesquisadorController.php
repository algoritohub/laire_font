<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesquisador;
use App\Models\ConectPesquisa;
use App\Models\Pesquisa;
use Illuminate\Support\Facades\DB;
use File;

class PesquisadorController extends Controller
{
    // INCLUIR UM NOVO PESQUISADOR
    public function newPesquisador(Request $request)
    {
        $pesquisador = new Pesquisador;
        $pesquisador->categoria   = $request->categoria;
        $pesquisador->nome        = $request->nome;
        $pesquisador->referencia  = $request->referencia;
        $pesquisador->link_lattes = $request->link_lattes;
        $pesquisador->link_orcid  = $request->link_orcid;
        $pesquisador->descricao   = $request->descricao;
        $pesquisador->imagem      = "person.png";

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $requestImage = $request->imagem;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/pesquisadores'), $imageName);

            $pesquisador->imagem = $imageName;
        }

        else{
            $pesquisador->imagem = "person.png";
        }

        $pesquisador->save();

        // LOCALIZAR ID DO PESQUISADOR
        $sql_pesquisador = DB::select("SELECT * FROM pesquisadors WHERE nome = '$request->nome'");
        $id_pesquisador  = $sql_pesquisador[0]->id;

        if ($request->projeto1 == "on") {

            $conexao = new ConectPesquisa;
            $conexao->pesquisa    = 1;
            $conexao->pesquisador = $id_pesquisador;
            $conexao->save();
        }

        if ($request->projeto2 == "on") {

            $conexao = new ConectPesquisa;
            $conexao->pesquisa    = 3;
            $conexao->pesquisador = $id_pesquisador;
            $conexao->save();
        }

        if ($request->projeto3 == "on") {

            $conexao = new ConectPesquisa;
            $conexao->pesquisa    = 4;
            $conexao->pesquisador = $id_pesquisador;
            $conexao->save();
        }

        return redirect()->route('admin.painel_publicacao');
    }

    // EXIBIR MODAL DE EDIÇÃO DE PESQUISADOR
    public function editPesquisador($id)
    {
        $pesquisador_edit = Pesquisador::where('id', $id)->first();
        $texto_descricao  = strip_tags($pesquisador_edit->descricao);
        $pesquisadores    = DB::select("SELECT * FROM pesquisadors ORDER BY id DESC");

        return view('dashboard.pesquisadores', compact('pesquisador_edit', 'texto_descricao', 'pesquisadores'));
    }

    // EDITAR PESQUISADOR
    public function editarPesquisador(Request $request, $id)
    {
        $pesquisador = Pesquisador::findOrFail($id);

        $pesquisador->update([
            'nome'        => $request->nome,
            'referencia'  => $request->referencia,
            'link_lattes' => $request->link_lattes,
            'link_orcid'  => $request->link_orcid,
            'descricao'   => $request->descricao,
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            File::delete('img/pesquisadores/'.$pesquisador->imagem);

            $requestImage = $request->imagem;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/pesquisadores'), $imageName);

            $pesquisador->update([
                'imagem'  => $imageName,
            ]);
        }

        return redirect()->route('admin.pesquisadores.pag');
    }

    // EXIBIR MODAL DE INFORMAÇÃO
    public function modalPesquisador($id, $pag)
    {
        return redirect()->route('projeto1', ['pesquisador' => $pag]);
    }

    // DELETAR PUBLICAÇÃO DE DOENÇA
    public function deletePesquisador($id)
    {
        Pesquisador::findOrFail($id)->delete();

        return redirect()->route('admin.pesquisadores.pag');
    }
}
