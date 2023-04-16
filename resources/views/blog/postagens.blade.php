@extends('blog.layout.main')
@section('titulo', 'Blog | Home')
@section('conteudo')

@php
    // POSTAGEM PRINCIPAL
    $post_id   = $post;
    // $principal = Illuminate\Support\Facades\DB::select("SELECT * FROM blogs WHERE id = '$post_id'");

    // PDO
    $name_banco = "laire_temp";
    $conectDB   = 'mysql:host=db4free.net;dbname='.$name_banco;
    $name_user  = "laire_ufrn";
    $pass_banco = "Laire@2023";

    $conn       = new PDO($conectDB, $name_user, $pass_banco);

    // PDO RESGATE DE CONTEÚDO
    $stmt       = $conn->prepare('SELECT * FROM blogs WHERE id = :id');
    $stmt->execute(array('id' => $post_id));
    $post_prime = $stmt->fetchAll();
    $count1     = count($post_prime);

    foreach ($post_prime as $principal) {}

@endphp

{{--  --}}
<section id="x1" class="w-[100%] bg-[#ffffff] inline-block">
    {{--  --}}
    <div class="w-[60%] mx-[20%] mt-[100px] h-[250px] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[70%] mt-[50px] inline-block float-left">
                {{-- CATEGORIA --}}
                @if ($principal['categoria'] == 1)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Novidades</p>
                @elseif ($principal['categoria'] == 2)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Pesquisa</p>
                @elseif ($principal['categoria'] == 3)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Eventos</p>
                @elseif ($principal['categoria'] == 4)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Doenças</p>
                @elseif ($principal['categoria'] == 5)
                    <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Ações de extenções</p>
                @endif
                {{--  --}}
                @php
                    // TITULO RESUMIDO
                    $titulo_resumido = mb_strimwidth($principal['titulo'], 0, 40, "...");

                    // RESGATE DE AUTOR
                    $id_adm     = $principal['id'];
                    // $admins = Illuminate\Support\Facades\DB::select("SELECT * FROM admins WHERE id = '$id_adm'");

                    // RESGATE DE AUTOR
                    $stmt       = $conn->prepare('SELECT * FROM admins WHERE id = :id');
                    $stmt->execute(array('id' => $id_adm));
                    $adm_prime  = $stmt->fetchAll();

                    foreach ($adm_prime as $admins) {}

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
                <a href="{{ route('postagem_blog', ['id' => $principal['id']]) }}"><p class="text-[#212121] text-[40px] leading-[40px] font-bold">{{ $principal['titulo'] }}</p></a>
            </div>
            {{--  --}}
            <div class="w-[30%] mt-[50px] pl-[30px] inline-block float-left">
                {{--  --}}
                <div class="inline-block">
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <div class="rounded-[100px] w-[40px] bg-[silver] h-[40px]"></div>
                    </div>
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <p class="text-[#212121] ml-[10px] font-bold mt-[2px] text-[14px]">{{ $admins['nome'] }}</p>
                        {{--  --}}
                        <p class="text-[#212121] ml-[10px] text-[12px]">{{ $dia }} de {{ $nomemes }} de {{ $ano }}</p>
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
<section class="mt-[10px] w-[60%] mx-[20%]">
    {{--  --}}
    <img class="w-[100%] rounded-[5px]" src="/img/pub/{{ $principal['imagem'] }}">
    {{--  --}}
    <p class="mt-[40px]">{{ $principal['texto']}}</p>
    <p class="mt-[20px]">{{ $principal['texto2'] }}</p>
    <p class="mt-[20px]">{{ $principal['texto3'] }}</p>
    <p class="mt-[20px]">{{ $principal['texto4'] }}</p>
    <p class="mt-[20px]">{{ $principal['texto5'] }}</p>
</section>
{{--  --}}

{{--  --}}
<section class="w-[90%] inline-block mx-[5%]">
    {{--  --}}
    <div class="w-[100%] inline-block px-[60px] py-[80px] bg-[#5CD1FF] rounded-[10px] mt-[80px]">
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
