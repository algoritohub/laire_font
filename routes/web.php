<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PesquisadorController;
use App\Http\Controllers\AcessibilidadeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ConteudoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ConteudoRespiraController;


// +------------------------------------------------------------+
// | LAIRE                                                      |
// +------------------------------------------------------------+

// HOME LAIRE
Route::get('/', [PageController::class, "HomeLaire"])->name('home.laire');

// MAPA DO SITE
Route::get('/mapa', function () {
    return view('laire.mapa_site');
})->name('mapa_site');

// FEED DE NOTÍCIAS
Route::get('/feed/noticias', [NoticiaController::class, "feedNoticias"])->name('feed_noticia');

// BANNER INICIAL
Route::get('/banner/respira/out', [AdminController::class, "BannerOut"])->name('banner_out');


// +------------------------------------------------------------+
// | RESPIRASAÚDE                                               |
// +------------------------------------------------------------+

// RESPIRASAÚDE HOME
Route::get('/respira-saude', [ConteudoController::class, "HomeRespira"])->name('home.respira_saude');

// PROJETO1
Route::get('/respira-saude/projeto/1', [ConteudoController::class, "Projeto1"])->name('projeto1');

// PESQUISADORES 1
Route::get('/respira-saude/projeto/1/pesquisador/{id}', [ConteudoController::class, "PesquisadoresProjeto1"])->name('pesquisadores_projeto_1');


// PROJETO2
Route::get('/respira-saude/projeto/2', [ConteudoController::class, "Projeto2"])->name('projeto2');

// PESQUISADORES 2
Route::get('/respira-saude/projeto/2/pesquisadores/{id}', [ConteudoController::class, "PesquisadoresProjeto2"])->name('pesquisadores_projeto_2');


// PROJETO3
Route::get('/respira-saude/projeto/3', [ConteudoController::class, "projeto3"])->name('projeto3');

// PESQUISADORES 3
Route::get('/respira-saude/projeto/3/pesquisadores/{id}', [ConteudoController::class, "PesquisadoresProjeto3"])->name('pesquisadores_projeto_3');





// CONVIVENDO COM A ASMA E-BOOK
Route::get('/banner/evento/material/{tipo}', [ConteudoController::class, "BannerEbook"])->name('banner_ebook');

// CONVIVENDO COM A ASMA E-BOOK RESPIRA
Route::get('/banner/evento/conteúdo/{tipo}', [ConteudoController::class, "BannerEvento"])->name('banner_evento');



// PÁGINA DE REVISÃO SISTEMÁTICA
Route::get('/respira-saude/revisao-sistematica', [ConteudoController::class, "PagRevisaoSistematica"])->name('pag_revisao_sistematica');

// DOENÇAS CRÔNICAS
Route::get('/respira-saude/doenca/cronica/{id}', [ConteudoController::class, "DoencaCronica"])->name('doenca_cronica');

// DOENÇAS AGUDA
Route::get('/respira-saude/doenca/aguda/{id}', [ConteudoController::class, "DoencaAguda"])->name('doenca_aguda');

// EXIBIR MODAL PESQUISADORES
Route::get('/respira-saude/projeto/{pag}/pesquisador/{id}', [PesquisadorController::class, "modalPesquisador"])->name('modal_pesquisador');

// PÁGINA DE EVENTOS ENCERRADOS
Route::get('/respira-saude/eventos/encerrados', [EventosController::class, "EventosEncerrados"])->name('eventos_encerrados');

// PÁGINA DE EVENTOS FUTUROS
Route::get('/respira-saude/eventos/futuros', [EventosController::class, "EventosFuturos"])->name('eventos_futuros');

// PÁGINA DO EVENTO
Route::get('/respira-saude/evento/1', [EventosController::class, "EventoPagina"])->name('evento_pagina');


// +------------------------------------------------------------+
// | BLOG                                                       |
// +------------------------------------------------------------+

// BLOG HOME
Route::get('/blog', function () {
    return view('blog.home');
})->name('blog');

// BLOG POSTAGEM
Route::get('/blog/postagem/', [BlogController::class, "PostagemBlog"])->name('postagem_blog');

//FEED CATEGORIA
Route::get('/blog/feed_categorias', function () {
    return view('blog.feed_categorias');
})->name('categorias');

//FEED POST
Route::get('/blog/feed_post', function () {
    return view('blog.feed_post');
})->name('post');

//POSTAGENS
Route::get('/blog/postagens', function () {
    return view('blog.postagens');
})->name('postagens');


// +------------------------------------------------------------+
// | DASHBOARD                                                  |
// +------------------------------------------------------------+

// DASHBOARD HOME
Route::get('/dashboard', [AdminController::class, "login"])->name('dashboard');

// LOGAR USUÁRIO ADMIN
Route::post('/dashboard/painel/logar', [AdminController::class, "logar"])->name('admin.logar');

// LOGOUT USUÁRIO ADMIN
Route::get('/dashboard/painel/logout', [AdminController::class, "logout"])->name('admin.logout');

// PAINEL ADMINISTRATIVO GERAL
Route::get('/dashboard/painel/geral', [AdminController::class, "geral"])->name('admin.painel_geral');

// PAINEL PESQUISADORES
Route::get('/dashboard/painel/pesquisadores', [AdminController::class, "PagPesquisadores"])->name('admin.pesquisadores.pag');

// PÁGINA DE DOENÇAS
Route::get('/dashboard/painel/doencas', [AdminController::class, "PagDoencas"])->name('admin.doencas.pag');

// ADD DOENÇAS
Route::post('/dashboard/painel/add/doenca', [ConteudoController::class, "AddNewDoenca"])->name('admin.doenca.add');

// PAINEL RESPIRASAÚDE
Route::get('/dashboard/painel/respirasaude', [AdminController::class, "PagRespiraSaude"])->name('admin.respirasaude.pag');

// ADD CONTEÚDO RESPIRA
Route::post('/dashboard/painel/add/conteudo/respirasaude', [ConteudoRespiraController::class, "AddConteudoRespira"])->name('admin.respirasaude.add');

// EXIBIR EDITOR DE DOENÇA
Route::get('/dashboard/painel/publicacao/edit/doenca/{id}', [ConteudoController::class, "editDoenca"])->name('admin.edit_doenca');

// EDITAR DOENÇA
Route::post('/dashboard/painel/publicacao/editar/doenca/{id}', [ConteudoController::class, "editarDoenca"])->name('admin.editar_doenca');

// DELETAR DOENÇA
Route::get('/dashboard/painel/publicacao/delete/doenca/{id}', [ConteudoController::class, "deleteDoenca"])->name('admin.delete_doenca');

// EXIBIR MODAL EDITAR RESPIRASAÚDE
Route::get('/dashboard/painel/edit/modal/respirasaude/{id}', [ConteudoRespiraController::class, "ExibirModalEditConteudoRespira"])->name('admin.respirasaude.modal');

// EDITAR RESPIRASAÚDE
Route::post('/dashboard/painel/edit/conteudo/respirasaude/{id}', [ConteudoRespiraController::class, "EditConteudoRespira"])->name('admin.respirasaude.edit');

// EDITAR RESPIRASAÚDE
Route::post('/dashboard/painel/edit/conteudo/respirasaude', [ConteudoRespiraController::class, "DeleteConteudoRespira"])->name('admin.respirasaude.delete');

// PAINEL POSTAGEM
Route::get('/dashboard/painel/publicacao', [AdminController::class, "publicacao"])->name('admin.painel_publicacao');

// POSTAR NOVO PESQUISADOR
Route::post('/dashboard/painel/publicacao/new/pesquisador', [PesquisadorController::class, "newPesquisador"])->name('admin.new_pesquisador');

// POSTAR NOVO CONTEÚDO
Route::post('/dashboard/painel/publicacao/new/conteudo', [ConteudoController::class, "newPesquisador"])->name('admin.new_conteudo');





// EXIBIR EDITOR DE CONTEÚDO
Route::get('/dashboard/painel/publicacao/edit/conteudo/{id}', [ConteudoController::class, "editConteudo"])->name('admin.edit_conteudo');

// EDITAR CONTEÚDO
Route::post('/dashboard/painel/publicacao/editar/conteudo/{id}', [ConteudoController::class, "editarConteudo"])->name('admin.editar_conteudo');

// DELETAR CONTEÚDO
Route::get('/dashboard/painel/publicacao/delete/conteudo/{id}', [ConteudoController::class, "deleteConteudo"])->name('admin.delete_conteudo');

// EXIBIR EDITOR DE PESQUISADORES
Route::get('/dashboard/painel/publicacao/edit/pesquisadores/{id}', [PesquisadorController::class, "editPesquisador"])->name('admin.edit_pesquisadores');

// EDITAR PESQUISADORES
Route::post('/dashboard/painel/publicacao/editar/pesquisadores/{id}', [PesquisadorController::class, "editarPesquisador"])->name('admin.editar_pesquisadores');

// DELETAR PESQUISADORES
Route::get('/dashboard/painel/publicacao/delete/pesquisadores/{id}', [PesquisadorController::class, "deletePesquisador"])->name('admin.delete_pesquisadores');

// PAINEL BLOG
Route::get('/dashboard/painel/blog', [AdminController::class, "blog"])->name('admin.painel_blog');

Route::post('/dashboard/painel/add/post', [BlogController::class, "AddPostBlog"])->name('admin.add_blog');

// EDITAR POSTAGEM
Route::get('/dashboard/painel/blog/editar/post/{id}', [BlogController::class, "editPost"])->name('admin.editar_post_blog');

// DELETAR POSTAGEM
Route::get('/dashboard/painel/blog/delete/post/{id}', [BlogController::class, "deletePost"])->name('admin.deletar_post_blog');

// EXIBIR  DE EDIÇÃO
Route::get('/dashboard/painel/blog/edit/post/{id}', [BlogController::class, "showEditPost"])->name('admin.show_edit_post_blog');

// PAINEL CONFIGURAÇÕES
Route::get('/dashboard/painel/config', [AdminController::class, "config"])->name('admin.painel_config');

//MENSAGENS
Route::get('/dashboard/mensagens', function () {
    return view('dashboard.mensagens');
})->name('mensagens');


// +------------------------------------------------------------+
// | ACESSIBILIDADES                                            |
// +------------------------------------------------------------+

// AUMENTAR A FONTE
Route::get('/acessibilidade/font/up', [AcessibilidadeController::class, "ScaleFontUp"])->name('font_up');

// DIMINUIR A FONTE
Route::get('/acessibilidade/font/down', [AcessibilidadeController::class, "ScaleFontDown"])->name('font_down');

// IDIOMA INGLÊS
Route::get('/acessibilidade/idioma/ing', [AcessibilidadeController::class, "idiomaIng"])->name('idioma_ingles');

// IDIOMA PROTUGUÊS
Route::get('/acessibilidade/idioma/pt', [AcessibilidadeController::class, "idiomaPtBr"])->name('idioma_portugues');


// +------------------------------------------------------------+
// | ROTAS ADICIONAIS                                           |
// +------------------------------------------------------------+

// ADICIONAR USUÁRIO ADMIN
Route::get('/dashboard/master', [AdminController::class, "master"])->name('master');

// GERAR UMA NOVA PESQUISA MANUALMENTE
Route::get('/dashboard/new/pesquisa', [AdminController::class, "novaPesquisa"])->name('new.pesquisa');

// FECHAR BANNER PWA
Route::get('/dashboard/closed/banner/pwa', [AdminController::class, "fecharBannerPWA"])->name('banner.pwa');


