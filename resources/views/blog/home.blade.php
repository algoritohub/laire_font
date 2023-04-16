@extends('blog.layout.main')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

@php
    // POSTAGEM PRINCIPAL
    // $principal = Illuminate\Support\Facades\DB::select("SELECT * FROM blogs ORDER BY id DESC LIMIT 1");

    // POSTAGEM PRINCIPAL
    // $postagens = Illuminate\Support\Facades\DB::select("SELECT * FROM blogs");

    // PDO
    $name_banco = "laire_temp";
    $conectDB   = 'mysql:host=db4free.net;dbname='.$name_banco;
    $name_user  = "laire_ufrn";
    $pass_banco = "Laire@2023";

    $conn       = new PDO($conectDB, $name_user, $pass_banco);

    // PDO RESGATE DE CONTEÚDO
    $stmt       = $conn->prepare('SELECT * FROM blogs ORDER BY id DESC LIMIT 1');
    $stmt->execute();
    $post_prime = $stmt->fetchAll();
    $count1     = count($post_prime);

    foreach ($post_prime as $principal) {}

    // POSTAGEM PRINCIPAL
    $stmt       = $conn->prepare('SELECT * FROM blogs');
    $stmt->execute();
    $posts      = $stmt->fetchAll();
    $count1     = count($posts);

    foreach ($posts as $postagens) {}

@endphp

{{--  --}}
<section id="x1" class="w-[100%] bg-[#080E45] inline-block">
    {{--  --}}
    <div class="w-[60%] mx-[20%] mt-[100px] h-[250px] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[70%] mt-[50px] inline-block float-left">
                {{-- CATEGORIA --}}
                @if ($principal['categoria'] == 1)
                    <p class="uppercase text-[14px] text-[#ffffff] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Novidades</p>
                @elseif ($principal['categoria'] == 2)
                    <p class="uppercase text-[14px] text-[#ffffff] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Pesquisa</p>
                @elseif ($principal['categoria'] == 3)
                    <p class="uppercase text-[14px] text-[#ffffff] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Eventos</p>
                @elseif ($principal['categoria'] == 4)
                    <p class="uppercase text-[14px] text-[#ffffff] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Doenças</p>
                @elseif ($principal['categoria'] == 5)
                    <p class="uppercase text-[14px] text-[#ffffff] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Ações de extenções</p>
                @endif
                {{--  --}}
                @php
                    // TITULO RESUMIDO
                    $titulo_resumido = mb_strimwidth($principal['titulo'], 0, 40, "...");

                    // RESGATE DE AUTOR
                    $id_adm = $principal['id'];
                    $admins = Illuminate\Support\Facades\DB::select("SELECT * FROM admins WHERE id = '$id_adm'");

                    // FORMATAÇÃO DA SEMANA
                    $meses = array (
                        1  => "Janeiro",
                        2  => "Fevereiro",
                        3  => "Março",
                        4  => "Abril",
                        5  => "Maio",
                        6  => "Junho",
                        7  => "Julho",
                        8  => "Agosto",
                        9  => "Setembro",
                        10 => "Outubro",
                        11 => "Novembro",
                        12 => "Dezembro",
                    );

                    $diasdasemana = array (
                        1 => "Segunda-Feira",
                        2 => "Terça-Feira",
                        3 => "Quarta-Feira",
                        4 => "Quinta-Feira",
                        5 => "Sexta-Feira",
                        6 => "Sábado",
                        0 => "Domingo",
                    );

                    $variavel = $principal['registro'];
                    $hoje     = getdate(strtotime($variavel));

                    $dia             = $hoje["mday"];
                    $mes             = $hoje["mon"];
                    $nomemes         = $meses[$mes];
                    $ano             = $hoje["year"];
                    $diadasemana     = $hoje["wday"];
                    $nomediadasemana = $diasdasemana[$diadasemana];
                @endphp
                {{--  --}}
                <a href="{{ route('postagem_blog', ['id' => $principal['id']]) }}"><p id="titulo_resumido"  class="text-[#ffffff] mt-[20px] text-[40px] leading-[40px] font-bold">{{ $titulo_resumido }}</p></a>
            </div>
            {{--  --}}
            <div class="w-[30%] mt-[50px] pl-[30px] inline-block float-left">
                {{--  --}}
                <div class="inline-block">
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <div class="rounded-[100px] w-[40px] bg-[#5CD1FF] h-[40px]"></div>
                    </div>
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <p id="logos_read" class="text-[#ffffff] ml-[10px] font-bold mt-[2px] text-[14px]">{{ $admins[0]->nome }}</p>
                        {{--  --}}
                        <p class="text-[#ffffff] ml-[10px] text-[12px]">{{ $dia }} de {{ $nomemes }} de {{ $ano }}</p>
                    </div>
                </div>
                {{--  --}}
                <ul class="mt-[20px]">
                    <li class="flex mb-[20px] mx-[10px]"><img src="/img/facebook.png" class="w-[20px]"></li>
                    <li class="flex mb-[20px] mx-[10px]"><img src="/img/twitter.png" class="w-[20px]"></li>
                </ul>
            </div>
        </div>
    </div>
</section>
{{--  --}}
<section class="mt-[30px] w-[60%] mx-[20%]">
    {{--  --}}
    <div id="x2" class="w-[100%]">
        {{--  --}}
        <img class="w-[100%] rounded-[5px]" src="/img/pub/{{ $principal['imagem'] }}">
    </div>
    {{--  --}}
    <p class="mt-[40px]">{{ $principal['texto'] }}</p>
    {{--  --}}
    <p class="mt-[40px]">{{ $principal['texto2'] }}</p>
    {{--  --}}
    <a href="{{ route('postagem_blog', ['id' => $principal['id']]) }}"><button class="w-[100%] h-[40px] mt-[40px] bg-[#5CD1FF] text-[13px] text-[#212121] rounded-[100px] inline-block">Continuar lendo</button></a>
</section>
{{--  --}}
<section  class="w-[100%] mt-[30px] inline-block">
    {{--  --}}
    <div class="w-[90%] mx-[5%] inline-block">
        {{--  --}}
        <div class="">
            {{--  --}}
            <p id="artigos_rescentes"  class="text-center font-bold mt-[30px] text-[30px] mb-[50px]">Artigos Recentes</p>
            {{--  --}}
            @foreach ($posts as $post)
            {{--  --}}
            @php
                // TITULO RESUMIDO
                $titulo_resumido1    = mb_strimwidth($post['titulo'], 0, 40, "...");

                // PARÁGRAFO RESUMIDO
                $paragrafo_resumido1 = mb_strimwidth($post['texto'], 0, 200, "...");

                // RESGATE DE AUTOR
                $id_adm1 = $post['id'];
                $admins1 = Illuminate\Support\Facades\DB::select("SELECT * FROM admins WHERE id = '$id_adm1'");

                // FORMATAÇÃO DA SEMANA
                $meses1 = array (
                    1  => "Janeiro",
                    2  => "Fevereiro",
                    3  => "Março",
                    4  => "Abril",
                    5  => "Maio",
                    6  => "Junho",
                    7  => "Julho",
                    8  => "Agosto",
                    9  => "Setembro",
                    10 => "Outubro",
                    11 => "Novembro",
                    12 => "Dezembro",
                );

                $diasdasemana1 = array (
                    1 => "Segunda-Feira",
                    2 => "Terça-Feira",
                    3 => "Quarta-Feira",
                    4 => "Quinta-Feira",
                    5 => "Sexta-Feira",
                    6 => "Sábado",
                    0 => "Domingo",
                );

                $variavel1 = $post['registro'];
                $hoje1     = getdate(strtotime($variavel1));

                $dia1             = $hoje1["mday"];
                $mes1             = $hoje1["mon"];
                $nomemes1         = $meses1[$mes1];
                $ano1             = $hoje1["year"];
                $diadasemana1     = $hoje1["wday"];
                $nomediadasemana1 = $diasdasemana1[$diadasemana1];
            @endphp
            {{--  --}}
            <div class="w-[30%] mx-[1.5%] inline-block float-left">
                {{--  --}}
                <div id="img-blog" style="background: url('/img/pub/{{ $post['imagem'] }}'); background-size:100%;   background-repeat: no-repeat; " class="w-[100%] shadow-lg h-[200px] rounded-[5px] mb-[30px] border-[1px] border-[#cdcdcd] bg-[silver]"></div>
                {{-- CATEGORIA --}}
                @if ($post['categoria'] == 1)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Novidades</p>
                @elseif ($post['categoria'] == 2)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Pesquisa</p>
                @elseif ($post['categoria'] == 3)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Eventos</p>
                @elseif ($post['categoria'] == 4)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Doenças</p>
                @elseif ($post['categoria'] == 5)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Ações de extenções</p>
                @endif
                {{--  --}}
                <a  href="{{ route('postagem_blog', ['id' => $post['id']]) }}"><p id="text_caixaverde_blog" class="font-bold text-[25px] leading-[28px]">{{ $titulo_resumido1 }}</p></a>
                {{--  --}}
                <p class="mt-[30px] text-[14px]">{{ $paragrafo_resumido1 }}</p>
                {{--  --}}
                <div class="inline-block mt-[30px]">
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <div class="rounded-[100px] w-[40px] bg-[#5CD1FF] h-[40px]"></div>
                    </div>
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <p class="ml-[10px] font-bold mt-[0px] text-[14px]">{{ $admins1[0]->nome }}</p>
                        {{--  --}}
                        <p class="ml-[10px] text-[12px]">{{ $dia1 }} de {{ $nomemes1 }} de {{ $ano1 }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
{{--  --}}
<section class="w-[90%] inline-block mx-[5%]">
    {{--  --}}
    <div id="novidades"  class="w-[100%] inline-block px-[60px] py-[80px] bg-[#00FF8C] rounded-[10px] mt-[80px]">
        {{--  --}}
        <div class="w-[60%] mx-[20%] inline-block">
            {{--  --}}
            <p class="font-bold text-[50px] text-center leading-[50px] text-[#080E45]">Que tal sugerir um tema para nosso blog?</p>
            {{--  --}}
            <p class="text-[14px] mt-[40px] text-center text-[#080E45]">Agora você pode nos ajudar, com sugestões de temas que tem mais interesse em obter informações, informe brevemente um tema de seu interesse, e ele será analisado e quem sabe sua sugestão se torna um de nossos posts.</p>
        </div>
        {{--  --}}
        <div class="w-[50%] mx-[25%] mt-[20px]">
            {{--  --}}
            <form action="" method="">
                {{--  --}}
                <input class="w-[100%] h-[40px] rounded-[100px] pl-[20px] border-[0px] mt-[10px]" type="text" name="email">
            </form>
        </div>
    </div>
</section>

@endsection
