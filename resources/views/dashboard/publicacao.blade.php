@extends('dashboard.layout.main')
@section('titulo', 'RespiraAdmin | Publicações')
@section('conteudo')

@php
    // RESGATE DE PROFISSIONAL
    // $conteudos = Illuminate\Support\Facades\DB::select("SELECT * FROM conteudos");
    // $contador1 = count($conteudos);

    // RESGATE DE PESQUISADORES
    // $pesquisadores = Illuminate\Support\Facades\DB::select("SELECT * FROM pesquisadors");
    // RESGATE DE PESQUISAS
    // $pesquisas     = Illuminate\Support\Facades\DB::select("SELECT * FROM pesquisas");
    // RESGATE DE DOENÇA
    // $doencas       = Illuminate\Support\Facades\DB::select("SELECT * FROM doencas");

    // RESGATE DE GET
    @$erro_msn     = $_GET["erro"];

    // PDO
    $name_banco    = "laire_temp";
    $conectDB      = 'mysql:host=db4free.net;dbname='.$name_banco;
    $name_user     = "laire_ufrn";
    $pass_banco    = "Laire@2023";

    $conn          = new PDO($conectDB, $name_user, $pass_banco);

    // PDO RESGATE DE CONTEÚDO
    $stmt          = $conn->prepare('SELECT * FROM conteudos');
    $stmt->execute();
    $conteudos     = $stmt->fetchAll();
    $contador1     = count($conteudos);

    // PDO RESGATE DE PESQUISADORES
    $stmt          = $conn->prepare('SELECT * FROM pesquisadors');
    $stmt->execute();
    $pesquisadores = $stmt->fetchAll();

    // PDO RESGATE DE PESQUISAS
    $stmt          = $conn->prepare('SELECT * FROM pesquisas');
    $stmt->execute();
    $pesquisas     = $stmt->fetchAll();

    // PDO RESGATE DE DOENÇA
    $stmt          = $conn->prepare('SELECT * FROM doencas');
    $stmt->execute();
    $doencas       = $stmt->fetchAll();

@endphp

<section class="w-[100%] p-[30px] inline-block">
    {{--  --}}
    <div class="w-[100%] inline-block">
        {{--  --}}
        <img src="/img/text.png" class="float-left mr-[15px]"> <p class="float-left text-[#212121] mt-[3px] font-bold text-[23px]">Publicações</p>
        {{--  --}}
        @if (isset($erro_msn) AND !empty($erro_msn))
        {{--  --}}
        <div class="modal_erro_geral">
            {{--  --}}
            <div class="w-[40%] p-[20px] bg-[#ffffff]  shadow-lg mt-[30px] ml-[30px] rounded-[10px]">
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="text-[orange] text-[14px] mt-[5px]">Algo deu errado nesta operação, <a href="{{ route('admin.painel_publicacao') }}"><b>clique</b></a> para tente novamente!</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="{{ route('admin.painel_publicacao') }}"><p class="float-right mt-[5px] text-[14px] text-[orange] cursor-pointer">✕</p></a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    {{--  --}}
    <div class="w-[100%] mt-[30px] inline-block">
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <p class="text-[20px] font-bold mt-[10px]">Conteúdos</p>
        </div>
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <button id="btn_novo" class="px-[40px] h-[40px] float-right rounded-[100px] bg-[#080E45] text-[#00FF8C] text-[11px] font-bold">Add novo</button>
        </div>
        {{--  --}}
        <div style="border-radius: 5px 5px 0px 0px;" class="w-[100%] p-[10px] mt-[20px] bg-[#00FF8C] inline-block">
            {{--  --}}
            <table class="w-[100%]">
                <tr>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">ID</p></td>
                    <td class="w-[30%]"><p class="text-[#212121] text-center text-[11px] font-bold">PÁGINA</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">BLOCO</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">POSIÇÃO</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">PUBLIC</p></td>
                    <td class="w-[30%]"></td>
                </tr>
            </table>
        </div>
        {{--  --}}
        <div class="w-[100%] p-[10px] border-[1px] mt-[-5px] border-[#00FF8C] bg-[#fafafa] overflow-scroll h-[200px] inline-block">
            {{--  --}}
            @foreach ($conteudos as $content)
            <table class="w-[100%]">
                <tr>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $content['id'] }}</p></td>
                    <td class="w-[30%]"><p class="text-[#212121] text-center text-[11px]">{{ $content['pagina'] }}</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $content['bloco'] }}</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $content['posicao'] }}</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $content['publicador'] }}</p></td>
                    <td class="w-[30%]">
                        <ul class="float-right">
                            <li class="inline-block ml-[10px]"><a href="{{ route('admin.edit_conteudo', ['id' => $content['id']]) }}"><button class="px-[20px] rounded-[100px] bg-[#FFC122] text-[11px] h-[30px] text-[#ffffff]">Editar</button></a></li>
                            <li class="inline-block ml-[10px]"><a href="{{ route('admin.delete_conteudo', ['id' => $content['id']]) }}"><button class="px-[20px] rounded-[100px] bg-[#00FF8C] text-[11px] h-[30px] text-[#080E45]">Delete</button></a></li>
                        </ul>
                    </td>
                </tr>
            </table>
            {{--  --}}
            <hr class="my-[10px]">
            @endforeach
        </div>
    </div>
    {{-- CONTEÚDO --}}
    <div class="modal_add_conteudo">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Novo conteúdo pesquisas</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p id="fechar_modal_add" class="float-right text-[16px] cursor-pointer">✕</p>
                </div>
            </div>
            {{--  --}}
            <form action="/php/add_new_conteudo.php" method="post" enctype="multipart/form-data">
                {{--  --}}
                @csrf
                {{--  --}}
                <div style="border-radius: 5px 5px 5px 5px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#00FF8C]">
                    {{--  --}}
                    <div class="w-[29%] mr-[1%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] mt-[10px] text-[12px] p-[5px] border-[1px] bg-[#ffffff]" name="pagina">
                            <option value="1">Projeto1</option>
                            <option value="2">Projeto2</option>
                            <option value="3">Projeto3</option>
                        </select>
                    </div>
                    {{--  --}}
                    <div class="w-[29%] ml-[1%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] mt-[10px] text-[12px] p-[5px] border-[1px] bg-[#ffffff]" name="bloco">
                            <option value="1">Resumo</option>
                            <option value="2">Importância</option>
                            <option value="3">Objetivo</option>
                            <option value="4">Métodos</option>
                            <option value="5">Resultados</option>
                        </select>
                    </div>
                    <div class="w-[15%] ml-[5%] inline-block float-left">
                        {{--  --}}
                        <div class="w-[100%] inline-block mt-[20px]">
                            {{--  --}}
                            <div class="w-[50%] inline-block float-left">
                                {{--  --}}
                                <p class="text-[12px] mt-[-2px] float-left">P1</p><input class="float-left ml-[10px]" type="radio" value="1" name="posicao">
                            </div>
                            {{--  --}}
                            <div class="w-[50%] inline-block float-left">
                                {{--  --}}
                                <p class="text-[12px] mt-[-2px] float-left">P2</p><input class="float-left ml-[10px]" type="radio" value="2" name="posicao">
                            </div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[12px] float-right">
                            <li class="inline-block mr-[20px]"><p id="bt_pt" class="font-bold text-[11px] text-[#212121] cursor-pointer">POR</p></li>
                            <li class="inline-block mr-[20px]"><p id="bt_eng" class="font-bold text-[11px] text-[#212121] cursor-pointer">ENG</p></li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{--  --}}
                    <div id="campos_pt" class="w-[100%] inline-block">
                        {{--  --}}
                        <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="titulo" placeholder="Titulo do bloco">
                        {{--  --}}
                        <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="subtitulo" placeholder="Subtitulo do bloco">
                        {{--  --}}
                        <textarea id="tiny_cont1" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto" placeholder="Escreva um texto para essa sessão!"></textarea>
                        {{-- BUTTON ADD PARÁGRAFO --}}
                        <button id="but_add_par1" class="w-[100%] h-[40px] rounded-[10px] text-[13px] my-[10px] bg-[#FFC122]">Adicionar um novo parágrafo</button>
                        {{-- NOVO PARAGRAFO --}}
                        <div id="paragrafo2" style="display: none;" class="w-[100%] mt-[20px] inline-block">
                            {{--  --}}
                            <textarea id="tiny_cont2" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto2" placeholder="Escreva um texto para essa sessão!"></textarea>
                            {{-- BUTTON ADD PARÁGRAFO --}}
                            <button id="but_add_par2" class="w-[100%] h-[40px] rounded-[10px] text-[13px] mt-[10px] bg-[#FFC122]">Adicionar um novo parágrafo</button>
                        </div>
                        {{-- NOVO PARAGRAFO --}}
                        <div id="paragrafo3" style="display: none;" class="w-[100%] mt-[20px] inline-block">
                            {{--  --}}
                            <textarea id="tiny_cont3" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto3" placeholder="Escreva um texto para essa sessão!"></textarea>
                            {{-- BUTTON ADD PARÁGRAFO --}}
                            <button id="but_add_par3" class="w-[100%] h-[40px] rounded-[10px] text-[13px] mt-[10px] bg-[#FFC122]">Adicionar um novo parágrafo</button>
                        </div>
                        {{-- NOVO PARAGRAFO --}}
                        <div id="paragrafo4" style="display: none;" class="w-[100%] mt-[20px] inline-block">
                            {{--  --}}
                            <textarea id="tiny_cont4" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto4" placeholder="Escreva um texto para essa sessão!"></textarea>
                            {{-- BUTTON ADD PARÁGRAFO --}}
                            <button id="but_add_par4" class="w-[100%] h-[40px] rounded-[10px] text-[13px] mt-[10px] bg-[#FFC122]">Adicionar um novo parágrafo</button>
                        </div>
                        {{-- NOVO PARAGRAFO --}}
                        <div id="paragrafo5" style="display: none;" class="w-[100%] mt-[20px] inline-block">
                            {{--  --}}
                            <textarea id="tiny_cont5" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto5" placeholder="Escreva um texto para essa sessão!"></textarea>
                        </div>
                    </div>
                    {{--  --}}
                    <div id="campos_eng" style="display: none;" class="w-[100%] inline-block">
                        {{--  --}}
                        <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="titulo_eng" placeholder="Block title">
                        {{--  --}}
                        <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="subtitulo_eng" placeholder="Block subtitle">
                        {{--  --}}
                        <textarea id="tiny_cont_eng_1" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto_eng" placeholder="Write a text for this session!"></textarea>
                        {{-- BUTTON ADD PARÁGRAFO --}}
                        <button id="but_add_par_eng_1" class="w-[100%] h-[40px] rounded-[10px] text-[13px] my-[10px] bg-[#FFC122]">Adicionar um novo parágrafo</button>
                        {{-- NOVO PARAGRAFO --}}
                        <div id="paragrafo_eng_2" style="display: none;" class="w-[100%] mt-[20px] inline-block">
                            {{--  --}}
                            <textarea id="tiny_cont_eng_2" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto2_eng" placeholder="Write a text for this session!"></textarea>
                            {{-- BUTTON ADD PARÁGRAFO --}}
                            <button id="but_add_par_eng_2" class="w-[100%] h-[40px] rounded-[10px] text-[13px] mt-[10px] bg-[#FFC122]">Adicionar um novo parágrafo</button>
                        </div>
                        {{-- NOVO PARAGRAFO --}}
                        <div id="paragrafo_eng_3" style="display: none;" class="w-[100%] mt-[20px] inline-block">
                            {{--  --}}
                            <textarea id="tiny_cont_eng_3" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto3_eng" placeholder="Write a text for this session!"></textarea>
                            {{-- BUTTON ADD PARÁGRAFO --}}
                            <button id="but_add_par_eng_3" class="w-[100%] h-[40px] rounded-[10px] text-[13px] mt-[10px] bg-[#FFC122]">Adicionar um novo parágrafo</button>
                        </div>
                        {{-- NOVO PARAGRAFO --}}
                        <div id="paragrafo_eng_4" style="display: none;" class="w-[100%] mt-[20px] inline-block">
                            {{--  --}}
                            <textarea id="tiny_cont_eng_4" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto4_eng" placeholder="Write a text for this session!"></textarea>
                            {{-- BUTTON ADD PARÁGRAFO --}}
                            <button id="but_add_par_eng_4" class="w-[100%] h-[40px] rounded-[10px] text-[13px] mt-[10px] bg-[#FFC122]">Adicionar um novo parágrafo</button>
                        </div>
                        {{-- NOVO PARAGRAFO --}}
                        <div id="paragrafo_eng_5" style="display: none;" class="w-[100%] mt-[20px] inline-block">
                            {{--  --}}
                            <textarea id="tiny_cont_eng_5" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto5_eng" placeholder="Write a text for this session!"></textarea>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem" type="file" name="imagem">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-10px] rounded-[10px]">Adicionar conteúdo</button>
                        </div>
                    </div>
                    <!--  -->
                    <input type="hidden" name="publicador" value="1">
                </div>
            </form>
        </div>
    </div>
    {{-- EDITAR CONTEUDO --}}
    @if (isset($editar_conteudo) AND !empty($editar_conteudo))
    {{--  --}}
    @php
        // $info_conteudo = Illuminate\Support\Facades\DB::select("SELECT * FROM conteudos WHERE id = '$editar_conteudo'");

        // PDO RESGATE DE INFORMAÇÕES
        $stmt = $conn->prepare('SELECT * FROM conteudos WHERE id = :id');
        $stmt->execute(array('id' => $editar_conteudo));
        $info_content = $stmt->fetchAll();
        foreach ($info_content as $info_conteudo) {}



    @endphp
    {{--  --}}
    <div class="modal_edit_conteudo">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div style="display: none;" id="mini_model_edit_content_img" class="w-[1000px] ml-[-40px] mt-[-40px] px-[40px] pt-[40px] pb-[0px] bg-[#5CD1FF] absolute inline-block">
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold text-[18px]">Editar imagens de bloco</p>
                    </div>
                    {{--  --}}
                    <div id="fechar_mini_model_edit_content_img" class="w-[20%] inline-block float-left"><p class="float-right text-[16px] cursor-pointer">✕</p></div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[5px] inline-block float-left">
                    {{--  --}}
                    <form action="/php/edit_img_conteudo.php" method="POST">
                        @csrf
                        {{--  --}}
                        <div class="w-[100%] inline-block">
                            {{--  --}}
                            <div class="w-[50%] inline-blog mt-[15px] mb-[30px] float-left">
                                {{--  --}}
                                <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_id1">Carregar uma imagem para conteúdo abaixo</label>
                                <!--  -->
                                <input style="display: none;" id="imagem_id1" type="file" name="imagem1">
                            </div>
                            {{--  --}}
                            <div class="w-[50%] inline-blog mt-[15px] mb-[30px] float-left">
                                <!--  -->
                                <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-8px] rounded-[10px]">Alterar imagem do conteúdo</button>
                            </div>
                        </div>
                        {{--  --}}
                        <input type="hidden" name="id" value="{{ $info_conteudo['id'] }}">
                    </form>
                </div>
            </div>
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Editar bloco de pesquisa</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <a href="{{ route('admin.painel_publicacao') }}"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
            {{--  --}}
            <form action="{{ route('admin.editar_conteudo', ['id' => $info_conteudo['id']]) }}" method="post" enctype="multipart/form-data">
                {{--  --}}
                @csrf
                {{--  --}}
                <div style="border-radius: 5px 5px 5px 5px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#00FF8C]">
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <p class="text-[11px] mt-[15px] ml-[12px] font-bold uppercase">Página ({{ $info_conteudo['pagina'] }})</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <p class="text-[11px] mt-[15px] font-bold uppercase">Bloco ({{ $info_conteudo['bloco'] }})</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <p class="text-[11px] mt-[15px] font-bold uppercase">Posição ({{ $info_conteudo['posicao'] }})</p>
                    </div>
                    {{--  --}}
                    <div class="w-[40%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[12px] float-right">
                            {{--  --}}
                            <li class="inline-block mr-[20px]">
                                <button id="edit_imagem_content" class="px-[30px] h-[30px] text-[10px] bg-[#080E45] rounded-[5px] text-[#ffffff]">editar imagem</button>
                            </li>
                            <li class="inline-block mr-[20px]"><p id="bt_pt_edt" class="font-bold text-[11px] text-[#212121] cursor-pointer">POR</p></li>
                            <li class="inline-block mr-[20px]"><p id="bt_eng_edt" class="font-bold text-[11px] text-[#212121] cursor-pointer">ENG</p></li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{-- CAMPOS PORTUGUÊS --}}
                    <div id="campos_edit_pt" class="w-[100%] inline-block">
                        {{--  --}}
                        <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="titulo" value="{{ $info_conteudo['titulo'] }}" placeholder="Titulo do bloco">
                        {{--  --}}
                        <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="subtitulo" value="{{ $info_conteudo['subtitulo'] }}" placeholder="Subtitulo do bloco">
                        {{--  --}}
                        <textarea id="tiny_cont6" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto" placeholder="Escreva um texto para essa sessão!">{{ $info_conteudo['texto'] }}</textarea>
                        {{-- PARAGRAFO2 --}}
                        @if (isset($info_conteudo['texto2']) AND !empty($info_conteudo['texto2']))
                            {{--  --}}
                            <div class="w-[100%] h-[10px]"></div>
                            {{--  --}}
                            <textarea id="tiny_cont7" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto2" placeholder="Escreva um texto para essa sessão!">{{ $info_conteudo['texto2'] }}</textarea>
                        @endif
                        {{-- PARAGRAFO3 --}}
                        @if (isset($info_conteudo['texto3']) AND !empty($info_conteudo['texto3']))
                            {{--  --}}
                            <div class="w-[100%] h-[10px]"></div>
                            {{--  --}}
                            <textarea id="tiny_cont8" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto3" placeholder="Escreva um texto para essa sessão!">{{ $info_conteudo[0]->texto3 }}</textarea>
                        @endif
                        {{-- PARAGRAFO4 --}}
                        @if (isset($info_conteudo['texto4']) AND !empty($info_conteudo['texto4']))
                            {{--  --}}
                            <div class="w-[100%] h-[10px]"></div>
                            {{--  --}}
                            <textarea id="tiny_cont9" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto4" placeholder="Escreva um texto para essa sessão!">{{ $info_conteudo['texto4'] }}</textarea>
                        @endif
                        {{-- PARAGRAFO5 --}}
                        @if (isset($info_conteudo['texto5']) AND !empty($info_conteudo['texto5']))
                            {{--  --}}
                            <div class="w-[100%] h-[10px]"></div>
                            {{--  --}}
                            <textarea id="tiny_cont10" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto5" placeholder="Escreva um texto para essa sessão!">{{ $info_conteudo['texto5'] }}</textarea>
                        @endif
                    </div>
                    {{-- CAMPOS INGLÊS --}}
                    <div id="campos_edit_eng" style="display: none;" class="w-[100%] inline-block">
                        {{--  --}}
                        <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="titulo_eng" value="{{ $info_conteudo['titulo_eng'] }}" placeholder="Block title">
                        {{--  --}}
                        <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="subtitulo_eng" value="{{ $info_conteudo['subtitulo_eng'] }}" placeholder="Block subtitle">
                        {{--  --}}
                        <textarea id="tiny_cont_eng_6" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto_eng" placeholder="Write a text for this session!">{{ $info_conteudo['texto_eng'] }}</textarea>
                        {{-- PARAGRAFO2 --}}
                        @if (isset($info_conteudo['texto2_eng']) AND !empty($info_conteudo['texto2_eng']))
                            {{--  --}}
                            <div class="w-[100%] h-[10px]"></div>
                            {{--  --}}
                            <textarea id="tiny_cont_eng_7" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto2_eng" placeholder="Write a text for this session!">{{ $info_conteudo['texto2_eng'] }}</textarea>
                        @endif
                        {{-- PARAGRAFO3 --}}
                        @if (isset($info_conteudo['texto3_eng']) AND !empty($info_conteudo['texto3_eng']))
                            {{--  --}}
                            <div class="w-[100%] h-[10px]"></div>
                            {{--  --}}
                            <textarea id="tiny_cont_eng_8" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto3_eng" placeholder="Write a text for this session!">{{ $info_conteudo['texto3_eng'] }}</textarea>
                        @endif
                        {{-- PARAGRAFO4 --}}
                        @if (isset($info_conteudo['texto4_eng']) AND !empty($info_conteudo['texto4_eng']))
                            {{--  --}}
                            <div class="w-[100%] h-[10px]"></div>
                            {{--  --}}
                            <textarea id="tiny_cont_eng_9" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto4_eng" placeholder="Write a text for this session!">{{ $info_conteudo['texto4_eng'] }}</textarea>
                        @endif
                        {{-- PARAGRAFO5 --}}
                        @if (isset($info_conteudo['texto5_eng']) AND !empty($info_conteudo['texto5_eng']))
                            {{--  --}}
                            <div class="w-[100%] h-[10px]"></div>
                            {{--  --}}
                            <textarea id="tiny_cont_eng_10" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto5_eng" placeholder="Write a text for this session!">{{ $info_conteudo['texto5_eng'] }}</textarea>
                        @endif
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-10px] rounded-[10px]">Atualizar conteúdo</button>
                        </div>
                    </div>
                    <!--  -->
                    <input type="hidden" name="publicador" value="1">
                </div>
            </form>
        </div>
    </div>
    @endif
    {{-- DOENÇAS --}}
    <div class="w-[100%] mt-[30px] inline-block">
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <p class="text-[20px] font-bold mt-[10px]">Doenças</p>
        </div>
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <button id="btn_doenca" class="px-[40px] h-[40px] float-right rounded-[100px] bg-[#080E45] text-[#00FF8C] text-[11px] font-bold">Add novo</button>
        </div>
        {{--  --}}
        <div style="border-radius: 5px 5px 0px 0px;" class="w-[100%] p-[10px] mt-[20px] bg-[#00FF8C] inline-block">
            {{--  --}}
            <table class="w-[100%]">
                <tr>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">ID</p></td>
                    <td class="w-[30%]"><p class="text-[#212121] text-center text-[11px] font-bold">DOENÇA</p></td>
                    <td class="w-[15%]"><p class="text-[#212121] text-center text-[11px] font-bold">TIPO</p></td>
                    <td class="w-[15%]"><p class="text-[#212121] text-center text-[11px] font-bold">TIPO</p></td>
                    <td class="w-[30%]"></td>
                </tr>
            </table>
        </div>
        {{--  --}}
        <div class="w-[100%] p-[10px] border-[1px] mt-[-5px] border-[#00FF8C] overflow-scroll bg-[#fafafa] h-[200px] inline-block">
            {{--  --}}
            @foreach ($doencas as $doencas_cont)
            <table class="w-[100%]">
                <tr>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $doencas_cont['id'] }}</p></td>
                    <td class="w-[30%]"><p class="text-[#212121] text-center text-[11px]">{{ $doencas_cont['nome'] }}</p></td>
                    <td class="w-[15%]"><p class="text-[#212121] text-center text-[11px]">{{ $doencas_cont['tipo'] }}</p></td>
                    <td class="w-[15%]"><p class="text-[#212121] text-center text-[11px]">{{ $doencas_cont['registro'] }}</p></td>
                    <td class="w-[30%]">
                        <ul class="float-right">
                            <li class="inline-block ml-[10px]"><a href="{{ route('admin.edit_doenca', ['id' => $doencas_cont['id']]) }}"><button class="px-[20px] rounded-[100px] bg-[#FFC122] text-[11px] h-[30px] text-[#ffffff]">Editar</button></a></li>
                            <li class="inline-block ml-[10px]"><a href="{{ route('admin.delete_doenca', ['id' => $doencas_cont['id']]) }}"><button class="px-[20px] rounded-[100px] bg-[#00FF8C] text-[11px] h-[30px] text-[#080E45]">Delete</button></a></li>
                        </ul>
                    </td>
                </tr>
            </table>
            {{--  --}}
            <hr class="my-[10px]">
            @endforeach
        </div>
    </div>
    {{-- ADICIONAR DOENÇA --}}
    <div class="modal_add_doenca">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Nova Doença</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p id="fechar_modal_doenca" class="float-right text-[16px] cursor-pointer">✕</p>
                </div>
            </div>
            {{--  --}}
            <form action="/php/add_new_doenca.php" method="post" enctype="multipart/form-data">
                {{--  --}}
                @csrf
                {{--  --}}
                <div style="border-radius: 5px 5px 5px 5px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#00FF8C]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] mt-[10px] text-[12px] p-[5px] border-[1px] bg-[#ffffff]" name="tipo">
                            <option value="1">Doenças respiratórias agudas</option>
                            <option value="2">Doenças respiratórias crônicas</option>
                        </select>
                    </div>
                    {{--  --}}
                    <div class="w-[60%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[15px]  float-right">
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">POR</li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">ENG</li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="nome" placeholder="Nome da doença">
                    {{--  --}}
                    <textarea id="tiny1" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="definicao" placeholder="Escreva uma definição para a doença!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_id1">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem_id1" type="file" name="imagem1">
                    </div>
                    {{--  --}}
                    <textarea id="tiny2" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="controle" placeholder="Como controlar os sintomas da doença!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_id2">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem_id2" type="file" name="imagem2">
                    </div>
                    {{--  --}}
                    <textarea id="tiny3" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="tratamento" placeholder="Qual o tratamento para a doença!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_id3">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem_id3" type="file" name="imagem3">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-10px] rounded-[10px]">Adicionar conteúdo</button>
                        </div>
                    </div>
                    <!--  -->
                    <input type="hidden" name="publicador" value="1">
                </div>
            </form>
        </div>
    </div>
    {{-- EDITAR DOENÇA --}}
    @if (isset($editar_doenca) AND !empty($editar_doenca))
    {{--  --}}
    @php
        // $info_doenca = Illuminate\Support\Facades\DB::select("SELECT * FROM doencas WHERE id = '$editar_doenca'");

        // PDO RESGATE DE INFORMAÇÕES
        $stmt = $conn->prepare('SELECT * FROM doencas WHERE id = :id');
        $stmt->execute(array('id' => $editar_doenca));
        $info_doenca_cont = $stmt->fetchAll();
        foreach ($info_doenca_cont as $info_doenca) {}

    @endphp
    {{--  --}}
    <div class="modal_edit_doenca">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div style="display: none;" id="mini_model_edit_img" class="w-[1000px] ml-[-40px] mt-[-40px] px-[40px] pt-[40px] pb-[5px] bg-[#5CD1FF] absolute inline-block">
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold text-[18px]">Editar imagens de {{ $info_doenca['nome'] }}</p>
                    </div>
                    {{--  --}}
                    <div id="fechar_mini_modal_img" class="w-[20%] inline-block float-left"><p class="float-right text-[16px] cursor-pointer">✕</p></div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[5px] h-[75px] overflow-scroll inline-block float-left">
                    {{--  --}}
                    <form action="/php/edit_img_doenca.php" method="POST">
                        @csrf
                        {{--  --}}
                        <div class="w-[100%] inline-block">
                            {{--  --}}
                            <div class="w-[50%] inline-blog mt-[15px] mb-[30px] float-left">
                                {{--  --}}
                                <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_id1">Carregar uma imagem para conteúdo abaixo</label>
                                <!--  -->
                                <input style="display: none;" id="imagem_id1" type="file" name="imagem1">
                            </div>
                            {{--  --}}
                            <div class="w-[50%] inline-blog mt-[15px] mb-[30px] float-left">
                                <!--  -->
                                <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-8px] rounded-[10px]">Alterar imagem de descrição</button>
                            </div>
                        </div>
                        {{--  --}}
                        @if (!empty($info_doenca['imagem2']))
                        {{--  --}}
                        <div class="w-[100%] inline-block">
                            {{--  --}}
                            <div class="w-[50%] inline-blog mb-[30px] float-left">
                                {{--  --}}
                                <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_id1">Carregar uma imagem para conteúdo abaixo</label>
                                <!--  -->
                                <input style="display: none;" id="imagem_id1" type="file" name="imagem1">
                            </div>
                            {{--  --}}
                            <div class="w-[50%] inline-blog mb-[30px] float-left">
                                <!--  -->
                                <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-8px] rounded-[10px]">Alterar imagem de controle</button>
                            </div>
                        </div>
                        @endif
                        {{--  --}}
                        @if (!empty($info_doenca['imagem3']))
                        {{--  --}}
                        <div class="w-[100%] inline-block">
                            {{--  --}}
                            <div class="w-[50%] inline-blog mb-[30px] float-left">
                                {{--  --}}
                                <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_id1">Carregar uma imagem para conteúdo abaixo</label>
                                <!--  -->
                                <input style="display: none;" id="imagem_id1" type="file" name="imagem1">
                            </div>
                            {{--  --}}
                            <div class="w-[50%] inline-blog mb-[30px] float-left">
                                <!--  -->
                                <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-8px] rounded-[10px]">Alterar imagem de tratamento</button>
                            </div>
                        </div>
                        @endif
                        {{--  --}}
                        <input type="hidden" name="id" value="{{ $info_doenca['id'] }}">
                    </form>
                </div>
            </div>
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Editar {{ $info_doenca['nome'] }}</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <a href="{{ route('admin.painel_publicacao') }}"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
            {{--  --}}
            <form action="{{ route('admin.editar_doenca', ['id' => $info_doenca['id']]) }}" method="post" enctype="multipart/form-data">
                {{--  --}}
                @csrf
                {{--  --}}
                <div style="border-radius: 5px 5px 5px 5px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#00FF8C]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] mt-[10px] text-[12px] p-[5px] border-[1px] bg-[#ffffff]" name="tipo">
                            @if ($info_doenca['tipo'] == 1)
                            <option value="1" selected="">Doenças respiratórias agudas</option>
                            <option value="2">Doenças respiratórias crônicas</option>
                            @else
                            <option value="1">Doenças respiratórias agudas</option>
                            <option value="2" selected="">Doenças respiratórias crônicas</option>
                            @endif
                        </select>
                    </div>
                    {{--  --}}
                    <div class="w-[60%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[11px] float-right">
                            <li class="inline-block mr-[20px]">
                                <button id="edit_imagens" class="px-[30px] h-[30px] text-[10px] bg-[#080E45] rounded-[5px] text-[#ffffff]">editar imagens</button>
                            </li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">POR</li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">ENG</li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="nome" value="{{ $info_doenca['nome'] }}" placeholder="Nome da doença">
                    {{--  --}}
                    <textarea id="tiny4" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="definicao" placeholder="Escreva uma definição para a doença!">{{ $info_doenca['definicao'] }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] h-[20px]"></div>
                    {{--  --}}
                    <textarea id="tiny5" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="controle" placeholder="Como controlar os sintomas da doença!">{{ $info_doenca['controle'] }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] h-[20px]"></div>
                    {{--  --}}
                    <textarea id="tiny6" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="tratamento" placeholder="Qual o tratamento para a doença!">{{ $info_doenca['tratamento'] }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] h-[20px]"></div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-10px] rounded-[10px]">Editar conteúdo</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
    {{-- PESQUISADORES --}}
    <div class="w-[100%] mt-[30px] inline-block">
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <p class="text-[20px] font-bold mt-[10px]">Pesquisadores</p>
        </div>
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <button id="btn_pesquisador" class="px-[40px] h-[40px] float-right rounded-[100px] bg-[#080E45] text-[#00FF8C] text-[11px] font-bold">Add novo</button>
        </div>
        {{--  --}}
        <div style="border-radius: 5px 5px 0px 0px;" class="w-[100%] p-[10px] mt-[20px] bg-[#00FF8C] inline-block">
            {{--  --}}
            <table class="w-[100%]">
                <tr>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">ID</p></td>
                    <td class="w-[40%]"><p class="text-[#212121] text-center text-[11px] font-bold">NOME</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">REFERÊNCIA</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">CURRÍCULO</p></td>
                    <td class="w-[30%]"></td>
                </tr>
            </table>
        </div>
        {{--  --}}
        <div class="w-[100%] p-[10px] border-[1px] mt-[-5px] border-[#00FF8C] overflow-scroll bg-[#fafafa] h-[200px] inline-block">
            {{--  --}}
            @foreach ($pesquisadores as $pesquisador)
            <table class="w-[100%]">
                <tr>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $pesquisador['id'] }}</p></td>
                    <td class="w-[40%]"><p class="text-[#212121] text-center text-[11px]">{{ $pesquisador['nome'] }}</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $pesquisador['referencia'] }}</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">OK</p></td>
                    <td class="w-[30%]">
                        <ul class="float-right">
                            <li class="inline-block ml-[10px]"><a href="{{ route('admin.edit_pesquisadores', ['id' => $pesquisador['id']]) }}"><button class="px-[20px] rounded-[100px] bg-[#FFC122] text-[11px] h-[30px] text-[#ffffff]">Editar</button></a></li>
                            <li class="inline-block ml-[10px]"><a href="{{ route('admin.delete_pesquisadores', ['id' => $pesquisador['id']]) }}"><button class="px-[20px] rounded-[100px] bg-[#00FF8C] text-[11px] h-[30px] text-[#080E45]">Delete</button></a></li>
                        </ul>
                    </td>
                </tr>
            </table>
            {{--  --}}
            <hr class="my-[10px]">
            @endforeach
        </div>
    </div>
    {{--  --}}
    <div class="modal_add_pesquisador">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Add novo pesquisador</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p id="fechar_modal_pesq" class="float-right text-[16px] cursor-pointer">✕</p>
                </div>
            </div>
            {{--  --}}
            <form action="/php/add_new_pesquisador.php" method="POST" enctype="multipart/form-data">
                {{--  --}}
                @csrf
                {{--  --}}
                <div style="border-radius: 5px 5px 5px 5px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#00FF8C]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <ul class="mt-[15px] ml-[10px]">
                            <li class="inline-block mr-[20px]"><input class="float-left" type="checkbox" name="projeto1"><p class="float-left ml-[10px] mt-[0px] text-[10px] uppercase">projeto1</p></li>
                            <li class="inline-block mr-[20px]"><input class="float-left" type="checkbox" name="projeto2"><p class="float-left ml-[10px] mt-[0px] text-[10px] uppercase">projeto2</p></li>
                            <li class="inline-block mr-[20px]"><input class="float-left" type="checkbox" name="projeto3"><p class="float-left ml-[10px] mt-[0px] text-[10px] uppercase">projeto3</p></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="w-[40%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] mt-[10px] text-[12px] p-[5px] border-[1px] bg-[#ffffff]" name="categoria">
                            <option value="professor">Professor</option>
                            <option value="pesquisador">Pesquisador Internacional</option>
                            <option value="aic">Aluno de Iniciação Científica</option>
                            <option value="am">Aluno de Mestrado</option>
                            <option value="ad">Aluno de Doutorado</option>
                        </select>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[12px]  float-right">
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">POR</li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">ENG</li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px]" type="text" name="nome" placeholder="Nome do pesquisador">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] bg-[#ffffff] p-[20px] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px]" type="text" name="referencia" placeholder="Referência opcional Ex.: UFRN">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px]" type="text" name="link_lattes" placeholder="Link para Currículo Lattes">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] bg-[#ffffff] p-[20px] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="link_orcid" placeholder="Link para ORCID">
                    {{--  --}}
                    <textarea id="tiny_pesq1" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="descricao" placeholder="Digite uma descrição aqui!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagemx">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagemx" type="file" name="imagem">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[10px] rounded-[10px]">Adicionar pesquisador</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{--  --}}
    @if (isset($editar_pesquisador) AND !empty($editar_pesquisador))
    {{--  --}}
    <div class="modal_edit_pesquisador">
        {{--  --}}
        @php
            // $info_pesquisador = Illuminate\Support\Facades\DB::select("SELECT * FROM pesquisadors WHERE id = '$editar_pesquisador'");

            // PDO RESGATE DE INFORMAÇÕES
            $stmt = $conn->prepare('SELECT * FROM pesquisadors WHERE id = :id');
            $stmt->execute(array('id' => $editar_pesquisador));
            $info_pesquisador_count = $stmt->fetchAll();
            foreach ($info_pesquisador_count as $info_pesquisador) {}

            @$nome_pesquisador        = $info_pesquisador['nome'];
            @$referencia_pesquisador  = $info_pesquisador['referencia'];
            @$link_lattes_pesquisador = $info_pesquisador['link_lattes'];
            @$link_orcid_pesquisador  = $info_pesquisador['link_orcid'];
            @$descricao_pesquisador   = $info_pesquisador['descricao'];

        @endphp
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Editar {{ $nome_pesquisador }}</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <a href="{{ route('admin.painel_publicacao') }}"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
            {{--  --}}
            <form action="/php/edit_new_pesquisador.php" method="POST" enctype="multipart/form-data">
                {{--  --}}
                @csrf
                {{--  --}}
                <div style="border-radius: 5px 5px 5px 5px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#00FF8C]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <ul class="mt-[15px] ml-[10px]">
                            <li class="inline-block mr-[20px]"><input class="float-left" type="checkbox" name="projeto1"><p class="float-left ml-[10px] mt-[0px] text-[10px] uppercase">projeto1</p></li>
                            <li class="inline-block mr-[20px]"><input class="float-left" type="checkbox" name="projeto2"><p class="float-left ml-[10px] mt-[0px] text-[10px] uppercase">projeto2</p></li>
                            <li class="inline-block mr-[20px]"><input class="float-left" type="checkbox" name="projeto3"><p class="float-left ml-[10px] mt-[0px] text-[10px] uppercase">projeto3</p></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="w-[40%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] mt-[10px] text-[12px] p-[5px] border-[1px] bg-[#ffffff]" name="categoria">
                            <option value="professor">Professor</option>
                            <option value="pesquisador">Pesquisador Internacional</option>
                            <option value="aic">Aluno de Iniciação Científica</option>
                            <option value="am">Aluno de Mestrado</option>
                            <option value="ad">Aluno de Doutorado</option>
                        </select>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[12px]  float-right">
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">POR</li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">ENG</li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px]" type="text" name="nome" value="{{ $nome_pesquisador }}" placeholder="Nome do pesquisador">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] bg-[#ffffff] p-[20px] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px]" type="text" name="referencia" value="{{ $referencia_pesquisador }}" placeholder="Referência opcional Ex.: UFRN">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px]" type="text" name="link_lattes" value="{{ $link_lattes_pesquisador }}" placeholder="Link para Currículo Lattes">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] bg-[#ffffff] p-[20px] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="link_orcid" value="{{ $link_orcid_pesquisador}}" placeholder="Link para ORCID">
                    {{--  --}}
                    <textarea id="tiny_pesq2" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="descricao" placeholder="Digite uma descrição aqui!">{{ $descricao_pesquisador }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{-- ImageMy --}}
                        <label class="px-[100px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagemy">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagemy" type="file" name="imagem">
                    </div>
                    {{--  --}}
                    <input type="hidden" name="id" value="{{ $info_pesquisador['id'] }}">
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[10px] rounded-[10px]">Adicionar pesquisador</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
</section>
@endsection
