{{-- FONT --}}
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
    $objetivo = Illuminate\Support\Facades\DB::select("SELECT * FROM conteudos WHERE pagina = 1 AND bloco = 3");
    $count2   = count($objetivo);

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
                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto_eng }}</p>
            @else
                {{-- TEXTO PORTUGUÊS --}}
                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto }}</p>
            @endif

            {{-- SEGUNDO PARÁGRAFO --}}
            @if (isset($objetivo[0]->texto2_eng) AND !empty($objetivo[0]->texto2_eng))
                {{--  --}}
                @if (isset($session_idioma) AND !empty($session_idioma))
                    {{-- TEXTO INGLÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto2_eng }}</p>
                @else
                    {{-- TEXTO PORTUGUÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto2 }}</p>
                @endif
            @endif

            {{-- TERCEIRO PARÁGRAFO --}}
            @if (isset($objetivo[0]->texto3_eng) AND !empty($objetivo[0]->texto3_eng))
                {{--  --}}
                @if (isset($session_idioma) AND !empty($session_idioma))
                    {{-- TEXTO INGLÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto3_eng }}</p>
                @else
                    {{-- TEXTO PORTUGUÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto3 }}</p>
                @endif
            @endif

            {{-- QUARTO PARÁGRAFO --}}
            @if (isset($objetivo[0]->texto4_eng) AND !empty($objetivo[0]->texto4_eng))
                {{--  --}}
                @if (isset($session_idioma) AND !empty($session_idioma))
                    {{-- TEXTO INGLÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto4_eng }}</p>
                @else
                    {{-- TEXTO PORTUGUÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto4 }}</p>
                @endif
            @endif

            {{-- QUINTO PARÁGRAFO --}}
            @if (isset($objetivo[0]->texto5_eng) AND !empty($objetivo[0]->texto5_eng))
                {{--  --}}
                @if (isset($session_idioma) AND !empty($session_idioma))
                    {{-- TEXTO INGLÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto5_eng }}</p>
                @else
                    {{-- TEXTO PORTUGUÊS --}}
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $objetivo[0]->texto5 }}</p>
                @endif
            @endif
        @endif
    </div>
    {{--  --}}
    <div id="cx_azul_solucao" class="w-[20%] inline-block float-left h-[700px] bg-[#5CD1FF]">
        {{--  --}}
        <div id="cx_cinza_solucao" class="w-[800px] h-[440px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
    </div>
</section>

