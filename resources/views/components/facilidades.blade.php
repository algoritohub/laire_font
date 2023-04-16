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
<section id="metodos" class="w-[100%] inline-block">
    {{--  --}}
    <div id="caixa_cinza_facilidade" class="w-[20%] inline-block float-left h-[700px] bg-[#fafafa]">
        {{--  --}}
        <div id="caixa_cinza_facilidade" class="w-[800px] h-[440px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div id="text_resultado_facilidade" class="w-[80%] pl-[580px] pr-[60px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[40px] mt-[180px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Resultados</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">A revisão incluiu <b>13 estudos </b>presentando 1.056 pacientes com <b>asma, doença pulmonar obstrutiva crônica (DPOC) e fibrose cística.</b> As intervenções de atenção domiciliar avaliadas nos estudos foram: <b>consulta domiciliar</b>,<b> tratamento domiciliar de exacerbações, alta precoce, hospital em casa, antibioticoterapia domiciliar e programa de reabilitação domiciliar.</b></p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Não encontramos evidências suficientes para recomendar a atenção domiciliar para adultos com doenças respiratórias crônicas. Entretanto, foi possível observar que os estudos, na sua maioria, <b>observaram que os pacientes tratados com atenção domiciliar tiveram menor taxa de readmissão no hospital, menos eventos adversos, menor mortalidade  e melhor estado funcional.</b></p>
        {{-- <button class="px-[30px] mt-[20px] h-[40px] bg-[#080E45] text-[#00FF8C]">More information</button> --}}
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
