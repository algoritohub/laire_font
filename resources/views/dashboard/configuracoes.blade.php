@extends('dashboard.layout.main')
@section('titulo', 'RespiraAdmin | Publicações')
@section('conteudo')

<section class="w-[100%] p-[30px] inline-block">
    {{--  --}}
    <div class="w-[100%] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <img src="/img/text.png" class="float-left mr-[15px]"> <p class="float-left text-[#212121] mt-[3px] font-bold text-[23px]">Configurações</p>
        </div>
        {{--  --}}
        <div class="w-[70%] mt-[60px] inline-block float-left">
            {{--  --}}
            <p class="font-bold text-[18px] pl-[15px] border-l-[3px] border-l-[#00FF8C]">Alterar acesso</p>
            {{--  --}}
            <p class="mt-[20px] text-[12px]">Altere as informações de acesso do seu acesso administrativo, essa operação necessitará de confirmação de senha atual.</p>
        </div>
        {{--  --}}
        <div class="w-[30%] inline-block float-left">
            {{--  --}}
            <button id="bt_conf1" class="w-[150px] h-[30px] rounded-[8px] mt-[100px] bg-[#FFC122] text-[#080E45] text-[11px] float-right">Alterar acesso</button>
        </div>
        {{-- CONTEÚDO --}}
        <div class="modal_config1">
            {{--  --}}
            <div class="w-[400px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="float-left w-[50%]">
                        {{--  --}}
                        <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Alterar acesso</p>
                    </div>
                    {{--  --}}
                    <div class="float-left w-[50%]">
                        {{--  --}}
                        <p id="fechar_modal_config1" class="float-right text-[16px] cursor-pointer">✕</p>
                    </div>
                </div>
                {{--  --}}
                <form action="" method="POST">
                    @csrf
                    <table class="w-[100%] mt-[40px]">
                        {{--  --}}
                        <tr>
                            <td>
                                <p class="">Nova senha</p>
                            </td>
                        </tr>
                        {{--  --}}
                        <tr>
                            <td>
                                <input class="w-[100%] pl-[10px] border-[2px] border-[#00FF8C] mt-[5px] mb-[5px] h-[40px] rounded-[6px]" type="password" name="senha">
                            </td>
                        </tr>
                        {{--  --}}
                        <tr>
                            <td>
                                <p class="">Confirme nova senha</p>
                            </td>
                        </tr>
                        {{--  --}}
                        <tr>
                            <td>
                                <input class="w-[100%] pl-[10px] border-[2px] border-[#00FF8C] mt-[5px] mb-[10px] h-[40px] rounded-[6px]" type="password" name="atualsenha">
                            </td>
                        </tr>
                        {{--  --}}
                        <tr>
                            <td>
                                <p class="">Senha atual</p>
                            </td>
                        </tr>
                        {{--  --}}
                        <tr>
                            <td>
                                <input class="w-[100%] pl-[10px] border-[2px] border-[#00FF8C] mt-[5px] mb-[10px] h-[40px] rounded-[6px]" type="password" name="confsenha">
                            </td>
                        </tr>
                        {{--  --}}
                        <tr>
                            <td>
                                <p class="text-center text-[12px]">Esqueceu sua senha?</p>
                            </td>
                        </tr>
                        {{--  --}}
                        <tr>
                            <td>
                                <button class="w-[100%] h-[40px] mt-[10px] bg-[#00FF8C] font-bold text-[#080E45] rounded-[6px]">Entrar</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        {{--  --}}
        <hr class="my-[20px]">
        {{--  --}}
        <div class="w-[70%] mt-[60px] inline-block float-left">
            {{--  --}}
            <p class="font-bold text-[18px] pl-[15px] border-l-[3px] border-l-[#00FF8C]">Criar novos acessos <button class="px-[10px] ml-[10px] h-[20px] text-[#080E45] bg-[#00FF8C] rounded-[5px] text-[9px]">Master</button></p>
            {{--  --}}
            <p class="mt-[20px] text-[12px]">Crie novos usuários administrativos para terem acesso ao dashboard, o novo usuário poderá alterar a senha criada pelo usuário master sempre que precisar.</p>
        </div>
        {{--  --}}
        <div class="w-[30%] inline-block float-left">
            {{--  --}}
            <button class="w-[150px] h-[30px] rounded-[8px] mt-[100px] bg-[#FFC122] text-[#080E45] text-[11px] float-right">Criar acesso</button>
        </div>
        {{--  --}}
        <hr class="my-[20px]">
        {{--  --}}
        <div class="w-[70%] mt-[60px] inline-block float-left">
            {{--  --}}
            <p class="font-bold text-[18px] pl-[15px] border-l-[3px] border-l-[#00FF8C]">Gerenciar acessos <button class="px-[10px] ml-[10px] h-[20px] text-[#080E45] bg-[#00FF8C] rounded-[5px] text-[9px]">Master</button></p>
            {{--  --}}
            <p class="mt-[20px] text-[12px]">Gerencie os logs de acessos e atualizações do dashboard, acompanhe os logs de entra e saída dos usuários administrativos, realize bloqueio de acesso e exclusão de usuários administrativos.</p>
        </div>
        {{--  --}}
        <div class="w-[30%] inline-block float-left">
            {{--  --}}
            <button class="w-[150px] h-[30px] rounded-[8px] mt-[100px] bg-[#FFC122] text-[#080E45] text-[11px] float-right">Gerenciar</button>
        </div>
    </div>
</section>
@endsection

