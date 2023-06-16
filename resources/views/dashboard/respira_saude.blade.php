@extends('dashboard.layout.main')
@section('titulo', 'RespiraAdmin | RespiraSaúde')
@section('conteudo')

@php
    // RESGATE DE GET
    @$erro_msn = $_GET["erro"];
@endphp

<section class="w-[100%] p-[30px] inline-block">
    {{--  --}}
    <div class="w-[100%] inline-block">
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <p class="text-[30px] font-bold">Conteúdo do RespiraSaúde</p>
        </div>
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <button id="btn_content_respira" class="px-[40px] h-[40px] rounded-[100px] text-[#ffffff] bg-[#212121] text-[12px] font-bold float-right">Add novo</button>
        </div>
    </div>
    {{--  --}}
    <hr class="my-[20px] border-[#cdcdcd]">
    {{--  --}}
    <div class="w-[100%] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[100%] inline-block px-[40px] py-[10px] rounded-[100px] bg-[#212121]">
                <table class="w-[100%]">
                    <tr>
                        <td class="w-[6%]"><p class="text-[#ffffff] text-[12px] font-bold">ID</p></td>
                        <td class="w-[34%]"><p class="text-[#ffffff] text-[12px] font-bold">Projeto</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold">Posicao</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold">Título</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold"></td>
                    </tr>
                </table>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            @if ($respira)
            @foreach ($respira as $conteudo)
            <div class="w-[100%] inline-block px-[40px] py-[10px] rounded-[100px]">
                <table class="w-[100%]">
                    <tr>
                        <td class="w-[6%]"><p class="text-[#212121] text-[12px]">{{ $conteudo->id }}</p></td>
                        <td class="w-[34%]">
                            @if ($conteudo->projeto == 1)
                            <p class="text-[#212121] text-[12px]">Projeto1</p>
                            @elseif($conteudo->projeto == 2)
                            <p class="text-[#212121] text-[12px]">Projeto2</p>
                            @elseif($conteudo->projeto == 3)
                            <p class="text-[#212121] text-[12px]">Projeto3</p>
                            @elseif($conteudo->projeto == 4)
                            <p class="text-[#212121] text-[12px]">Home</p>
                            @endif
                        </td>
                        <td class="w-[20%]">
                            @if ($conteudo->posicao == 1)
                            <p class="text-[#212121] text-[12px]">Texto à esquerda</p>
                            @elseif($conteudo->posicao == 2)
                            <p class="text-[#212121] text-[12px]">Texto à direita</p>
                            @elseif($conteudo->posicao == 3)
                            <p class="text-[#212121] text-[12px] font-bold">Bloco principal</p>
                            @endif
                        </td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">{{ $conteudo->titulo }}</p></td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">
                            <ul class="float-right">
                                <li class="inline-block ml-[10px]"><a href="{{ route('admin.respirasaude.modal', ['id' => $conteudo->id]) }}"><button class="bg-[orange] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Editar</button></a></li>
                                <li class="inline-block ml-[10px]"><a href="{{ route('admin.respirasaude.delete', ['id' => $conteudo->id]) }}"><button class="bg-[red] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Deletar</button></a></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            @endforeach
            @else
            <p class="text-center mt-[10%]">Não encontramos conteúdos registrados!</p>
            @endif
        </div>
    </div>
    {{-- MODAL --}}
    <div class="modal_add_respira_admin">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] rounded-[20px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#212121]">Add novo bloco de conteúdo</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p id="fechar_modal_cont_respira" class="float-right text-[16px] cursor-pointer">✕</p>
                </div>
            </div>
            {{--  --}}
            <form action="{{ route('admin.respirasaude.add') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{--  --}}
                <div style="border-radius: 100px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#212121]">
                    {{--  --}}
                    <div class="w-[50%] inline-block float-left">
                        {{--  --}}
                        <ul class="mt-[15px] ml-[10px]">
                            <li class="inline-block mr-[20px]"><input class="float-left" type="radio" value="4" name="projeto"><p class="float-left ml-[10px] mt-[0px] text-[#ffffff] text-[10px] uppercase">home</p></li>
                            <li class="inline-block mr-[20px]"><input class="float-left" type="radio" value="1" name="projeto"><p class="float-left ml-[10px] mt-[0px] text-[#ffffff] text-[10px] uppercase">projeto1</p></li>
                            <li class="inline-block mr-[20px]"><input class="float-left" type="radio" value="2" name="projeto"><p class="float-left ml-[10px] mt-[0px] text-[#ffffff] text-[10px] uppercase">projeto2</p></li>
                            <li class="inline-block mr-[20px]"><input class="float-left" type="radio" value="3" name="projeto"><p class="float-left ml-[10px] mt-[0px] text-[#ffffff] text-[10px] uppercase">projeto3</p></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="w-[30%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] mt-[10px] text-[12px] p-[5px] border-[1px] bg-[#ffffff]" name="posicao">
                            <option value="1">Texto à esquerda</option>
                            <option value="2">Texto à direita</option>
                            <option value="3">Bloco principal</option>
                        </select>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[12px]  float-right">
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#ffffff]">POR</li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#ffffff]">ENG</li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="titulo" placeholder="Título do bloco">
                    {{--  --}}
                    <textarea id="tiny_pesq1" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="descricao" placeholder="Digite um texto para o bloco!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagemx">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagemx" type="file" name="imagem">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="video">Carregar uma vídeo de acessibilidade para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="video" type="file" name="video">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="audio">Carregar um áudio de acessibilidade para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="audio" type="file" name="audio">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[10px] rounded-[100px]">Adicionar conteúdo</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- MODAL EDITAR --}}
    {{--  --}}
    @if (isset($respira_edit) AND !empty($respira_edit))
    {{--  --}}
    <div class="modal_edit_respira_cont">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] rounded-[20px] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#212121]">Editar Bloco</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <a href="{{ route('admin.respirasaude.pag') }}"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
            {{--  --}}
            <form action="{{ route('admin.respirasaude.edit', ['id' => $respira_edit->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[370px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="titulo" value="{{ $respira_edit->titulo }}" placeholder="Nome do pesquisador">
                    {{--  --}}
                    <textarea id="tiny_pesq2" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="descricao" placeholder="Digite uma descrição aqui!">{{ $texto_respira }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{-- ImageMy --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagemy">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagemy" type="file" name="imagem">
                    </div>
                    {{--  --}}
                    <input type="hidden" name="id" value="{{ $respira_edit->id }}">
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[10px] rounded-[100px]">Editar conteudo</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
</section>
@endsection
