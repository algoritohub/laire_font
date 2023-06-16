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
            <p class="text-[30px] font-bold">Doenças</p>
        </div>
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <button id="btn_doenca" class="px-[40px] h-[40px] rounded-[100px] text-[#ffffff] bg-[#212121] text-[12px] font-bold float-right">Add novo</button>
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
                        <td class="w-[54%]"><p class="text-[#ffffff] text-[12px] font-bold">Nome</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold">Tipo</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold"></td>
                    </tr>
                </table>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] h-[440px] overflow-scroll inline-block">
            {{--  --}}
            @if ($doencas)
            @foreach ($doencas as $doenca)
            <div class="w-[100%] inline-block px-[40px] py-[10px] rounded-[100px]">
                <table class="w-[100%]">
                    <tr>
                        <td class="w-[6%]"><p class="text-[#212121] text-[12px]">{{ $doenca->id }}</p></td>
                        <td class="w-[54%]"><p class="text-[#212121] text-[12px]">{{ $doenca->nome }}</p></td>
                        <td class="w-[20%]">
                            @if ($doenca->tipo == 1)
                            <p class="text-[#212121] text-[12px]">Doenças agudas</p>
                            @elseif($doenca->tipo == 2)
                            <p class="text-[#212121] text-[12px]">Doenças crônicas</p>
                            @endif
                        </td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">
                            <ul class="float-right">
                                <li class="inline-block ml-[10px]"><a href="{{ route('admin.edit_doenca', ['id' => $doenca->id]) }}"><button class="bg-[orange] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Editar</button></a></li>
                                <li class="inline-block ml-[10px]"><a href="{{ route('admin.delete_doenca', ['id' => $doenca->id]) }}"><button class="bg-[red] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Deletar</button></a></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            @endforeach
            @else
            <p class="text-center mt-[10%]">Não encontramos doenças registradas!</p>
            @endif
        </div>
    </div>
    {{-- ADICIONAR DOENÇA --}}
    <div class="modal_add_doenca">
        {{--  --}}
        <div class="w-[1000px] rounded-[20px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#212121]">Nova Doença</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p id="fechar_modal_doenca" class="float-right text-[16px] cursor-pointer">✕</p>
                </div>
            </div>
            {{--  --}}
            <form action="{{ route('admin.doenca.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{--  --}}
                <div style="border-radius: 100px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#212121]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] ml-[15px] mt-[10px] text-[12px] p-[5px] border-[1px] bg-[#ffffff]" name="tipo">
                            <option value="1">Doenças respiratórias agudas</option>
                            <option value="2">Doenças respiratórias crônicas</option>
                        </select>
                    </div>
                    {{--  --}}
                    <div class="w-[60%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[15px] float-right">
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#ffffff]">POR</li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#ffffff]">ENG</li>
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
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem1x">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem1x" type="file" name="imagem1">
                    </div>
                    {{--  --}}
                    <textarea id="tiny2" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="controle" placeholder="Como controlar os sintomas da doença!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem2x">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem2x" type="file" name="imagem2">
                    </div>
                    {{--  --}}
                    <textarea id="tiny3" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="tratamento" placeholder="Qual o tratamento para a doença!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem3x">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem3x" type="file" name="imagem3">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-10px] rounded-[100px]">Adicionar conteúdo</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- EDITAR DOENÇA --}}
    @if (isset($doenca_edt) AND !empty($doenca_edt))
    {{--  --}}
    <div class="modal_edit_doenca">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto rounded-[20px] p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#212121]">Editar {{ $doenca_edt->nome }}</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <a href="{{ route('admin.doencas.pag') }}"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
            {{--  --}}
            <form action="{{ route('admin.editar_doenca', ['id' => $doenca_edt->id]) }}" method="POST" enctype="multipart/form-data">
                {{--  --}}
                @csrf
                {{--  --}}
                <div style="border-radius: 100px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#212121]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] ml-[15px] h-[30px] rounded-[5px] mt-[10px] text-[12px] p-[5px] border-[1px] bg-[#ffffff]" name="tipo">
                            @if ($doenca_edt->tipo == 1)
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
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#ffffff]">POR</li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#ffffff]">ENG</li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] text-[14px] mb-[10px] rounded-[10px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="nome" value="{{ $doenca_edt->nome }}" placeholder="Nome da doença">
                    {{--  --}}
                    <textarea id="tiny4" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="definicao" placeholder="Escreva uma definição para a doença!">{{ $doenca_edt->definicao }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem1x">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem1x" type="file" name="imagem1">
                    </div>
                    {{--  --}}
                    <textarea id="tiny5" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="controle" placeholder="Como controlar os sintomas da doença!">{{ $doenca_edt->controle }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem2x">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem2x" type="file" name="imagem2">
                    </div>
                    {{--  --}}
                    <textarea id="tiny6" class="w-[100%] bg-[#ffffff] float-left outline-none p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="tratamento" placeholder="Qual o tratamento para a doença!">{{ $doenca_edt->tratamento }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem3x">Carregar uma imagem para conteúdo acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagem3x" type="file" name="imagem3">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[-10px] rounded-[100px]">Editar conteúdo</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
</section>
@endsection
