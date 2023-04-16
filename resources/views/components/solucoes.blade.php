@php
    @$modal_cron  = $_GET['modal'];
    $return_link  = $_SERVER["REQUEST_URI"];
    $session_font = session('font');

    // CONTROLE DE FONTE
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }

    // OBJETIVO DE PUBLICAÇÃO
    // $objetivo = Illuminate\Support\Facades\DB::select("SELECT * FROM conteudos WHERE pagina = 1 AND bloco = 3");
    // $count2   = count($objetivo);

    // PDO
    $name_banco   = "laire_temp";
    $conectDB     = 'mysql:host=db4free.net;dbname='.$name_banco;
    $name_user    = "laire_ufrn";
    $pass_banco   = "Laire@2023";

    $conn         = new PDO($conectDB, $name_user, $pass_banco);

    // PDO RESGATE DE CONTEÚDO
    $stmt         = $conn->prepare('SELECT * FROM conteudos WHERE pagina = :pagina AND bloco = :bloco');
    $stmt->execute(array('pagina' => 1, 'bloco' => 3));
    $objetivo_cnt = $stmt->fetchAll();
    $count2       = count($objetivo_cnt);

    foreach ($objetivo_cnt as $objetivo) {}

    @$texto_objetivo1      = $objetivo['texto'];
    @$texto_objetivo2      = $objetivo['texto2'];
    @$texto_objetivo3      = $objetivo['texto3'];
    @$texto_objetivo4      = $objetivo['texto4'];
    @$texto_objetivo5      = $objetivo['texto5'];

    @$texto_objetivo_eng_1 = $objetivo['texto_eng'];
    @$texto_objetivo_eng_2 = $objetivo['texto2_eng'];
    @$texto_objetivo_eng_3 = $objetivo['texto3_eng'];
    @$texto_objetivo_eng_4 = $objetivo['texto4_eng'];
    @$texto_objetivo_eng_5 = $objetivo['texto5_eng'];

    // RESGATE DE SESSÃO DE IDIOMA
    @$session_idioma = session('idioma');

@endphp
{{--  --}}

{{-- BLOCO DE INFORMATIVO --}}

<section id="cronicas" class="w-[100%] mb-[40px] inline-block">
    {{--  --}}
    <div id="objetivo" id="text_solucoes"  class="w-[80%] pr-[650px] pl-[75px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[20px] mt-[310px] pl-[20px] border-l-[3px] border-l-[#00FF8C]"> Objetivo da pesquisa</p>
        @if($count2 > 0)

            {{-- PRIMEIRO PARÁGRAFO --}}
            @if (isset($session_idioma) AND !empty($session_idioma))
                {{-- TEXTO INGLÊS --}}
                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_1 }}</p>
            @else
                {{-- TEXTO PORTUGUÊS --}}
                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo1 }}</p>
            @endif

            {{-- SEGUNDO PARÁGRAFO --}}
            @if (isset($texto_objetivo2) AND !empty($texto_objetivo2))
                {{--  --}}
                @if (isset($session_idioma) AND !empty($session_idioma))
                    {{-- TEXTO INGLÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_2 }}</p>
                @else
                    {{-- TEXTO PORTUGUÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo2 }}</p>
                @endif
            @endif

            {{-- TERCEIRO PARÁGRAFO --}}
            @if (isset($texto_objetivo3) AND !empty($texto_objetivo3))
                {{--  --}}
                @if (isset($session_idioma) AND !empty($session_idioma))
                    {{-- TEXTO INGLÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_3 }}</p>
                @else
                    {{-- TEXTO PORTUGUÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo3 }}</p>
                @endif
            @endif

            {{-- QUARTO PARÁGRAFO --}}
            @if (isset($texto_objetivo4) AND !empty($texto_objetivo4))
                {{--  --}}
                @if (isset($session_idioma) AND !empty($session_idioma))
                    {{-- TEXTO INGLÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_4 }}</p>
                @else
                    {{-- TEXTO PORTUGUÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo4 }}</p>
                @endif
            @endif

            {{-- QUINTO PARÁGRAFO --}}
            @if (isset($texto_objetivo5) AND !empty($texto_objetivo5))
                {{--  --}}
                @if (isset($session_idioma) AND !empty($session_idioma))
                    {{-- TEXTO INGLÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_5 }}</p>
                @else
                    {{-- TEXTO PORTUGUÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo5 }}</p>
                @endif
            @endif
        @endif
    </div>
    {{--  --}}
    <div id="cx_azul_solucao" class="w-[20%] inline-block float-left h-[700px] bg-[#5CD1FF]">
        {{--  --}}
        <div id="cx_cinza_solucao" class="w-[800px] h-[440px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div id="objetivo.pesquisa"  class="w-[80%] pr-[650px] pl-[75px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p  class="text-[25px] font-bold mb-[20px] mt-[90px] pl-[20px] mb-[20px] border-l-[3px] border-l-[#00FF8C]">Como a pesquisa foi feita</p>

        <p id="metodo" class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Primeiro, nós identificamos os estudos que compararam os efeitos destes dois tipos de tratamento nos resultados de <b>mortalidade</b>,<b> qualidade de vida</b>, <b>satisfação</b> do paciente, <b>custos</b> do tratamento, <b>eventos adversos</b>, tempo de permanência no hospital, entre outros. <b>Esses estudos poderiam ter sido publicados em qualquer ano e em qualquer país do mundo</b>.</p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Depois que reunimos os estudos que tinham as características necessárias para entrar na revisão, nós realizamos uma análise estatística chamada metanálise. Assim, foi possível juntar os resultados de vários estudos que avaliaram as mesmas coisas que nós tínhamos interesse (mortalidade, qualidade de vida, satisfação, custos, eventos adversos...). Dessa forma, dá para comparar melhor os efeitos  do  tratamento recebido em casa com o recebido no hospital</p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify"><b>Entendeu como a revisão sistemática é legal</b>? Assim, ao invés de termos os resultados de apenas um estudo com poucos pacientes, nós conseguimos reunir os resultados de vários estudos e muitos pacientes! Mas isso não é simples, é necessário seguir uma metodologia muito rigorosa! <b>E tem mais</b>... É necessário <b>avaliar</b> muito bem esse conjunto de resultados, de vários estudos, para entendermos o quanto nós podemos confiar neles! </p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Agora que vocês já sabem o objetivo da pesquisa, já conhecem melhor as principais doenças respiratórias crônicas e, também já entenderam como essa revisão sistemática foi feita, vamos saber quais foram os resultados! Estão curiosos?
        </p>

        <a href="#resultado"><button class="px-[40px] text-[10px] mt-[20px] h-[40px] bg-[#080E45] rounded-[5px] text-[#00FF8C]">VAMOS LÁ</button></a>
    </div>
    {{--  --}}
    <div id="cx_azul_solucao" class="w-[20%] inline-block float-left h-[700px] bg-[#5CD1FF]">
        {{--  --}}
        <div id="cx_cinza_solucao" class="w-[800px] h-[440px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    @if (!empty($modal_cron))
    {{--  --}}
    <div class="modal_doenca">
        {{--  --}}
        <div class="w-[1200px] h-[550px] bg-[#ffffff] mx-auto mt-[7%] shadow-lg">
            {{--  --}}
            <div class="w-[100%] inline-block p-[30px]">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">H1N1</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <a href="{{ route('home.respira_saude') }}#cronicas"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>

