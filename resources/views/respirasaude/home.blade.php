
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
                        <audio autoplay="autoplay" controls="controls">
                            <source src="sua_musica.mp3" type="audio/mp3" />
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

{{-- NOVO BLOCO DE MISSÃO --}}
<div id="missão" style="display: none;" class="w-[100%]  inline-block">
    {{--  --}}
    <div id="lado_a_respira" style="background: linear-gradient(90deg, rgba(250,250,250,1) 75%, rgb(249, 250, 250) 75%);" class="w-[50%] inline-block float-left h-[700px]  pl-[80px]">
        {{--  --}}
        <div id="container_respira_home">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <ul id="list_acess" class="mt-[100px]">
                    <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                    <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                </ul>
            </div>
            {{--  --}}
            <div id="box_libra" style="display: none;" class="w-[100%] h-[330px] mt-[20px] inline-block bg-[orange]"><video id="video-missão" src="/img/menor.mp4" controls="controls" ></video></div>
            {{--  --}}
            <div style="background-image: url(/img/img_missao.png); background-size: 110%;" id="box_audio" class="w-[100%] h-[350px] mt-[20px] inline-block bg-[purple]"></div>
        </div>
    </div>
    {{--  --}}
   <!-- <div id="lado_b_respira" class="w-[50%] inline-block float-left h-[700px] bg-[#5CD1FF] px-[80px]">
        {{--  --}}
        <div id="container_respira_home">
            {{--  --}}
            <p id="titulo_missa" class="text-[30px] leading-[30px] mt-[100px] float-right text-right w-[500px] font-bold text-[#080E45]">MISSÃO</p>
            {{--  --}}
            <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">O RespiraSaúde é uma ponte entre o conhecimento produzido, através da ciência, e a comunicação com a sociedade.  </p>
            <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">A nossa missão é comunicar de forma simples e acessível, para todas as pessoas, os resultados de pesquisas importantes. Normalmente, os resultados de grandes pesquisas são publicados em jornais científicos e na grande maioria das vezes, em outros idiomas. Saiba aqui no RespiraSaúde como elas acontecem e compreenda os seus resultados. </p>
            <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">Aqui, no RespiraSaúde estão disponíveis informações importantes e atualizadas sobre as principais doenças respiratórias agudas e crônicas. </p>
            <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">Queremos que você entenda como elas acontecem no nosso corpo, e como podem ser prevenidas e tratadas.
            Neste canal você terá ainda, informações sobre os eventos abertos para a comunidade, além das oportunidades para participar de projetos de pesquisa e projetos de extensão no Laboratório de Avaliação e Intervenção Respiratória!
            </p>
            <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">Nossa missão acima de tudo é promover educação em saúde e contribuir com a sua Saúde Respiratória!</p>
        </div>
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
</div>-->
 <div id="lado_b_bloco1" class="w-[50%] h-[700px] px-[80px] bg-[#fafafa] float-left inline-block">
            {{--  --}}
            <div id="container_respira_home">
                {{--  --}}
                <p id="titulo_missa" class="text-[30px] leading-[30px] mt-[100px] float-right text-right w-[500px] font-bold text-[#080E45]">MISSÃO</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">O RespiraSaúde é uma ponte entre o conhecimento produzido, através da ciência, e a comunicação com a sociedade.  </p>
                <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">A nossa missão é comunicar de forma simples e acessível, para todas as pessoas, os resultados de pesquisas importantes. Normalmente, os resultados de grandes pesquisas são publicados em jornais científicos e na grande maioria das vezes, em outros idiomas. Saiba aqui no RespiraSaúde como elas acontecem e compreenda os seus resultados. </p>
                <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">Aqui, no RespiraSaúde estão disponíveis informações importantes e atualizadas sobre as principais doenças respiratórias agudas e crônicas. </p>
                <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">Queremos que você entenda como elas acontecem no nosso corpo, e como podem ser prevenidas e tratadas.
                Neste canal você terá ainda, informações sobre os eventos abertos para a comunidade, além das oportunidades para participar de projetos de pesquisa e projetos de extensão no Laboratório de Avaliação e Intervenção Respiratória!
                </p>
                <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">Nossa missão acima de tudo é promover educação em saúde e contribuir com a sua Saúde Respiratória!</p>
            </div>
    </div>

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

@endsection
<script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
