@extends('dashboard.layout.main')
@section('titulo', 'RespiraAdmin | RespiraSaúde')
@section('conteudo')

@php
    // RESGATE DE GET
    @$erro_msn = $_GET["erro"];
@endphp

{{--  --}}
<section class="w-[100%] p-[30px] inline-block">
    {{--  --}}
    <div class="w-[100%] inline-block">
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <p class="text-[30px] font-bold">Nóticias e Eventos</p>
        </div>
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <ul class="float-right mt-[10px]">
                <li class="inline-block ml-[5px]"><button id="btn-eventos" class="px-[40px] h-[40px] rounded-[100px] text-[#ffffff] bg-[#212121] text-[12px] font-bold float-right">Eventos</button></li>
                <li class="inline-block ml-[5px]"><button id="btn-noticias" class="px-[40px] h-[40px] rounded-[100px] text-[#ffffff] bg-[#212121] text-[12px] font-bold float-right">Notícias</button></li>
            </ul>
        </div>
    </div>
    {{--  --}}
    <hr class="my-[20px] border-[#cdcdcd]">
    {{--  --}}
    <div id="box-eventos" class="w-[100%] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[50%] float-left inline-block">
                {{--  --}}
                <p class="font-bold text-[20px]">Meus eventos</p>
            </div>
            {{--  --}}
            <div class="w-[50%] float-left inline-block">
                {{--  --}}
                <button id="btn_add_evento" class="px-[40px] h-[40px] rounded-[100px] text-[#ffffff] bg-[#212121] text-[12px] font-bold float-right">Add novo evento</button>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[100%] inline-block px-[40px] py-[10px] rounded-[100px] bg-[#212121]">
                <table class="w-[100%]">
                    <tr>
                        <td class="w-[6%]"><p class="text-[#ffffff] text-[12px] font-bold">ID</p></td>
                        <td class="w-[34%]"><p class="text-[#ffffff] text-[12px] font-bold">Título</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold">Início</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold">Final</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold"></td>
                    </tr>
                </table>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] h-[350px] overflow-scroll inline-block">
            {{--  --}}
            @if ($eventos)
            @foreach ($eventos as $conteudo)
            @php
            $titulo_resumido = mb_strimwidth($conteudo->titulo, 0, 30, "...");
            @endphp
            <div class="w-[100%] inline-block px-[40px] py-[10px] rounded-[100px]">
                <table class="w-[100%]">
                    <tr>
                        <td class="w-[6%]"><p class="text-[#212121] text-[12px]">{{ $conteudo->id }}</p></td>
                        <td class="w-[34%]"><p class="text-[#212121] text-[12px]">{{ $titulo_resumido }}</p></td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">{{ $conteudo->inicio }}</p></td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">{{ $conteudo->final }}</p></td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">
                            <ul class="float-right">
                                <li class="inline-block ml-[10px]"><a href="{{ route('edit.modal_evento', ['id' => $conteudo->id]) }}"><button class="bg-[orange] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Editar</button></a></li>
                                <li class="inline-block ml-[10px]"><a href="{{ route('delete.evento', ['id' => $conteudo->id]) }}"><button class="bg-[red] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Deletar</button></a></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            @endforeach
            @else
            <p class="text-center mt-[10%]">Não encontramos eventos registrados!</p>
            @endif
        </div>
    </div>
    {{-- MODAL EVENTOS --}}
    <div class="modal_add_eventos_admin">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] rounded-[20px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#212121]">Add novo evento</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p id="fechar_add_evento" class="float-right text-[16px] cursor-pointer">✕</p>
                </div>
            </div>
            {{--  --}}
            <p class="my-[15px] text-[13px] text-[#212121] leading-[16px]"><b>Atenção:</b> Ao incluir as imagens para esta postagem, escolha arquivos com tamanho menores que 3mb no formato JPG, JPEG ou PNG, aquivos no tamanho e formato correto evitam erros de visualização e carregamento.</p>
            {{--  --}}
            <form action="{{ route('add.mew_evento') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[300px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="titulo" placeholder="Título do evento">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="subtitulo" placeholder="Subtítulo do evento">
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[49%] inline-block float-left mr-[1%]">
                            {{--  --}}
                            <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" id="date01" type="text" name="inicio" placeholder="Início do evento">
                        </div>
                        {{--  --}}
                        <div class="w-[49%] inline-block float-left ml-[1%]">
                            <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" id="date02" type="text" name="final" placeholder="Final do evento">
                        </div>
                    </div>
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="link_video" placeholder="Link para vídeo EX.: https://youtube.com/video">
                    {{--  --}}
                    <textarea id="tiny_pesq1" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto" placeholder="Digite um texto para o evento!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{--  --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagemx">Carregar uma imagem para o evento acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagemx" type="file" name="imagem">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[10px] rounded-[100px]">Adicionar evento</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- MODAL EDITAR --}}
    {{--  --}}
    @if (isset($evento_edit) AND !empty($evento_edit))
    {{--  --}}
    <div class="modal_edit_respira_cont">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] rounded-[20px] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#212121]">Editar evento</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <a href="{{ route('admin.eventos.pag') }}"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
            {{--  --}}
            <form action="{{ route('editar.evento', ['id' => $evento_edit->id]) }}" method="GET" enctype="multipart/form-data">
                @csrf
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[370px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="titulo" value="{{ $evento_edit->titulo }}" placeholder="Título do evento">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="subtitulo" value="{{ $evento_edit->subtitulo }}" placeholder="Subtítulo do evento">
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[49%] inline-block float-left mr-[1%]">
                            {{--  --}}
                            <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="inicio" value="{{ $evento_edit->inicio }}" placeholder="Início do evento">
                        </div>
                        {{--  --}}
                        <div class="w-[49%] inline-block float-left ml-[1%]">
                            <input class="w-[100%] float-left outline-none mt-[10px] p-[20px] bg-[#ffffff] rounded-[10px] border-[2px] border-[#eeeeee] text-[14px] h-[40px] mb-[10px]" type="text" name="final" value="{{ $evento_edit->final }}" placeholder="Final do evento">
                        </div>
                    </div>
                    {{--  --}}
                    <textarea id="tiny_pesq2" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto" placeholder="Digite uma texto aqui!">{{ $texto_evento }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] inline-blog mt-[15px] mb-[30px] float-left">
                        {{-- ImageMy --}}
                        <label class="px-[100px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagemy">Carregar uma imagem para o evento acima</label>
                        <!--  -->
                        <input style="display: none;" id="imagemy" type="file" name="imagem">
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] w-[100%] text-[13px] h-[38px] mt-[10px] rounded-[100px]">Editar evento</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif


    {{-- NOTÍCIAS --}}
    <div id="box-noticias" style="display: none;" class="w-[100%] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[50%] float-left inline-block">
                {{--  --}}
                <p class="font-bold text-[20px]">Minhas notícias</p>
            </div>
            {{--  --}}
            <div class="w-[50%] float-left inline-block">
                {{--  --}}
                <button id="btn_content_respira" class="px-[40px] h-[40px] rounded-[100px] text-[#ffffff] bg-[#212121] text-[12px] font-bold float-right">Add nova notícias</button>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[100%] inline-block px-[40px] py-[10px] rounded-[100px] bg-[#212121]">
                <table class="w-[100%]">
                    <tr>
                        <td class="w-[6%]"><p class="text-[#ffffff] text-[12px] font-bold">ID</p></td>
                        <td class="w-[34%]"><p class="text-[#ffffff] text-[12px] font-bold">Título</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold">Data</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold">Status</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold"></td>
                    </tr>
                </table>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] h-[350px] overflow-scroll inline-block">
            {{--  --}}
            @if ($noticias)
            @foreach ($noticias as $conteudo_news)
            @php
            $titulo_resumido = mb_strimwidth($conteudo_news->titulo, 0, 30, "...");
            @endphp
            <div class="w-[100%] inline-block px-[40px] py-[10px] rounded-[100px]">
                <table class="w-[100%]">
                    <tr>
                        <td class="w-[6%]"><p class="text-[#212121] text-[12px]">{{ $conteudo_news->id }}</p></td>
                        <td class="w-[34%]"><p class="text-[#212121] text-[12px]">{{ $titulo_resumido }}</p></td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">{{ $conteudo_news->data }}</p></td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">{{ $conteudo_news->stts }}</p></td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">
                            <ul class="float-right">
                                <li class="inline-block ml-[10px]"><a href=""><button class="bg-[orange] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Editar</button></a></li>
                                <li class="inline-block ml-[10px]"><a href=""><button class="bg-[red] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Deletar</button></a></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            @endforeach
            @else
            <p class="text-center mt-[10%]">Não encontramos notícias registradas!</p>
            @endif
        </div>
    </div>

</section>
@endsection
