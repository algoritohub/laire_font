@extends('respirasaude.layout.main')
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
            <div style="background: linear-gradient(90deg, rgba(250,250,250,1) 75%, rgba(92,209,255,1) 75%);" id="texto" class="w-[50%] pl-[5%] h-[700px] inline-block float-left">

                {{-- REVISÃO SISTEMÁTICA --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[100%] h-[40px] mt-[50px]">
                        <ul class="">
                            <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                            <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div id="box_audio" style="background: url('/img/Asma.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[100%] mt-[30px] inline-block h-[450px]"></div>
                    {{--  --}}
                    <div class="mt-[30px]" style="display: none;" id="box_libra" class="w-[100%] inline-block h-[450px]">
                        {{-- AQUI VAI O VÍDEO DE ASMA --}}
                        <video id="video_missao" class="w-[100%]" controls="controls">
                            <source src="/img/Asma - Vídeo Em Líbras.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>



            {{--  --}}
            <div id="caixa_text_missao" class="w-[50%] pr-[5%] h-[700px] pt-[70px] inline-block float-left bg-[#5CD1FF]">

                {{-- TEXTO REVISÃO --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">Revisão Sistemática</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">Doença crônica que causa inflamação dos "tubos", chamados de brônquios, que levam ar até os pulmões. Os sintomas mais comuns da asma são: falta de ar, tosse, aperto ou chiado no peito. Os sintomas podem ser desencadeados por gatilhos como: alérgenos, frio, atividade física e gripes.</p>

                {{-- AUDIO --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="audio_libra" style="display: none;" class="inline-block float-right mt-[20px]">
                        {{--  --}}
                        <audio autoplay="autoplay" controls="controls">
                            <source src="sua_musica.mp3" type="audio/mp3" />
                            seu navegador não suporta HTML5
                        </audio>
                    </div>
                </div>
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
