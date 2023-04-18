@extends('respirasaude.layout.main_doenca')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

@php
    // FUNÇÃO FONTE
    $session_font = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }

@endphp
{{-- SECTION --}}
<section class="w-[100%] mt-[-20px] inline-block">
    {{--  --}}
    <div id="missao" class="w-[100%] h-[110px]"></div>
    {{--  --}}
    <section class="w-[100%] inline-block">
        {{--  --}}
        <div id="caixa-cinza-1" class="w-[100%] bg-[#eeeeee] inline-block">
            {{--  --}}
            <div id="texto" class="w-[50%] pl-[5%] h-[600px] inline-block float-left">
                {{--  --}}
                <div id="box_audio" style="background: url('/img/TUBERCULOSE 01.jpg'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                {{--  --}}
                <div class="mt-[10%]"  style="display: none;" id="box_libra" class="w-[780px] inline-block absolute h-[450px]">
                    {{--  --}}
                    <video id="video_missao" class="w-[780px]" controls="controls">
                        <source src="/img/" type="video/mp4">
                    </video>
                </div>
                {{--  --}}
                <div class="w-[100%] h-[40px] mt-[50px]">
                    <ul class="">
                        <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
            </div>
            {{--  --}}
            <div id="caixa_text_missao" class="w-[50%] pr-[5%] h-[700px] pt-[70px] inline-block float-left bg-[#5CD1FF]">

                {{-- ASMA --}}
                @if (!empty($doenca) AND $doenca == "asma")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Asma</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença crônica que causa inflamação dos "tubos", chamados de brônquios, que levam ar até os pulmões. Os sintomas mais comuns da asma são: falta de ar, tosse, aperto ou chiado no peito. Os sintomas podem ser desencadeados por gatilhos como: alérgenos, frio, atividade física e gripes.</p>
                @endif

                {{-- FIBROSE CÍSTICA --}}
                @if (!empty($doenca) AND $doenca == "fibrose_cistica")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Fibrose Cística</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">A Fibrose Cística é uma doença genética e crônica, caracterizada por diversas mutações de um gene denominado CFTR  que é o gene regulador transmembrana da fibrose cística. Afeta principalmente os pulmões, pâncreas, rins, fígado, aparelho digestivo, entre outros órgãos. Seus principais sintomas são: tosse crônica, suor mais salgado que o comum, diarréia gordurosa ou com forte odor e dificuldade de ganhar peso e altura.</p>
                @endif

                {{-- FIBROSE CÍSTICA --}}
                @if (!empty($doenca) AND $doenca == "dpoc")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">DPOC</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">A Fibrose Cística é uma doença genética e crônica, caracterizada por diversas mutações de um gene denominado CFTR  que é o gene regulador transmembrana da fibrose cística. Afeta principalmente os pulmões, pâncreas, rins, fígado, aparelho digestivo, entre outros órgãos. Seus principais sintomas são: tosse crônica, suor mais salgado que o comum, diarréia gordurosa ou com forte odor e dificuldade de ganhar peso e altura.</p>
                @endif

                {{-- PROXIMA DOENÇA CRÓNICA --}}
                @if (!empty($doenca) AND $doenca == "bronquiectasia")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">BRONQUIECTASIA</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Bronquiectasia é o aumento anormal, permanente e irreversível de estruturas pulmonares chamadas de brônquios e bronquíolos, causada por infecções recorrentes e inflamações. Alguns sintomas da doença são: tosse crônica, febre e grande produção de secreção, com presença de pus e com forte odor.</p>
                @endif

                {{-- DOENÇAS AGUDAS --}}

                {{-- PRIMEIRA DOENÇA CRÓNICA --}}
                @if (!empty($doenca) AND $doenca == "fibrose_pulmonar")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">FIBROSE PULMONAR</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença crônica e progressiva em que os pulmões ficam danificados e com cicatrizes (fibrosados), causando espessamento e endurecimento das paredes pulmonares e, consequentemente, dificuldade para respirar.</p>
                @endif

                {{-- PRIMEIRA DOENÇA CRÓNICA --}}
                @if (!empty($doenca) AND $doenca == "sinusite")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Sinusite</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Inflamação dos seios paranasais (cavidades aéreas dentro dos ossos do crânio, situados ao redor do nariz). Os sintomas mais comuns são: produção de muco nasal espesso, nariz entupido e dor na face.
                </p>
                @endif
                 {{-- PRIMEIRA DOENÇA CRÓNICA --}}
                 @if (!empty($doenca) AND $doenca == "hipertensao_pulmonar")
                 {{-- NOME DA DOENÇA --}}
                 <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">HIPERTENSÃO PULMONAR </p>
                 {{--  --}}
                 <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença progressiva, caracterizada pela elevação da pressão arterial pulmonar. Os sintomas mais comuns, são: falta de ar ao realizar atividades que demandam esforço, cansaço, fraqueza, desmaios, inchaço nos braços e mãos e inchaço abdominal.
                 </p>
                 @endif
                  {{-- PRIMEIRA DOENÇA CRÓNICA --}}
                @if (!empty($doenca) AND $doenca == "sindrome_pos_covid_19")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">sindrome pós covid 19</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">
                </p>
                @endif
            </div>
        </div>
    </section>

</section>
{{-- CONTROLE --}}

{{-- TRATAMENTO --}}

{{-- PUBLICAÇÕES --}}
<section class="w-[94%] my-[100px] mx-[3%] inline-block">
    {{--  --}}
    <div class="w-[100%] inline-block">
        {{--  --}}
        <div class="w-[30.3%] h-[400px] mx-[1.5%] float-left bg-[silver]"></div>
        {{--  --}}
        <div class="w-[30.3%] h-[400px] mx-[1.5%] float-left bg-[silver]"></div>
        {{--  --}}
        <div class="w-[30.3%] h-[400px] mx-[1.5%] float-left bg-[silver]"></div>
    </div>
</section>

{{--  --}}
@endsection
