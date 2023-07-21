<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LogRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Pesquisa;
use App\Models\ConteudoRespira;
use App\Models\Admin;
use App\Models\Pesquisador;
use App\Models\Blog;
use App\Models\Doenca;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // LOGIN DASHBOARD
    public function login() {

        // VERIFICAR SE JÁ EXISTE UMA SESSÃO
        if(session()->has('admin')){
            return redirect()->route('admin.painel_geral');
        }

        // ENVIAR ERROS PARA LOGIN
        $erro = session('erro');
        $data = [];

        if(!empty($erro)){
            $data = [
                'erro' => $erro
            ];
        }

        return view('dashboard.login', $data);
    }

    public function BannerOut()
    {
        $session_banner = session('banner');

        if (isset($session_banner)) {
            session()->forget('banner');
        }
        else{
            session()->put('banner', 'checked');
        }

        return redirect()->route('home.laire');
    }

    // CRIE UM NOVO USUÁRIO ADMIN
    public function geral()
    {
        if(session()->has('admin')){

            $doencas_count       = count(Doenca::all());
            $pesquisadores_count = count(Pesquisador::all());
            $postagens_count     = count(Blog::all());

            return view('dashboard.painel_geral', compact('postagens_count', 'pesquisadores_count', 'doencas_count'));
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    // CRIE UM NOVO USUÁRIO ADMIN
    public function publicacao()
    {
        if(session()->has('admin')){

            $pesquisadores = DB::select("SELECT * FROM pesquisadors ORDER BY id DESC");
            $doencas       = DB::select("SELECT * FROM doencas ORDER BY id DESC");
            $conteudos     = DB::select("SELECT * FROM conteudos ORDER BY id DESC");

            return view('dashboard.publicacao', compact('pesquisadores', 'doencas', 'conteudos'));
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function blog()
    {
        if(session()->has('admin')){

            $posts = DB::select("SELECT * FROM blogs ORDER BY id DESC");

            return view('dashboard.blog', compact('posts'));
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function PagPesquisadores()
    {
        if(session()->has('admin')){

            $pesquisadores = Pesquisador::orderBy('posicao', 'ASC')->get();

            return view('dashboard.pesquisadores', compact('pesquisadores'));
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function PagRespiraSaude()
    {
        if(session()->has('admin')){

            $respira = DB::select("SELECT * FROM conteudo_respiras ORDER BY id DESC");

            return view('dashboard.respira_saude', compact('respira'));
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function PagDoencas()
    {
        if(session()->has('admin')){

            $doencas = DB::select("SELECT * FROM doencas ORDER BY id DESC");

            return view('dashboard.doencas', compact('doencas'));
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function PagEventos()
    {
        if(session()->has('admin')){

            $eventos  = DB::select("SELECT * FROM eventos ORDER BY id DESC");
            $noticias = DB::select("SELECT * FROM noticias ORDER BY id DESC");

            return view('dashboard.eventos', compact('eventos', 'noticias'));
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function config()
    {
        if(session()->has('admin')){
            return view('dashboard.configuracoes');
        }
        else{
            return redirect()->route('dashboard');
        }
    }

    public function logar(LogRequest $request)
    {
        // VERIFICAR SE JÁ EXISTE LOGIN
        if(session()->has('admin')){
            return redirect()->route('admin.painel_geral');
        }

        // RETORNAR TODOS O ERROS DE REQUEST
        $request->validated();

        // VERIFICAÇÃO DE USUÁRIO
        $email = trim($request->input('email'));
        $senha = trim($request->input('senha'));

        $admin = Admin::where('email', $email)->first();

        // VERIFICAR E-MAIL
        if(!$admin)
        {
            session()->flash('erro', 'O usuário não existe!');
            return redirect()->route('dashboard');
        }

        // VERIFICAR SENHA
        if(!Hash::check($senha, $admin->senha))
        {
            session()->flash('erro', 'A senha está incorreta!');
            return redirect()->route('dashboard');
        }

        $admins  = Admin::findOrFail($admin->id);
        $checkin = date('d-m-Y H:i:s');

        $admins->update([
            'checkin' => $checkin,
        ]);

        // CRIAR NOVA SESSÃO
        session()->put('admin', $admin);

        $doencas_count       = count(Doenca::all());
        $pesquisadores_count = count(Pesquisador::all());
        $postagens_count     = count(Blog::all());

        return view('dashboard.painel_geral', compact('postagens_count', 'pesquisadores_count', 'doencas_count'));
    }

    // CRIE UM NOVO USUÁRIO ADMIN
    public function master()
    {
        $admin = new Admin;
        $admin->nome     = 'Administrador';
        $admin->email    = 'admin@ufrn.br';
        $admin->nivel    = 3;
        $admin->senha    = Hash::make('admin@laire2023');
        $admin->checkin  = '00/00/0000';
        $admin->checkout = '00/00/0000';
        $admin->save();

        echo 'Usuário admin adicionado!';
    }

    // CRIAR UMA NOVA PÁGINA MANUALMENTE
    public function novaPesquisa()
    {
        $pesquisa = new Pesquisa;
        $pesquisa->categoria = 'Sistema';
        $pesquisa->nome      = 'Desenvolvimento e validação de um sistema eletrônico para Avaliação, Suporte e Monitoramento da Asma (e-ASMA)';
        $pesquisa->descricao = 'A asma é uma doença respiratória crônica caracterizada pela elevada prevalência, mortalidade e custos para o SUS, sendo assim considerada um grave problema de saúde pública, especialmente em países em desenvolvimento como o Brasil';
        $pesquisa->imagem    = 'imagem_fundo.jpg';
        $pesquisa->stts      = 'concluido';
        $pesquisa->apelido   = 'projeto3';
        $pesquisa->save();

        echo 'Pesquisa adicionado!';
    }

    public function positionUp()
    {
        
    }

    public function positionDown()
    {

    }

    public function fecharBannerPWA()
    {
        session()->put('banner_pwa', 'closed');

        return back();
    }

    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('dashboard');
    }
}
