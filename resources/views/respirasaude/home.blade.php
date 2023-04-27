
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

{{-- NOVO BLOCO DE MISSÃO --}}
<div id="missão" class="w-[100%] inline-block">
    {{--  --}}
    <div id="lado_a_respira" style="background: linear-gradient(90deg, rgba(250,250,250,1) 75%, rgba(92,209,255,1) 75%);" class="w-[50%] inline-block float-left h-[700px] bg-[green] pl-[80px]">
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
    <div id="lado_b_respira" class="w-[50%] inline-block float-left h-[700px] bg-[#5CD1FF] px-[80px]">
        {{--  --}}
        <div id="container_respira_home">
            {{--  --}}
            <p id="titulo_missa" class="text-[30px] leading-[30px] mt-[100px] float-right text-right w-[500px] font-bold text-[#080E45]">MISSÃO</p>
            {{--  --}}
            <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">O RespiraSaúde é uma ponte entre o conhecimento produzido, através da ciência, e a comunicação com a sociedade. </p>
            <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">A nossa missão é comunicar de forma simples e acessível, para todas as pessoas, os resultados de pesquisas importantes. Normalmente, os resultados de grandes pesquisas são publicados em jornais científicos e na grande maioria das vezes, em outros idiomas. Saiba aqui no RespiraSaúde como elas acontecem e compreenda os seus resultados. </p>
            <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">Aqui, no RespiraSaúde estão disponíveis informações importantes e atualizadas sobre as principais doenças respiratórias agudas e crônicas. </p>
            <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">Queremos que você entenda como elas acontecem no nosso corpo, e como podem ser prevenidas e tratadas.
            Neste canal você terá ainda, informações sobre os eventos abertos para a comunidade, além das oportunidades para participar de projetos de pesquisa e projetos de extensão no Laboratório de Avaliação e Intervenção Respiratória!
            </p>
            <p id="text_missao_RS"  class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#080E45]">Nossa missão acima de tudo é promover educação em saúde e contribuir com a sua Saúde Respiratória!</p>
        </div>
    </div>
</div>

{{-- BLOCO DE INFORMATIVO --}}
<section style="display: none;" class="w-[100%] inline-block">
    {{--  --}}
    <center>
        <p id="eventos." class="font-bold text-[#212121] text-[30px] border-b-[4px] w-[200px] mt-[20px] pb-[20px]">Eventos</p>
    </center>
    <div id="caixa_evt" class="w-[90%] mx-[5%] mt-[70px] inline-block">
        {{--  --}}
        <div id="eventos1" class="w-[20%] mx-[2.5%] float-left">
            {{--  --}}
            <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                {{--  --}}
                <div  class="w-[100%] h-[150px] bg-[gray] mx-auto">


                </div>
                {{--  --}}
                <div class="w-[100%] h-[200px] p-[20px] inline-block">
                    {{--  --}}
                    <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit</p>
                </div>
                {{--  --}}
            </div>
            {{--  --}}
            <div class="w-[100%] inline-block h-[150px]">
                {{--  --}}
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS➜</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="eventos1"   class="w-[20%] mx-[2.5%] float-left">
            {{--  --}}
            <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                {{--  --}}
                <div class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                {{--  --}}
                <div class="w-[100%] h-[200px] p-[20px] inline-block">
                    {{--  --}}
                    <p class="text-center mt-[20px] mb-[8px] text-[15px]text-[{{ $numb_font }}px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit</p>
                </div>
                {{--  --}}
            </div>
            {{--  --}}
            <div class="w-[100%] inline-block h-[150px]">
                {{--  --}}
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS➜</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="eventos1"  class="w-[20%] mx-[2.5%] float-left">
            {{--  --}}
            <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                {{--  --}}
                <div class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                {{--  --}}
                <div class="w-[100%] h-[200px] p-[20px] inline-block">
                    {{--  --}}
                    <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit</p>
                </div>
                {{--  --}}
            </div>
            {{--  --}}
            <div class="w-[100%] inline-block h-[150px]">
                {{--  --}}
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS➜</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="eventos1"  class="w-[20%] mx-[2.5%] float-left">
            {{--  --}}
            <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                {{--  --}}
                <div class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                {{--  --}}
                <div class="w-[100%] h-[200px] p-[20px] inline-block">
                    {{--  --}}
                    <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit</p>
                </div>
                {{--  --}}
            </div>
            {{--  --}}
            <div class="w-[100%] inline-block h-[150px]">
                {{--  --}}
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS➜</p></a>
            </div>
        </div>
    </div>
</section>
<!--BLOCO RESULTADOS-->
<section id="projeto_extensao" class="w-[100%] inline-block">
    {{--  --}}
    <center>
        <p id="pex" class="font-bold text-[#212121] text-[30px] leading-[35px] w-[500px] mt-[60px] pb-[20px]">Projetos de Extensão</p>
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
                    <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">No nosso Istagram, você encontra conteudos relacionados ao nosso projeto de extensão. </p>
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
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[610px]" src="/img/10.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/9.png" alt=""></li>
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
