<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Pesquisa;
use Illuminate\Support\Facades\DB;
use File;

class EventoController extends Controller
{
    // ADICIONAR EVENTO NOVO
    public function AddNewEventos(Request $request)
    {
        $evento = new Evento;
        $evento->titulo    = $request->titulo;
        $evento->subtitulo = $request->subtitulo;
        $evento->texto     = $request->texto;
        $evento->inicio    = $request->inicio;
        $evento->final     = $request->final;
        $evento->stts      = "show";

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $requestImage = $request->imagem;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/eventos'), $imageName);

            $evento->imagem = $imageName;
        }

        $evento->save();

        return redirect()->route('admin.eventos.pag');
    }

    public function ShowEditEvento($id)
    {
        $evento_edit  = Evento::where('id', $id)->first();
        $eventos      = DB::select("SELECT * FROM eventos ORDER BY id DESC");
        $noticias     = DB::select("SELECT * FROM noticias ORDER BY id DESC");

        $texto_evento = strip_tags($evento_edit->texto);

        return view('dashboard.eventos', compact('evento_edit', 'eventos', 'noticias', 'texto_evento'));
    }

    public function EditEvento(Request $request, $id)
    {
        $edit_evento = Evento::findOrFail($id);
        $edit_evento->update([
            'titulo'    => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'texto'     => $request->texto,
            'inicio'    => $request->inicio,
            'final'     => $request->final,
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            File::delete('img/eventos/'.$edit_evento->imagem);

            $requestImage = $request->imagem;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/eventos'), $imageName);

            $edit_evento->update([
                'imagem' => $imageName,
            ]);
        }

        return redirect()->route('admin.eventos.pag');
    }

    public function DeleteEvento($id)
    {
        $evento_del = Evento::findOrFail($id);
        File::delete('img/eventos/'.$evento_del->imagem);

        $evento_del->delete();

        return redirect()->route('admin.eventos.pag');
    }
}
