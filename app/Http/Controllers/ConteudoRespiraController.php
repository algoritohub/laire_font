<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConteudoRespira;
use Illuminate\Support\Facades\DB;
use File;

class ConteudoRespiraController extends Controller
{
    public function AddConteudoRespira(Request $request)
    {
        // HOME NÃO TEM BLOCO PRINCIPAL
        if ($request->posicao == 3 AND $request->projeto == 4) {

            return redirect()->route('admin.respirasaude.pag');
        }

        // EXISTE APENAS UM BLOCO PRINCIPAL PRO PROJETO
        if ($request->posicao == 3 AND $request->projeto != 4) {

            $bloco_principal = ConteudoRespira::where('projeto', $request->projeto)->where('posicao', 3)->first();

            if ($bloco_principal) {

                return redirect()->route('admin.respirasaude.pag');
            }
        }

        $conteudo = new ConteudoRespira;

        $conteudo->projeto   = $request->projeto;
        $conteudo->posicao   = $request->posicao;
        $conteudo->titulo    = $request->titulo;
        $conteudo->descricao = $request->descricao;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $requestImage = $request->imagem;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/conteudo'), $imageName);

            $conteudo->imagem = $imageName;
        }

        $conteudo->save();

        return redirect()->route('admin.respirasaude.pag');

    }

    public function ExibirModalEditConteudoRespira($id)
    {
        $respira = DB::select("SELECT * FROM conteudo_respiras ORDER BY id DESC");
        $respira_edit  = ConteudoRespira::where('id', $id)->first();
        $texto_respira = strip_tags($respira_edit->descricao);

        return view('dashboard.respira_saude', compact('respira', 'respira_edit', 'texto_respira'));
    }

    public function EditConteudoRespira(Request $request, $id)
    {
        $edit_content = ConteudoRespira::findOrFail($id);

        $edit_content->update([
            'titulo'    => $request->titulo,
            'descricao' => $request->descricao,
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            File::delete('img/conteudo/'.$edit_content->imagem);

            $requestImage = $request->imagem;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/conteudo'), $imageName);

            $edit_content->update([
                'imagem'  => $imageName,
            ]);
        }

        return redirect()->route('admin.respirasaude.pag');
    }

    public function DeleteConteudoRespira($id)
    {
        $conteudo = ConteudoRespira::findOrFail($id);
        File::delete('img/conteudo/'.$conteudo->imagem);

        $conteudo->delete();

        return redirect()->route('admin.respirasaude.pag');
    }
}
