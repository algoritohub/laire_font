<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    // EXIBIR MODAL DE EDIÇÃO
    public function showEditPost($id)
    {
        return view('dashboard.blog', ['postagem_edit' => $id]);
    }

    // EDITAR POSTAGEM
    public function editPost(Request $request, $id)
    {
        $editar = Blog::findOrFail($id);

        $editar->update([
            'titulo'    => $request->titulo,
            'subtitulo' => $request->titulo,
            'texto'     => $request->titulo,
        ]);

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
