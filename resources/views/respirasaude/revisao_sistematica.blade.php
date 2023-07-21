@extends('respirasaude.layout.main_revisao')
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
<section id="section-master-prime" class="w-[100%] inline-block mt-[100px]">
    <div class="w-[100%] inline-block">
        <div class="w-[100%] inline-block">
            {{-- BLOCK IMAGE PRIME --}}
            <div id="block-prime-video" class="w-[50%] pl-[5%] float-left inline-block">
                {{-- BUTTON ACESSIBILITY --}}
                <div class="w-[100%] mt-[40px] inline-block">
                    <ul>
                        <li class="mr-[2px] inline-block"><img id="audios_home" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        {{-- <li class="mr-[2px] inline-block"><img id="libras_home" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li> --}}
                    </ul>
                </div>
                {{-- IMAGE/VIDEO --}}
                <div id="moldure-prime" class="w-[100%] inline-block rounded-[20px]">
                    {{--  --}}
                    <img id="box_audio_home" class="w-[100%] rounded-[20px]" src="/img/revisao_sistematica.jpg" />
                    {{-- <video id="box_libra_home" style="display: none; border-radius: 20px;" id="video-missão" src="/videos/resumo_pesquisa_1.mp4" controls="controls"></video> --}}
                </div>
                {{-- AUDIO --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="" style="display: none;" class="inline-block float-right mt-[20px]">
                        {{--  --}}
                        <audio controls="controls">
                            <source src="sua_musica.mp3" type="audio/mp3" />
                            seu navegador não suporta HTML5
                        </audio>
                    </div>
                </div>
            </div>
            {{-- BLOCK TEXT PRIME --}}
            <div id="block-prime-text" class="w-[45%] float-left inline-block pl-[80px] pb-[20px] pt-[80px] text-justify">
                <p class="text-[30px] leading-[30px] float-right text-right font-bold text-[#080E45]">Revisão Sistemática</p>
                <p class="text-right mt-[40px] float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Revisão sistemática, é um tipo de pesquisa em que o pesquisador identifica os estudos existentes sobre um tema de interesse, para responder uma pergunta específica, são necessários métodos muito rigorosos para encontrar e selecionar os estudos, depois os resultados desses estudos são agrupados para encontrar um único resultado que represente vários estudos, por fim é feita uma análise de qualidade para saber se é possível ter certeza nesse resultado.</p>
            </div>
        </div>
    </div>
</section>

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
