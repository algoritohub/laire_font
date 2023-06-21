<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use File;

class BlogController extends Controller
{

    // POSTAR NO BLOG
    public function AddPostBlog(Request $request)
    {
        $post = new Blog;
        $post->titulo    = $request->titulo;
        $post->subtitulo = $request->subtitulo;
        $post->categoria = $request->categoria;
        $post->texto     = $request->texto;
        $post->autor     = 1;
        $post->registro  = date('d-m-Y');
        $post->views     = 0;
        $post->stts      = "ativo";
        $post->texto2    = $request->texto2;
        $post->texto3    = $request->texto3;
        $post->texto4    = $request->texto4;
        $post->texto5    = $request->texto5;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $requestImage = $request->imagem;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/pub'), $imageName);

            $post->imagem = $imageName;
        }

        $post->save();

        return redirect()->route('admin.painel_blog');
    }

    // EXIBIR MODAL DE EDIÇÃO
    public function showEditPost($id)
    {
        $posts = DB::select("SELECT * FROM blogs ORDER BY id DESC");
        $post_edit = Blog::where('id', $id)->first();

        return view('dashboard.blog', compact('posts', 'post_edit'));
    }

    // EDITAR POSTAGEM
    public function editPost(Request $request, $id)
    {
        $editar = Blog::findOrFail($id);

        $editar->update([
            'titulo'    => $request->titulo,
            'subtitulo' => $request->subtitulo,
            'texto'     => $request->texto,
            'texto2'    => $request->texto2,
            'texto3'    => $request->texto3,
            'texto4'    => $request->texto4,
            'texto5'    => $request->texto5,
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            File::delete('img/pub/'.$editar->imagem);

            $requestImage = $request->imagem;
            $extension    = $requestImage->extension();
            $imageName    = md5($requestImage->getClientOriginalName()) . strtotime("now") . "." . $extension;
            $requestImage->move(public_path('img/doencas'), $imageName);

            $editar->update([
                'imagem' => $imageName,
            ]);
        }

        return redirect()->route('admin.painel_blog');
    }

    public function PostagemBlog()
    {
        return view('blog.postagens');
    }

    // DELETAR POSTAGEM
    public function deletePost($id)
    {
        Blog::findOrfail($id)->delete();

        return redirect()->route('admin.painel_blog');
    }
}
