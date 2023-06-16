@extends('dashboard.layout.main')
@section('titulo', 'RespiraAdmin | Blog')
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
            <p class="text-[30px] font-bold">Blog</p>
        </div>
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <button id="btn_novo_post" class="px-[40px] h-[40px] rounded-[100px] text-[#ffffff] bg-[#212121] text-[12px] font-bold float-right">Add novo</button>
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
                        <td class="w-[34%]"><p class="text-[#ffffff] text-[12px] font-bold">Título</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold">Categoria</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold">Visualizações</p></td>
                        <td class="w-[20%]"><p class="text-[#ffffff] text-[12px] font-bold"></td>
                    </tr>
                </table>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] h-[440px] overflow-scroll inline-block">
            {{--  --}}
            @if ($posts)
            @foreach ($posts as $post)
            <div class="w-[100%] inline-block px-[40px] py-[10px] rounded-[100px]">
                <table class="w-[100%]">
                    <tr>
                        <td class="w-[6%]"><p class="text-[#212121] text-[12px]">{{ $post->id }}</p></td>
                        <td class="w-[34%]"><p class="text-[#212121] text-[12px]">{{ $post->titulo }}</p></td>
                        <td class="w-[20%]">
                            @if ($post->categoria == 1)
                            <p class="text-[#212121] text-[12px]">Novidades</p>
                            @elseif ($post->categoria == 2)
                            <p class="text-[#212121] text-[12px]">Pesquisa</p>
                            @elseif ($post->categoria == 3)
                            <p class="text-[#212121] text-[12px]">Eventos</p>
                            @elseif ($post->categoria == 4)
                            <p class="text-[#212121] text-[12px]">Doenças</p>
                            @elseif ($post->categoria == 5)
                            <p class="text-[#212121] text-[12px]">Ações de extenções</p>
                            @endif
                        </td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">0</p></td>
                        <td class="w-[20%]"><p class="text-[#212121] text-[12px]">
                            <ul class="float-right">
                                <li class="inline-block ml-[10px]"><a href="{{ route('admin.show_edit_post_blog', ['id' => $post->id]) }}"><button class="bg-[orange] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Editar</button></a></li>
                                <li class="inline-block ml-[10px]"><a href="{{ route('admin.deletar_post_blog', ['id' => $post->id]) }}"><button class="bg-[red] rounded-[100px] text-[#ffffff] px-[20px] h-[30px] text-[10px] font-bold">Deletar</button></a></li>
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
    {{-- CONTEÚDO --}}
    <div class="modal_add_conteudo_blog">
        {{--  --}}
        <div class="w-[1000px] h-[500px] rounded-[20px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#212121]">Nova postagem</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p id="fechar_modal_add_blog" class="float-right text-[16px] cursor-pointer">✕</p>
                </div>
            </div>
            {{--  --}}
            <form action="{{ route('admin.add_blog') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{--  --}}
                <div style="border-radius: 100px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#212121]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] ml-[15px] h-[30px] rounded-[5px] text-[12px] mt-[10px] p-[5px] border-[1px] bg-[#ffffff]" name="categoria">
                            <option value="1">Novidades</option>
                            <option value="2">Pesquisa</option>
                            <option value="3">Eventos</option>
                            <option value="4">Doenças</option>
                            <option value="5">Ações de extenção</option>
                        </select>
                    </div>
                    {{--  --}}
                    <div class="w-[60%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[15px]  float-right">
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#ffffff]">POR</li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#ffffff]">ENG</li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] rounded-[5px] border-[2px] text-[14px] border-[#eeeeee] h-[40px]" type="text" name="titulo" placeholder="Título">
                    {{--  --}}
                    <div class="w-[100%] h-[10px]"></div>
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] mb-[10px] bg-[#ffffff] p-[20px] text-[14px] rounded-[5px] border-[2px] border-[#eeeeee] h-[40px]" type="text" name="subtitulo" placeholder="Subtítulo">
                    {{--  --}}
                    <div class="w-[100%] h-[10px]"></div>
                    {{--  --}}
                    <textarea id="tiny_blog1" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto" placeholder="Digite seu texto no primeiro parágrafo!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] h-[10px]"></div>
                    {{--  --}}
                    <textarea id="tiny_blog2" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto2" placeholder="Digite seu texto no segundo parágrafo!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] h-[10px]"></div>
                    {{--  --}}
                    <textarea id="tiny_blog3" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto3" placeholder="Digite seu texto no terceiro parágrafo!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] h-[10px]"></div>
                    {{--  --}}
                    <textarea id="tiny_blog4" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto4" placeholder="Digite seu texto no quarto parágrafo!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] h-[10px]"></div>
                    {{--  --}}
                    <textarea id="tiny_blog5" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto5" placeholder="Digite seu texto no quinto parágrafo!"></textarea>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            {{--  --}}
                            <label class="px-[180px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_avt">Carregar imagem</label>
                            <!--  -->
                            <input style="display: none;" id="imagem_avt" type="file" name="imagem">
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-blog mt-[40px] float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] text-[12px] w-[100%] h-[38px] mt-[-10px] rounded-[100px]">Adicionar conteúdo</button>
                        </div>
                    </div>
                    <!--  -->
                    <input type="hidden" name="autor" value="1">
                </div>
            </form>
        </div>
    </div>
    {{--  MODAL EDITAR --}}
    @if (isset($post_edit) AND !empty($post_edit))
    {{--  --}}
    <div class="modal_edit_conteudo_blog">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Editar postagem</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <a href="{{ route('admin.painel_blog') }}"><p id="fechar_modal_add_blog" class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
            {{--  --}}
            <form action="{{ route('admin.editar_post_blog', ['id' => $post_edit->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{--  --}}
                <div style="border-radius: 100px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#212121]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] ml-[15px] rounded-[5px] text-[12px] mt-[10px] p-[5px] border-[1px] bg-[#ffffff]" name="categoria">
                            @if ($post_edit->categoria == 1)
                            <option value="1" selected="">Novidades</option>
                            <option value="2">Pesquisa</option>
                            <option value="3">Eventos</option>
                            <option value="4">Doenças</option>
                            <option value="5">Ações de extenção</option>
                            @elseif ($post_edit->categoria == 2)
                            <option value="1">Novidades</option>
                            <option value="2" selected="">Pesquisa</option>
                            <option value="3">Eventos</option>
                            <option value="4">Doenças</option>
                            <option value="5">Ações de extenção</option>
                            @elseif ($post_edit->categoria == 3)
                            <option value="1">Novidades</option>
                            <option value="2">Pesquisa</option>
                            <option value="3" selected="">Eventos</option>
                            <option value="4">Doenças</option>
                            <option value="5">Ações de extenção</option>
                            @elseif ($post_edit->categoria == 4)
                            <option value="1">Novidades</option>
                            <option value="2">Pesquisa</option>
                            <option value="3">Eventos</option>
                            <option value="4" selected="">Doenças</option>
                            <option value="5">Ações de extenção</option>
                            @elseif ($post_edit->categoria == 5)
                            <option value="1">Novidades</option>
                            <option value="2">Pesquisa</option>
                            <option value="3">Eventos</option>
                            <option value="4">Doenças</option>
                            <option value="5" selected="">Ações de extenção</option>
                            @endif
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
                    <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] rounded-[5px] border-[2px] text-[14px] border-[#eeeeee] h-[40px]" type="text" name="titulo" value="{{ $post_edit->titulo }}" placeholder="Título">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] mb-[10px] bg-[#ffffff] p-[20px] text-[14px] rounded-[5px] border-[2px] border-[#eeeeee] h-[40px]" type="text" value="{{ $post_edit->subtitulo }}" name="subtitulo" placeholder="Subtítulo">
                    {{--  --}}
                    <textarea id="tiny_blog6" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto" placeholder="Digite seu texto aqui!">{{ $post_edit->texto }}</textarea>
                    {{--  --}}
                    <textarea id="tiny_blog7" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto2" placeholder="Digite seu texto aqui!">{{ $post_edit->texto2 }}</textarea>
                    {{--  --}}
                    <textarea id="tiny_blog8" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto3" placeholder="Digite seu texto aqui!">{{ $post_edit->texto3 }}</textarea>
                    {{--  --}}
                    <textarea id="tiny_blog9" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto4" placeholder="Digite seu texto aqui!">{{ $post_edit->texto4 }}</textarea>
                    {{--  --}}
                    <textarea id="tiny_blog10" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto5" placeholder="Digite seu texto aqui!">{{ $post_edit->texto5 }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            {{--  --}}
                            <label class="px-[180px] rounded-[100px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_avt1">Carregar imagem</label>
                            <!--  -->
                            <input style="display: none;" id="imagem_avt1" type="file" name="imagem">
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-blog mt-[40px] float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] text-[12px] w-[100%] h-[38px] mt-[-10px] rounded-[100px]">Editar postagem</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endif
</section>
@endsection


