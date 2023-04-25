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


                {{-- ESSE BLOCO SERÁ REPLICADO --}}

                @if (!empty($doenca) AND $doenca == "asma")
                {{-- ASMA --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="box_audio" style="background: url('/img/Asma.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[40px] mt-[50px]">
                        <ul class="">
                            <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                            <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="mt-[40px]" style="display: none;" id="box_libra" class="w-[780px] inline-block absolute h-[450px]">
                        {{-- AQUI VAI O VÍDEO DE ASMA --}}
                        <video id="video_missao" class="w-[780px]" controls="controls">
                            <source src="/img/Asma - Vídeo Em Líbras.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                @endif

                @if (!empty($doenca) AND $doenca == "fibrose_cistica")
                {{-- FIBROSE CÍSTICA --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="box_audio1" style="background: url('/img/Fibrose cística.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[40px] mt-[50px]">
                        <ul class="">
                            <li class="mr-[2px] inline-block"><img id="audios1" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                            <li class="mr-[2px] inline-block"><img id="libras1" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="mt-[40px]" style="display: none;" id="box_libra1" class="w-[780px] inline-block absolute h-[450px]">
                        {{-- AQUI VAI O VÍDEO DE FIBROSE CÍSTICA --}}
                        <video id="video_missao" class="w-[780px]" controls="controls">
                            <source src="/img/" type="video/mp4">
                        </video>
                    </div>
                </div>
                @endif

                @if (!empty($doenca) AND $doenca == "dpoc")
                {{-- DPOC --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="box_audio2" style="background: url('/img/DPOC.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[40px] mt-[50px]">
                        <ul class="">
                            <li class="mr-[2px] inline-block"><img id="audios2" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                            <li class="mr-[2px] inline-block"><img id="libras2" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="mt-[40px]" style="display: none;" id="box_libra2" class="w-[780px] inline-block absolute h-[450px]">
                        {{-- AQUI VAI O VÍDEO DE DPOC--}}
                        <video id="video_missao" class="w-[780px]" controls="controls">
                            <source src="/img/Dpoc - Vídeo Em Líbras.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                @endif


                @if (!empty($doenca) AND $doenca == "bronquiectasia")
                {{-- BRONQUIECTASIA --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="box_audio3" style="background: url('/img/Bronquiectasia.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[40px] mt-[50px]">
                        <ul class="">
                            <li class="mr-[2px] inline-block"><img id="audios3" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                            <li class="mr-[2px] inline-block"><img id="libras3" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="mt-[40px]" style="display: none;" id="box_libra3" class="w-[780px] inline-block absolute h-[450px]">
                        {{-- AQUI VAI O VÍDEO DE BRONQUIECTASIA --}}
                        <video id="video_missao" class="w-[780px]" controls="controls">
                            <source src="/img/Bronquiectasia - Vídeo Em Líbras(1).mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                @endif

                {{-- Fibrose pulmonar --}}
                @if (!empty($doenca) AND $doenca == "fibrose_pulmonar")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="box_audio4" style="background: url('/img/Fibrose pulmonar.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[40px] mt-[50px]">
                        <ul class="">
                            <li class="mr-[2px] inline-block"><img id="audios4" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                            <li class="mr-[2px] inline-block"><img id="libras4" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="mt-[40px]" style="display: none;" id="box_libra4" class="w-[780px] inline-block absolute h-[450px]">
                        {{-- AQUI VAI O VÍDEO DE FIBROSE PULMONAR--}}
                        <video id="video_missao" class="w-[780px]" controls="controls">
                            <source src="/img/Fibrose Pulmonar - Vídeo Em Líbras.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

            @endif
            {{-- SINUSITE --}}
            @if (!empty($doenca) AND $doenca == "sinusite")
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div id="box_audio5" style="background: url('/img/Sinusite.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                {{--  --}}
                <div class="w-[100%] h-[40px] mt-[50px]">
                    <ul class="">
                        <li class="mr-[2px] inline-block"><img id="audios5" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras5" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
                {{--  --}}
                <div class="mt-[40px]" style="display: none;" id="box_libra5" class="w-[780px] inline-block absolute h-[450px]">
                    {{-- AQUI VAI O VÍDEO DE SINUSITE --}}
                    <video id="video_missao" class="w-[780px]" controls="controls">
                        <source src="/img/VIDEO_AQUI" type="video/mp4">
                    </video>
                </div>
            </div>
            @endif

             {{-- HIPERTENSÃO PULMONAR --}}
             @if (!empty($doenca) AND $doenca == "hipertensao_pulmonar")
             <div class="w-[100%] inline-block">
                {{--  --}}
                <div id="box_audio6" style="background: url('/img/Hipertensão pulmonar.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                {{--  --}}
                <div class="w-[100%] h-[40px] mt-[50px]">
                    <ul class="">
                        <li class="mr-[2px] inline-block"><img id="audios6" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras6" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
                {{--  --}}
                <div class="mt-[40px]" style="display: none;" id="box_libra6" class="w-[780px] inline-block absolute h-[450px]">
                    {{-- AQUI VAI O VÍDEO DE HIPERTENSAO PULMONAR --}}
                    <video id="video_missao" class="w-[780px]" controls="controls">
                        <source src="/img/VIDEO_AQUI" type="video/mp4">
                    </video>
                </div>
            </div>

             @endif

             {{-- SINDROME PÓS-COVID 19 --}}
             @if (!empty($doenca) AND $doenca == "sindrome_pos_covid_19")
             <div class="w-[100%] inline-block">
                {{--  --}}
                <div id="box_audio7" style="background: url('/img/Covid-19.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                {{--  --}}
                <div class="w-[100%] h-[40px] mt-[50px]">
                    <ul class="">
                        <li class="mr-[2px] inline-block"><img id="audios7" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras7" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
                {{--  --}}
                <div class="mt-[40px]" style="display: none;" id="box_libra7" class="w-[780px] inline-block absolute h-[450px]">
                    {{-- AQUI VAI O VÍDEO DE SINDROME POS COVID 19 --}}
                    <video id="video_missao" class="w-[780px]" controls="controls">
                        <source src="/img/VIDEO_AQUI" type="video/mp4">
                    </video>
                </div>
            </div>
            @endif
            {{-- Pneumonia--}}
            @if (!empty($doenca) AND $doenca == "pneumonia")
            <div class="w-[100%] inline-block">
               {{--  --}}
               <div id="box_audio7" style="background: url('/img/Pneumonia.png'); background-size: 100%; background-repeat: no-repeat;   box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5) ;" class="w-[650px] mt-[140px] inline-block absolute h-[350px]"></div>
               {{--  --}}
               <div class="w-[100%] h-[40px] mt-[50px]">
                   <ul class="">
                       <li class="mr-[2px] inline-block"><img id="audios7" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                       <li class="mr-[2px] inline-block"><img id="libras7" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                   </ul>
               </div>
               {{--  --}}
               <div class="mt-[40px]" style="display: none;" id="box_libra7" class="w-[780px] inline-block absolute h-[450px]">
                   {{-- AQUI VAI O VÍDEO DE SINDROME POS COVID 19 --}}
                   <video id="video_missao" class="w-[780px]" controls="controls">
                       <source src="/img/VIDEO_AQUI" type="video/mp4">
                   </video>
               </div>
           </div>
           @endif
                {{-- BRONQUIOLITE--}}
            @if (!empty($doenca) AND $doenca == "bronquiolite")
            <div class="w-[100%] inline-block">
               {{--  --}}
               <div id="box_audio7" style="background: url('/img/Bronquiolite.png'); background-size: 100%; background-repeat: no-repeat;  box-shadow: 2px 2px 10px  rgba(0, 0, 0, 0.5)" class="w-[630px] mt-[140px] inline-block absolute h-[350px]"></div>
               {{--  --}}
               <div class="w-[100%] h-[40px] mt-[50px]">
                   <ul class="">
                       <li class="mr-[2px] inline-block"><img id="audios7" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                       <li class="mr-[2px] inline-block"><img id="libras7" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                   </ul>
               </div>
               {{--  --}}
               <div class="mt-[40px]" style="display: none;" id="box_libra7" class="w-[780px] inline-block absolute h-[450px]">
                   {{-- AQUI VAI O VÍDEO DE SINDROME POS COVID 19 --}}
                   <video id="video_missao" class="w-[780px]" controls="controls">
                       <source src="/img/VIDEO_AQUI" type="video/mp4">
                   </video>
               </div>
           </div>

             @endif

              {{-- H1N1--}}
            @if (!empty($doenca) AND $doenca == "h1n1")
            <div class="w-[100%] inline-block">
               {{--  --}}
               <div id="box_audio7" style="background: url('/img/H1N1.png'); background-size: 100%; background-repeat: no-repeat;  box-shadow: 2px 2px 10px  rgba(0, 0, 0, 0.5)" class="w-[630px] mt-[140px] inline-block absolute h-[350px]"></div>
               {{--  --}}
               <div class="w-[100%] h-[40px] mt-[50px]">
                   <ul class="">
                       <li class="mr-[2px] inline-block"><img id="audios7" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                       <li class="mr-[2px] inline-block"><img id="libras7" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                   </ul>
               </div>
               {{--  --}}
               <div class="mt-[40px]" style="display: none;" id="box_libra7" class="w-[780px] inline-block absolute h-[450px]">
                   {{-- AQUI VAI O VÍDEO DE SINDROME POS COVID 19 --}}
                   <video id="video_missao" class="w-[780px]" controls="controls">
                       <source src="/img/VIDEO_AQUI" type="video/mp4">
                   </video>
               </div>
           </div>

             @endif
             @if (!empty($doenca) AND $doenca == "covid_19")
             <div class="w-[100%] inline-block">
                {{--  --}}
                <div id="box_audio7" style="background: url('/img/Covid-19.png'); background-size: 100%; background-repeat: no-repeat;  box-shadow: 2px 2px 10px  rgba(0, 0, 0, 0.5)" class="w-[630px] mt-[140px] inline-block absolute h-[350px]"></div>
                {{--  --}}
                <div class="w-[100%] h-[40px] mt-[50px]">
                    <ul class="">
                        <li class="mr-[2px] inline-block"><img id="audios7" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras7" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
                {{--  --}}
                <div class="mt-[40px]" style="display: none;" id="box_libra7" class="w-[780px] inline-block absolute h-[450px]">
                    {{-- AQUI VAI O VÍDEO DE SINDROME POS COVID 19 --}}
                    <video id="video_missao" class="w-[780px]" controls="controls">
                        <source src="/img/VIDEO_AQUI" type="video/mp4">
                    </video>
                </div>
            </div>

              @endif


              @if (!empty($doenca) AND $doenca == "tuberculose")
             <div class="w-[100%] inline-block">
                {{--  --}}
                <div id="box_audio7" style="background: url('/img/Tuberculose.png'); background-size: 100%; background-repeat: no-repeat;  box-shadow: 2px 2px 10px  rgba(0, 0, 0, 0.5)" class="w-[630px] mt-[140px] inline-block absolute h-[350px]"></div>
                {{--  --}}
                <div class="w-[100%] h-[40px] mt-[50px]">
                    <ul class="">
                        <li class="mr-[2px] inline-block"><img id="audios7" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras7" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
                {{--  --}}
                <div class="mt-[40px]" style="display: none;" id="box_libra7" class="w-[780px] inline-block absolute h-[450px]">
                    {{-- AQUI VAI O VÍDEO DE SINDROME POS COVID 19 --}}
                    <video id="video_missao" class="w-[780px]" controls="controls">
                        <source src="/img/Tuberculose - Vídeo Em Líbras.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

              @endif
              @if (!empty($doenca) AND $doenca == "influenza")
             <div class="w-[100%] inline-block">
                {{--  --}}
                <div id="box_audio7" style="background: url('/img/Influenza.png'); background-size: 100%; background-repeat: no-repeat;  box-shadow: 2px 2px 10px  rgba(0, 0, 0, 0.5)" class="w-[630px] mt-[140px] inline-block absolute h-[350px]"></div>
                {{--  --}}
                <div class="w-[100%] h-[40px] mt-[50px]">
                    <ul class="">
                        <li class="mr-[2px] inline-block"><img id="audios7" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras7" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
                {{--  --}}
                <div class="mt-[40px]" style="display: none;" id="box_libra7" class="w-[780px] inline-block absolute h-[450px]">
                    {{-- AQUI VAI O VÍDEO DE SINDROME POS COVID 19 --}}
                    <video id="video_missao" class="w-[780px]" controls="controls">
                        <source src="/img/VIDEO_AQUI" type="video/mp4">
                    </video>
                </div>
            </div>

              @endif
              @if (!empty($doenca) AND $doenca == "coqueluxe")
             <div class="w-[100%] inline-block">
                {{--  --}}
                <div id="box_audio7" style="background: url('/img/Coqueluche.png'); background-size: 100%; background-repeat: no-repeat;  box-shadow: 2px 2px 10px  rgba(0, 0, 0, 0.5)" class="w-[630px] mt-[140px] inline-block absolute h-[350px]"></div>
                {{--  --}}
                <div class="w-[100%] h-[40px] mt-[50px]">
                    <ul class="">
                        <li class="mr-[2px] inline-block"><img id="audios7" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras7" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
                {{--  --}}
                <div class="mt-[40px]" style="display: none;" id="box_libra7" class="w-[780px] inline-block absolute h-[450px]">
                    {{-- AQUI VAI O VÍDEO DE SINDROME POS COVID 19 --}}
                    <video id="video_missao" class="w-[780px]" controls="controls">
                        <source src="/img/VIDEO_AQUI" type="video/mp4">
                    </video>
                </div>
            </div>

              @endif

                {{-- aqui --}}

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

                {{-- DPOC --}}
                @if (!empty($doenca) AND $doenca == "dpoc")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">DPOC</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">A Fibrose Cística é uma doença genética e crônica, caracterizada por diversas mutações de um gene denominado CFTR  que é o gene regulador transmembrana da fibrose cística. Afeta principalmente os pulmões, pâncreas, rins, fígado, aparelho digestivo, entre outros órgãos. Seus principais sintomas são: tosse crônica, suor mais salgado que o comum, diarréia gordurosa ou com forte odor e dificuldade de ganhar peso e altura.</p>
                @endif

           {{-- BRONQUIECTASIA --}}
                @if (!empty($doenca) AND $doenca == "bronquiectasia")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Bronquiectasia</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Bronquiectasia é o aumento anormal, permanente e irreversível de estruturas pulmonares chamadas de brônquios e bronquíolos, causada por infecções recorrentes e inflamações. Alguns sintomas da doença são: tosse crônica, febre e grande produção de secreção, com presença de pus e com forte odor.</p>
                @endif
                 {{-- H1N1 --}}
                 @if (!empty($doenca) AND $doenca == "h1n1")
                 {{-- NOME DA DOENÇA --}}
                 <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">H1N1</p>
                 {{--  --}}
                 <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença causada pelo vírus H1N1 que é transmitido por meio da inalação de gotículas respiratórias contendo as partículas virais infectantes. Atualmente, são conhecidos três tipos de vírus influenza: A, B e C. Os dois primeiros são mais propícios a provocar epidemias sazonais em diversas localidades do mundo, enquanto o último costuma provocar alguns casos mais leves. Os principais sintomas são: febre alta, dor muscular, dor de cabeça, tosse e cansaço.</p>
                 @endif
                 {{-- Tuberculose --}}
                 @if (!empty($doenca) AND $doenca == "tuberculose")
                 {{-- NOME DA DOENÇA --}}
                 <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Tuberculose</p>
                 {{--  --}}
                 <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença infecciosa causada pela bactéria Mycobacterium tuberculosis. A tuberculose pulmonar que é transmitida pelo ar através de gotículas de saliva expelidas pela pessoa infectada. Os sintomas mais comuns são: tosse persistente, dor no peito, febre, suor noturno, falta de apetite, dores musculares, cansaço e, em casos mais graves, tosse com sangue.</p>
                 @endif
                  {{-- Pneumonia --}}
                  @if (!empty($doenca) AND $doenca == "pneumonia")
                  {{-- NOME DA DOENÇA --}}
                  <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Pneumonia</p>
                  {{--  --}}
                  <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença causada por microorganismos (vírus, bactérias e fungos) que pode ser adquirida pelo ar, saliva, secreções e transfusão de sangue. Dentre os sintomas mais comuns estão: tosse, febre alta, calafrios, falta de ar, dor no peito ao respirar, confusão mental, dor de cabeça, suor em excesso, dores musculares e opacidade pulmonar visível no raio X. </p>
                  @endif
                   {{-- bronquiolite --}}
                   @if (!empty($doenca) AND $doenca == "bronquiolite")
                   {{-- NOME DA DOENÇA --}}
                   <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Bronquiolite</p></p>
                   {{--  --}}
                   <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença infecciosa que resulta na obstrução dos bronquíolos que são tubos estreitos que levam o ar para os pulmões. É causada, na maioria das vezes, pelo vírus sincicial respiratório (VSR) e atinge bebês menores de dois anos, causando sintomas semelhantes aos do resfriado, como: tosse, nariz entupido e chiado no peito. Em casos mais graves, pode causar cansaço, dificuldade para respirar e necessidade de internação.</p>
                   @endif
                    {{-- Coqueluche --}}
                    @if (!empty($doenca) AND $doenca == "coqueluxe")
                    {{-- NOME DA DOENÇA --}}
                    <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Coqueluche</p></p>
                    {{--  --}}
                    <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença infectocontagiosa aguda do trato respiratório causada pela bactéria Bordetella Pertussis, que provoca tosse paroxística de intensidade variável e com duração de semanas. A principal forma de transmissão é através do contato direto com a pessoa infectada. A forma mais eficaz de prevenção é por meio de vacinação.</p>
                    @endif
                    @if (!empty($doenca) AND $doenca == "covid_19")
                    {{-- NOME DA DOENÇA --}}
                    <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Covid-19</p></p>
                    {{--  --}}
                    <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Infecção respiratória aguda causada pelo novo coronavírus (SARS-CoV-2). É altamente transmissível e pode ser potencialmente grave principalmente em pessoas com comorbidades. Seus sintomas incluem tosse, dor de garganta, febre, diarreia, dor de cabeça, dor muscular ou articular, fadiga e perda do olfato e do paladar.</p>
                    @endif
                    @if (!empty($doenca) AND $doenca == "influenza")
                    {{-- NOME DA DOENÇA --}}
                    <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">INFLUENZA</p></p>
                    {{--  --}}
                    <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença causada pelo vírus H1N1 que é transmitido por meio da inalação de gotículas respiratórias contendo as partículas virais infectantes. Atualmente, são conhecidos três tipos de vírus influenza: A, B e C. Os dois primeiros são mais propícios a provocar epidemias sazonais em diversas localidades do mundo, enquanto o último costuma provocar alguns casos mais leves. Os principais sintomas são: febre alta, dor muscular, dor de cabeça, tosse e cansaço.</p>
                    @endif


                {{-- FALTA ALGUMAS DOENÇAS CRÔNICAS --}}

                {{-- DOENÇAS AGUDAS --}}

                {{-- FIBROSE PULMONAR --}}
                @if (!empty($doenca) AND $doenca == "fibrose_pulmonar")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Fibrose Pulmonar</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença crônica e progressiva em que os pulmões ficam danificados e com cicatrizes (fibrosados), causando espessamento e endurecimento das paredes pulmonares e, consequentemente, dificuldade para respirar.</p>
                @endif

                {{-- SINUSITE --}}
                @if (!empty($doenca) AND $doenca == "sinusite")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Sinusite</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Inflamação dos seios paranasais (cavidades aéreas dentro dos ossos do crânio, situados ao redor do nariz). Os sintomas mais comuns são: produção de muco nasal espesso, nariz entupido e dor na face.
                </p>
                @endif

                {{-- HIPERTENSÃO PULMONAR --}}
                @if (!empty($doenca) AND $doenca == "hipertensao_pulmonar")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Hipertensão Pulmonar </p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença progressiva, caracterizada pela elevação da pressão arterial pulmonar. Os sintomas mais comuns, são: falta de ar ao realizar atividades que demandam esforço, cansaço, fraqueza, desmaios, inchaço nos braços e mãos e inchaço abdominal.
                </p>
                @endif

                {{-- SINDROME PÓS-COVID 19 --}}
                @if (!empty($doenca) AND $doenca == "sindrome_pos_covid_19")
                {{-- NOME DA DOENÇA --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Sindrome Pós-Covid 19</p>Infecção respiratória aguda causada pelo novo coronavírus (SARS-CoV-2). É altamente transmissível e pode ser potencialmente grave principalmente em pessoas com comorbidades. Seus sintomas incluem tosse, dor de garganta, febre, diarreia, dor de cabeça, dor muscular ou articular, fadiga e perda do olfato e do paladar.
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
<section style="display: none;" class="w-[94%] my-[100px] mx-[3%] inline-block">
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
