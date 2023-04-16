{{-- FONT --}}
@php
    @$modal_agud  = $_GET['modal'];
    $return_link  = $_SERVER["REQUEST_URI"];
    $session_font = session('font');

    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }
@endphp
{{--  --}}

{{-- BLOCO DE INFORMATIVO --}}
<section id="importancia" class="w-[100%] inline-block">
    {{--  --}}
    <div id="cx_cinza_barreira" class="w-[20%] inline-block float-left h-[700px] bg-[#fafafa]">
        {{--  --}}
        <div id="cx_cinza_barreira"  class="w-[800px] h-[440px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div id="text_barreira" class="w-[80%] pl-[580px] pr-[60px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[40px] mt-[180px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Como controlar os sintómas</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Mundialmente as doenças respiratórias crônicas têm uma alta taxa de internação hospitalar e mortalidade. Alguns exemplos importantes dessas doenças são a <b class="cursor-pointer" id="DPOC">Doença Pulmonar Obstrutiva Crônica (DPOC)</b> <div style="display: none;" id="blue" class="w-[400px] h-[100px] absolute bg-[blue]"></div> , a <b class="cursor-pointer" id="asma">asma</b> <div style="display: none;" id="yellow" class="w-[400px] h-[100px] absolute bg-[yellow]"></div>, a <b class="cursor-pointer" id="fibrose">fibrose cística</b> <div style="display: none;" id="purple" class="w-[400px] h-[100px] absolute bg-[purple]"></div>, a <b>bronquiectasia</b> e a <b>fibrose pulmonar</b>.</p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Aqui no <b>RespiraSaúde</b> vamos falar, de uma forma muito simples, sobre a pesquisa que foi realizada pelo nosso time de pesquisadores em parceria com o Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq) e Ministério da Saúde (MS). Nesta pesquisa nós realizamos uma <b>revisão</b>sistemática</b> com o objetivo de comparar os efeitos da assistência domiciliar com a assistência hospitalar para pessoas com doenças respiratórias crônicas. <b>Isso mesmo, nós comparamos os resultados do tratamento recebido em casa com o recebido no hospital!</b></p>

        {{-- <button class="px-[30px] mt-[20px] h-[40px] bg-[#080E45] text-[#00FF8C]">More information</button> --}}

        <div style="display: none;" id="ask1" class="w-[300px] h-[200px] bg-[blue]"></div>
    </div>
    {{--  --}}
    @if (!empty($modal_agud))
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
                    <a href="{{ route('home.respira_saude') }}#agudas"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
