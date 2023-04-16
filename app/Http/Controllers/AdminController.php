<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LogRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Pesquisa;
use App\Models\Admin;

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
        // if(session()->has('admin')){
        //     return view('dashboard.painel_geral');
        // }
        // else{
        //     return redirect()->route('dashboard');
        // }

        return view('dashboard.painel_geral');
    }

    // CRIE UM NOVO USUÁRIO ADMIN
    public function publicacao()
    {
        // if(session()->has('admin')){
        //     return view('dashboard.publicacao');
        // }
        // else{
        //     return redirect()->route('dashboard');
        // }
        return view('dashboard.publicacao');
    }

    public function blog()
    {
        // if(session()->has('admin')){
        //     return view('dashboard.blog');
        // }
        // else{
        //     return redirect()->route('dashboard');
        // }
        return view('dashboard.blog');
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
        return redirect()->route('admin.painel_geral');
    }

    // CRIE UM NOVO USUÁRIO ADMIN
    public function master()
    {
        $admin = new Admin;
        $admin->nome     = 'Algorito Hub';
        $admin->email    = 'admin@algoritohub.com.br';
        $admin->nivel    = 3;
        $admin->senha    = Hash::make('algorito2023');
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

    public function logout()
    {
        session()->forget('admin');
        return redirect()->route('dashboard');
    }
}
