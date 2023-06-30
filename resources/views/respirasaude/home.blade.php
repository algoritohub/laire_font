
@extends('respirasaude.layout.main')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

{{--  --}}
@php
    $session_font = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }
@endphp

{{-- SLIDE --}}
<div class="w-[100%] inline-block bg-[#00ff8c]">
    <div class="slider">
        {{--  --}}
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">

            {{-- COMPONENTES --}}
            <div class="slide first">
                <a href="{{ route('projeto1') }}"><x-master-projeto1/></a>
            </div>

            <div class="slide">
                <a href="{{ route('projeto2') }}"><x-master-projeto2/></a>
            </div>

            <div class="slide">
                <a href="{{ route('projeto3') }}"><x-master-projeto3/></a>
            </div>

            {{-- NAVEGATION --}}
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
        </div>
        {{-- NAVEGATION MANUAL --}}
        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
        </div>
    </div>
</div>

@if ($conteudo)
{{-- NEW BLOCK PRIME --}}
<section id="section-master-prime" class="w-[100%] inline-block pb-[40px]">
    <main id="missao" class="w-[100%] h-[90px]"></main>
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
                    <img id="box_audio_home" class="rounded-[20px] border-[1px] shadow-lg" src="/img/conteudo/{{ $conteudo[0]->imagem }}">
                    <video id="box_libra_home" style="display: none; border-radius: 20px;" id="video-missão" src="/img/menor.mp4" controls="controls"></video>
                </div>
                {{-- AUDIO --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="audio_libra_home" style="display: none;" class="inline-block float-left mt-[20px]">
                        {{--  --}}
                        <audio controls="controls">
                            <source src="/mp3/Missão ‐ Feito com o Clipchamp.mp3" type="audio/mp3" />
                            seu navegador não suporta HTML5
                        </audio>
                    </div>
                </div>
            </div>
            {{-- BLOCK TEXT PRIME --}}
            <div id="block-prime-text" class="w-[45%] float-left inline-block pl-[80px] pb-[20px] pt-[80px] text-justify">

                <p class="text-[30px] leading-[30px] float-left text-left font-bold text-[#080E45]">{{ $conteudo[0]->titulo }}</p>

                <div class="w-[100%] mt-[40px] inline-block">
                    @foreach ($descricao_blocos as $paragrafo)
                    <p id="text_projeto3" class="mb-[10px] text-justify text-[{{ $numb_font }}px]">{{ $paragrafo }}.</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@if ($eventos)
{{-- BLOCO DE EVENTOS --}}
<section class="w-[100%] mt-[40px] inline-block">
    <main id="eventos" class="w-[100%] h-[130px]"></main>
    {{--  --}}
    <div class="w-[90%] mx-[5%] inline-block">
        {{--  --}}
        <p class="text-center font-bold text-[25px]">Eventos</p>
        {{--  --}}
        @foreach ($eventos as $evento)
        {{--  --}}
        <div class="w-[100%] mt-[20px] inline-block">
            <div id="mentos" class="w-[30.3%] mx-[1.5%] inline-block">
                <a href="{{ route('admin.eventos.modal', ['id' => $evento->id]) }}">
                    <div class="w-[100%] shadow-lg border-[1px] inline-block h-[200px] rounded-[20px]" style="background-image: url('/img/eventos/{{ $evento->imagem }}'); background-size: cover; background-position: center;"></div>
                </a>
                {{--  --}}
                <div class="w-[100%] mt-[25px] inline-block">
                    <p class="font-bold text-[16px] uppercase">{{ $evento->titulo }}</p>
                    <p class="mt-[3px]">{{ $evento->subtitulo }}</p>
                </div>
            </div>
        </div>
        @endforeach

        {{-- MODAL EVENTO --}}
        @if (isset($evento_detal) AND !empty($evento_detal))
        {{--  --}}
        <div class="modal_master_eventos">
            {{--  --}}
            <div id="modal_evento" class="w-[1000px] mt-[3%] shadow-lg bg-[#ffffff] h-[520px] p-[50px] rounded-[20px] mx-auto">
                {{--  --}}
                <div class="w-[100%] mb-[30px] inline-block">
                    {{--  --}}
                   <div class="w-[70%] inlin-block float-left">
                        {{--  --}}
                        <p class="font-bold font-size-[20px] uppercase">{{ $evento_detal->titulo }}</p>
                        <p class="mt-[5px]">{{ $evento_detal->subtitulo }}</p>
                   </div>
                   {{--  --}}
                   <div class="w-[30%] inlin-block float-left">
                        {{--  --}}
                        <a href="{{ route('home.respira_saude') }}"><p class="float-right font-[20px]">✕</p></a>
                   </div>
                </div>
                {{--  --}}
                <div id="content-modal" class="w-[100%] inline-block h-[300px] overflow-scroll">
                    {{--  --}}
                    <div class="w-[100%] h-[150px] rounded-[20px] border-[1px] border-[#cdcdcd]" style="background-image: url('/img/eventos/{{ $evento_detal->imagem }}'); background-size: cover;"></div>
                    {{--  --}}
                    <p class="mt-[20px] text-[13px]">{{ $texto_detal }}</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <a href="{{ $evento_detal->link_video }}" target="_blank"><button id="button_externo" class="px-[20px] text-[13px] h-[40px] rounded-[100px] bg-[#212121] text-[#ffffff]">Link externo</button></a>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endif

<!--BLOCO RESULTADOS-->
<section id="projeto_extensao" class="w-[100%] inline-block">
    <main id="extensao" class="w-[100%] h-[80px]"></main>
    {{--  --}}
    <center>
        <p id="pex" class="font-bold text-[#212121] text-[25px] leading-[35px] w-[500px] mt-[60px] pb-[20px]">Projetos de Extensão</p>
    </center>
    <div id="caixa_evt" class="w-[94%] mx-[3%] mt-[70px] inline-block">
        {{--  --}}
        <div id="eventos1" class="w-[28%] mx-[2.5%] float-left">
            {{--  --}}
            <div style="border-radius: 20px;" class="w-[100%] inline-block border-[1px] border-[#cdcdcd] bg-[#fafafa] shadow-lg inline-block ">
                {{--  --}}
                <div style="border-radius: 20px 20px 0px 0px;" id="img_projeto_extensao" class="w-[100%] h-[200px] bg-[gray] mx-auto">

                </div>
                {{--  --}}
                <div class="w-[100%] h-[150px] p-[20px] inline-block">
                    {{--  --}}
                    <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">No nosso Instagram, você encontra conteudos relacionados ao nosso projeto de extensão. </p>
                </div>
                {{--  --}}
            </div>
            {{--  --}}
            <div id="campo_nome_pex" class="w-[100%] inline-block h-[150px]">
                {{--  --}}
                <a href="https://www.instagram.com/laire_ufrn/" target="_blanck" ><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS➜</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="eventos1" class="w-[28%] mx-[2.5%] float-left">
            {{--  --}}
            <div class="w-[100%] h-[350px] rounded-[20px] border-[1px] border-[#cdcdcd] inline-block bg-[#eeeeee] shadow-lg inline-block ">
                <a href=""><p class="text-center uppercase text-[15px] mt-[40%] font-bold">Aguarde Novidades</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="eventos1" class="w-[28%] mx-[2.5%] float-left">
            {{--  --}}
            <div class="w-[100%] h-[350px] rounded-[20px] border-[1px] border-[#cdcdcd] inline-block bg-[#eeeeee] shadow-lg inline-block ">
                <a href=""><p class="text-center uppercase text-[15px] mt-[40%] font-bold">Aguarde Novidades</p></a>
            </div>
        </div>
    </div>
</section>

<!--patrocinadores -->
<section id="patrocinadores" class="w-[100%] h-[600px] inline-block bg-[#ffffff]">
    {{--  --}}
    <div class="w-[90%] mx-[5%] mt-[10%] inline-block">
        {{--  --}}
        <center>
            {{--  --}}
            <ul>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/8.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/6.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/3.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[410px]" src="/img/mcti.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[410px]" src="/img/10.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[180px]" src="/img/ppgfis.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[250px] mt-[-30px]" src="/img/Logo UFRN.jpg" alt=""></li>
            </ul>
        </center>
    </div>
</section>

{{-- MODAL VÍDEO ARLINDO --}}
<div class="modal-video-arlindo">
    {{--  --}}
    <div id="arlindo-modal-video" class="w-[1000px] mt-[10%] shadow-lg bg-[#ffffff] h-[520px] p-[50px] rounded-[20px] mx-auto">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[70%] inline-block float-left">
                {{--  --}}
                <p class="uppercase text-[18px] font-bold">Quem é o arlindo?</p>
            </div>
            {{--  --}}
            <div class="w-[30%] inline-block float-left">
                {{--  --}}
                <p id="fechar-banner-mascote" class="float-right font-[20px] cursor-pointer">✕</p>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] inline-block">
            <div class="w-[100%] inline-block">
                <div class="w-[60%] inline-block float-left">
                    <video src=""></video>
                    {{-- INCLUIR VÍDEO DO ARLINDO AQUI --}}
                    {{-- INCLUIR VÍDEO DO ARLINDO AQUI --}}
                    {{-- INCLUIR VÍDEO DO ARLINDO AQUI --}}
                    {{-- INCLUIR VÍDEO DO ARLINDO AQUI --}}
                </div>
                {{--  --}}
                <div class="w-[40%] inline-block float-left">
                    {{-- INCLUIR VÍDEO DO ARLINDO AQUI --}}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- MODAL PWA --}}
<div class="modal_pwa">
    {{--  --}}
    <div class="w-[300px] mx-auto mt-[8%] rounded-[20px] bg-[#ffffff] p-[30px] shadow-lg">
        <img src="/img/frame.png" alt="qr">

        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[49%] mr-[1%] inline-block float-left">
                <button id="bt-android" class="w-[100%] mt-[10px] h-[40px] text-[#ffffff] bg-[#212121] rounded-[5px] border-[1px] border-[#cdcdcd] text-[13px]">Android</button>
            </div>
            {{--  --}}
            <div class="w-[49%] ml-[1%] inline-block float-left">
                <button id="bt-ios" class="w-[100%] mt-[10px] h-[40px] text-[#ffffff] bg-[#212121] rounded-[5px] border-[1px] border-[#cdcdcd] text-[13px]">IOS</button>
            </div>
        </div>
        {{--  --}}
        <div id="text-android" class="mt-[20px]">
            <p class="text-[13px]">Aponte a câmera do seu celular pro QR code e acesse a versão mobile da nossa página, em seguida aguarde o banner de instalação da aplicação em seu aparelho, clique em instalar e aguarde o ícone do respira saúde aparecer na sua lista de Apps. Pronto!</p>
        </div>
        {{--  --}}
        <div id="text-ios" class="mt-[20px]" style="display: none;">
            <p class="text-[13px]">No IOS Aponte a câmera do seu celular pro QR code e acesse a versão mobile da nossa página, em seguida aguarde o banner de instalação da aplicação em seu aparelho, clique em instalar e aguarde o ícone do respira saúde aparecer na sua lista de Apps. Pronto!</p>
        </div>
        <button id="fechar_como_instalar" class="w-[100%] mt-[10px] h-[40px] text-[#ffffff] bg-[#212121] rounded-[5px] border-[1px] border-[#cdcdcd] text-[13px]">Ok, entendi</button>
    </div>
</div>

{{-- MINI_BANNER --}}
<div id="ftp" class="rounded-[10px]">
    <div id="mini-btn-app" class="w-[40px] h-[40px] rounded-[15px] bg-[#00ff8c] cursor-pointer como_instalar">
        <div style="display: none;" id="texto_app" class="absolute w-[150px] ml-[-160px] bg-[#212121] rounded-[10px] text-[12px] py-[10px] font-bold text-[#ffffff]">Instalar no celular</div>
    </div>
    <div id="mini-btn-arlindo" class="w-[40px] h-[40px] rounded-[15px] bg-[orange] mt-[20px] cursor-pointer video_arlindo">
        <div style="display: none;" id="texto_arlindo" class="absolute w-[150px] ml-[-160px] bg-[#212121] rounded-[10px] text-[12px] py-[10px] font-bold text-[#ffffff]">Conheça o Arlindo</div>
    </div>
</div>

@endsection
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
