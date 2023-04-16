@extends('dashboard.layout.main')
@section('titulo', 'RespiraAdmin | Publicações')
@section('conteudo')

@php
    // RESGATE DE PROFISSIONAL
    @$erro_msn = $_GET['erro'];

    // $postagens = Illuminate\Support\Facades\DB::select("SELECT * FROM blogs");

    // PDO
    $name_banco = "laire_temp";
    $conectDB   = 'mysql:host=db4free.net;dbname='.$name_banco;
    $name_user  = "laire_ufrn";
    $pass_banco = "Laire@2023";

    $conn       = new PDO($conectDB, $name_user, $pass_banco);

    // PDO RESGATE DE CONTEÚDO
    $stmt       = $conn->prepare('SELECT * FROM blogs');
    $stmt->execute();
    $postagens  = $stmt->fetchAll();

@endphp

<section class="w-[100%] p-[30px] inline-block">
    {{--  --}}
    <div class="w-[100%] inline-block">
        {{--  --}}
        <img src="/img/text.png" class="float-left mr-[15px]"> <p class="float-left text-[#212121] mt-[3px] font-bold text-[23px]">Blog</p>
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
                        <p class="text-[orange] text-[14px] mt-[5px]">A imagem é muito grande, <a href="{{ route('admin.painel_blog') }}"><b>clique</b></a> e tente uma imagem abaixo de 6Mb!</p>
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
            <p class="text-[20px] font-bold mt-[10px]">Postagens</p>
        </div>
        {{--  --}}
        <div class="w-[50%] inline-block float-left">
            {{--  --}}
            <button id="btn_novo_post" class="px-[40px] h-[40px] float-right rounded-[100px] bg-[#080E45] text-[#00FF8C] text-[11px] font-bold">Add nova</button>
        </div>
        {{--  --}}
        <div style="border-radius: 5px 5px 0px 0px;" class="w-[100%] p-[10px] mt-[20px] bg-[#00FF8C] inline-block">
            {{--  --}}
            <table class="w-[100%]">
                <tr>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">ID</p></td>
                    <td class="w-[20%]"><p class="text-[#212121] text-center text-[11px] font-bold">TITULO</p></td>
                    <td class="w-[20%]"><p class="text-[#212121] text-center text-[11px] font-bold">CATEGORIA</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">REGISTRO</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px] font-bold">VIEWS</p></td>
                    <td class="w-[30%]"></td>
                </tr>
            </table>
        </div>
        {{--  --}}
        <div class="w-[100%] p-[10px] border-[1px] mt-[-5px] border-[#00FF8C] bg-[#fafafa] h-[200px] inline-block">
            {{--  --}}
            @foreach ($postagens as $post)
            @php
                $titulo_resumido = mb_strimwidth($post['titulo'], 0, 40, "...");
            @endphp
            <table class="w-[100%]">
                <tr>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $post['id'] }}</p></td>
                    <td class="w-[20%]"><p class="text-[#212121] text-center text-[11px]">{{ $titulo_resumido }}</p></td>
                    <td class="w-[20%]"><p class="text-[#212121] text-center text-[11px]">{{ $post['categoria'] }}</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $post['registro'] }}</p></td>
                    <td class="w-[10%]"><p class="text-[#212121] text-center text-[11px]">{{ $post['views'] }}</p></td>
                    <td class="w-[30%]">
                        <ul class="float-right">
                            <li class="inline-block ml-[10px]"><a href="{{ route('admin.show_edit_post_blog', ['id' => $post['id']]) }}"><button class="px-[20px] rounded-[100px] bg-[#FFC122] text-[11px] h-[30px] text-[#ffffff]">Editar</button></a></li>
                            <li class="inline-block ml-[10px]"><a href="{{ route('admin.deletar_post_blog', ['id' => $post['id']]) }}"><button class="px-[20px] rounded-[100px] bg-[#00FF8C] text-[11px] h-[30px] text-[#080E45]">Delete</button></a></li>
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
    <div class="modal_add_conteudo_blog">
        {{--  --}}
        <div class="w-[1000px] h-[500px] mt-[8%] mx-auto p-[40px] bg-[#ffffff]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Nova postagem</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p id="fechar_modal_add_blog" class="float-right text-[16px] cursor-pointer">✕</p>
                </div>
            </div>
            {{--  --}}
            <form action="/php/add_new_post_blog.php" method="post" enctype="multipart/form-data">
                {{--  --}}
                @csrf
                {{--  --}}
                <div style="border-radius: 5px 5px 5px 5px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#00FF8C]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] text-[12px] mt-[10px] p-[5px] border-[1px] bg-[#ffffff]" name="categoria">
                            <option value="1">Novidades</option>
                            <option value="2">Pesquisa</option>
                            <option value="3">Eeventos</option>
                            <option value="4">Doenças</option>
                            <option value="5">Ações de extenção</option>
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
                            <label class="px-[180px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_avt">Carregar imagem</label>
                            <!--  -->
                            <input style="display: none;" id="imagem_avt" type="file" name="imagem">
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-blog mt-[40px] float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] text-[12px] w-[100%] h-[38px] mt-[-10px] rounded-[10px]">Adicionar conteúdo</button>
                        </div>
                    </div>
                    <!--  -->
                    <input type="hidden" name="autor" value="1">
                </div>
            </form>
        </div>
    </div>
    {{--  MODAL EDITAR --}}
    @if (isset($postagem_edit) AND !empty($postagem_edit))
    {{--  --}}
    @php
        // RESGATE DE PROFISSIONAL
        // $posta = Illuminate\Support\Facades\DB::select("SELECT * FROM blogs WHERE id = $postagem_edit");

        // PDO RESGATE DE INFORMAÇÕES
        $stmt = $conn->prepare('SELECT * FROM blogs WHERE id = :id');
        $stmt->execute(array('id' => $postagem_edit));
        $postar_info = $stmt->fetchAll();
        foreach ($postar_info as $posta) {}
    @endphp
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
            <form action="/php/edit_post_blog.php" method="post" enctype="multipart/form-data">
                {{--  --}}
                @csrf
                {{--  --}}
                <div style="border-radius: 5px 5px 5px 5px;" class="px-[10px] mt-[30px] h-[50px] w-[100%] bg-[#00FF8C]">
                    {{--  --}}
                    <div class="w-[40%] inline-block float-left">
                        {{--  --}}
                        <select class="w-[100%] h-[30px] rounded-[5px] text-[12px] mt-[10px] p-[5px] border-[1px] bg-[#ffffff]" name="categoria">
                            <option value="1">Categoria 1</option>
                            <option value="2">Categoria 2</option>
                            <option value="3">Categoria 3</option>
                            <option value="4">Categoria 4</option>
                        </select>
                    </div>
                    {{--  --}}
                    <div class="w-[60%] inline-block pl-[20px] float-left">
                        {{--  --}}
                        <ul class="mt-[15px] float-right">
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">POR</li>
                            <li class="inline-block mr-[20px] font-bold text-[11px] text-[#212121]">ENG</li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] mt-[10px] h-[290px] overflow-scroll inline-block">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none p-[20px] bg-[#ffffff] rounded-[5px] border-[2px] text-[14px] border-[#eeeeee] h-[40px]" type="text" name="titulo" value="{{ $posta['titulo'] }}" placeholder="Título">
                    {{--  --}}
                    <input class="w-[100%] float-left outline-none mt-[10px] mb-[10px] bg-[#ffffff] p-[20px] text-[14px] rounded-[5px] border-[2px] border-[#eeeeee] h-[40px]" type="text" value="{{ $posta['subtitulo'] }}" name="subtitulo" placeholder="Subtítulo">
                    {{--  --}}
                    <textarea id="tiny_blog6" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto" placeholder="Digite seu texto aqui!">{{ $posta['texto'] }}</textarea>
                    {{--  --}}
                    <textarea id="tiny_blog7" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto2" placeholder="Digite seu texto aqui!">{{ $posta['texto2'] }}</textarea>
                    {{--  --}}
                    <textarea id="tiny_blog8" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto3" placeholder="Digite seu texto aqui!">{{ $posta['texto3'] }}</textarea>
                    {{--  --}}
                    <textarea id="tiny_blog9" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto4" placeholder="Digite seu texto aqui!">{{ $posta['texto4'] }}</textarea>
                    {{--  --}}
                    <textarea id="tiny_blog10" class="w-[100%] bg-[#ffffff] float-left outline-none mt-[10px] p-[20px] rounded-[5px] border-[2px] border-[#00FF8C] h-[180px]" name="texto5" placeholder="Digite seu texto aqui!">{{ $posta['texto5'] }}</textarea>
                    {{--  --}}
                    <div class="w-[100%] mt-[20px] inline-block">
                        {{--  --}}
                        <div class="w-[100%] inline-blog float-left">
                            {{--  --}}
                            <label class="px-[180px] rounded-[10px] text-[12px] cursor-pointer py-[11px] bg-[#00FF8C] text-[#080E45]" for="imagem_avt1">Carregar imagem</label>
                            <!--  -->
                            <input style="display: none;" id="imagem_avt1" type="file" name="imagem">
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-blog mt-[40px] float-left">
                            <!--  -->
                            <button class="text-[#ffffff] bg-[#080E45] text-[12px] w-[100%] h-[38px] mt-[-10px] rounded-[10px]">Editar postagem</button>
                        </div>
                    </div>
                    {{--  --}}
                    <input type="hidden" name="id" value="{{ $posta['id'] }}">
                </div>
            </form>
        </div>
    </div>
    @endif
</section>
@endsection

