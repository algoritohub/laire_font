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

{{-- NEW BLOCK PRIME --}}
<section id="section-master-prime" class="w-[100%] mt-[100px] inline-block pb-[40px]">
    <div class="w-[100%] inline-block">
        <div class="w-[100%] inline-block">
            {{-- BLOCK IMAGE PRIME --}}
            <div id="block-prime-video" class="w-[50%] pl-[5%] float-left inline-block">
                {{-- BUTTON ACESSIBILITY --}}
                <div class="w-[100%] mt-[40px] inline-block">
                    <ul>
                        <li class="mr-[2px] inline-block"><img id="audios_home" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras_home" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
                {{-- IMAGE/VIDEO --}}
                <div id="moldure-prime" class="w-[100%] inline-block">
                    <img id="box_audio_home" class="rounded-[20px] border-[1px] shadow-lg" src="/img/doencas/{{ $doenca[0]->imagem1 }}">
                    <video id="box_libra_home" style="display: none; border-radius: 20px;" id="video-missão" src="/img/menor.mp4" controls="controls"></video>
                </div>
                {{-- AUDIO --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="audio_libra_home" style="display: none;" class="inline-block float-left mt-[20px]">
                        {{--  --}}
                        <audio autoplay="autoplay" controls="controls">
                            <source src="sua_musica.mp3" type="audio/mp3" />
                            seu navegador não suporta HTML5
                        </audio>
                    </div>
                </div>
            </div>
            {{-- BLOCK TEXT PRIME --}}
            <div id="block-prime-text" class="w-[45%] float-left inline-block pl-[80px] pb-[20px] pt-[80px] text-justify">

                <div class="w-[100%] mt-[40px] inline-block">
                    @if (isset($doenca) AND !empty($doenca))
                    {{-- NOME DA DOENÇA --}}
                    <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">{{ $doenca[0]->nome }}</p>
                    {{--  --}}
                    <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">{{ $definicao }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
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
