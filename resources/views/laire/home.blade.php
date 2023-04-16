@extends('laire.layout.main')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

{{-- FONT --}}
@php
    $session_font = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }
@endphp
{{--  --}}
<section id="fundo_lai" class="w-[100%] bg-[#080E45] mt-[80px] inline-block">
    {{--  --}}
    <div class="w-[90%] inline-block mx-[5%]">
        {{--  --}}
        <div id="box_laire_a" class="w-[60%] float-left inline-block h-[600px] ">
            {{--  --}}
            <p id="text_box_a" class="uppercase text-[#ffffff] text-[65px] font-bold mt-[180px] leading-[72px]">Avaliação, Intervenção e Educação em Saúde Respiratória</p>
        </div>
        {{--  --}}
        <div id="box_laire_b" class="w-[40%] float-left inline-block h-[600px] pl-[60px]">
            {{--  --}}
            <p id="sub_text_box_a" class="text-[#ffffff] text-[20px] pl-[20px] border-l-[2px] text-justify border-l-[#ffffff] mt-[350px]">Atividades de ensino, pesquisa e extensão relacionadas às doenças respiratórias agudas e crônicas que comprometem a qualidade de vida de crianças, adolescentes e adultos</p>
        </div>
    </div>
</section>

{{-- CAIXA DE NOTÍCIAS --}}
<div class="slider">
    {{--  --}}
    <div id="noticias_slide" class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        {{-- COMPONENTES --}}
        <div class="slide first">
            <x-noticia1/>
        </div>

        <div class="slide">
            <x-noticia2/>
        </div>

        <div class="slide">
            <x-noticia3/>
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
{{--  --}}
<div class="w-[100%] inline-block">
    {{--  --}}
    <center>
        <a href="{{ route('feed_noticia') }}"><button class="px-[60px] h-[40px] rounded-[100px] bg-[#080E45] text-[14px] text-[#ffffff]">feed de notícias</button></a>
    </center>
</div>
{{-- BLOCO DE INFORMATIVO --}}
<section id="laboratorio" class="w-[100%] inline-block">
    {{--  --}}
    <div id="bloco_sobre_a" class="w-[20%] inline-block float-left h-[450px] bg-[#fafafa]">
        {{--  --}}
        <div class="w-[750px] h-[420px] bg-[silver] ml-[2%] absolute mt-[10%]">
            {{--  --}}
            <div id="box_audio" style="background: url('/img/img_missao.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px]  inline-block absolute h-[450px]"></div>
            {{--  --}}
            <div  style="display: none;" id="box_libra" class="w-[780px] inline-block absolute h-[450px]">
                {{--  --}}
                <video id="video_missao" class="w-[750px] h-[420px]" controls="controls">
                    <source src="/img/" type="video/mp4">
                </video>
            </div>
        </div>
        <!-- botoes-->
        <div class="w-[100%] h-[40px] mt-[100px] ml-[20%] ">
            <ul class="">
                <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
            </ul>
        </div>
    </div>
    </div>
    {{--  --}}

    <div id="bloco_sobre_b" class="w-[80%] pl-[580px] pr-[60px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[40px] mt-[150px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Um pouco sobre o LAIRE</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">O Laboratório de Avaliação e Intervenção Respiratória (LAIRE) está localizado no Departamento de Fisioterapia da Universidade Federal do Rio Grande do Norte (UFRN) e vinculado ao Programa de Pós-Graduação em Fisioterapia (PPGFIS). Fazem parte do LAIRE um grupo de pesquisadores composto por docentes, colaboradores externos, alunos de iniciação científica, alunos de mestrado e doutorado.</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">Desenvolvemos atividades de ensino, pesquisa e extensão. Estas atividades envolvem as mais diversas doenças respiratórias agudas e crônicas onde destacamos a asma. No LAIRE têm sido desenvolvidos estudos com apoio do CNPq, Ministério da Saúde e Ministério da Ciência, Tecnologia e Inovações.</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">Os estudos desenvolvidos envolvem inovação científica e tecnológica e buscam soluções para melhorar a condição de saúde e qualidade de vida da população. O enfrentamento da pandemia da COVID-19 também tem sido o eixo central de algumas pesquisas e ações de extensão desenvolvidas pela equipe do LAIRE. Nas atividades de extensão temos ressaltado a importância da educação em saúde e trabalhado de forma muito intensa com este propósito.</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">O LAIRE através de suas redes sociais tem levado conteúdos de educação em saúde para milhares de pessoas visando a adesão da população às medidas de prevenção de doenças respiratórias agudas graves e o controle de doenças respiratórias crônicas.</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">Navegue neste portal para conhecer melhor nossa equipe, parceiros e pesquisas.</p>

    </div>
    {{--  --}}
</section>
{{--  --}}
@php
    // CONEXÃO COM BANCO
    $info_doenca = Illuminate\Support\Facades\DB::select("SELECT * FROM pesquisadors");
    $conta_pesqs = $info_doenca;
@endphp
{{--  --}}
<section id="pesquisadores_bloco" class="w-[100%] inline-block">
    {{--  --}}
    <center>
        <p id="pesquisadores." class="font-bold text-[#212121] text-[30px] border-b-[4px] w-[200px] pb-[20px]">Equipe</p>
    </center>
    {{--  --}}
    <div id="sub_bloco_pesq" class="w-[90%] mx-[5%] mt-[50px] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{-- REMOVER ESSA PARTE --}}
            {{-- @if ($conta_pesqs > 0) --}}
                {{--  --}}
                {{-- @foreach ($info_doenca as $pesquisador) --}}
                {{--  --}}
                {{-- <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq"> --}}
                    {{--  --}}
                    {{-- <div style="background: url('/img/pesquisadores/{{ $pesquisador->imagem }}'); background-size: 100%;" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div> --}}
                    {{--  --}}
                    {{-- <p class="text-[16px] font-bold text-center">{{ $pesquisador->nome }}</p> --}}
                    {{--  --}}
                    {{-- <p class="text-[13px] text-center">{{ $pesquisador->referencia }}</p> --}}
                {{-- </div> --}}
                {{-- @endforeach --}}
            {{-- @else --}}
            {{-- <p class="text-center text-[13px]">Sem registros de pesquisadores!</p> --}}
            {{-- @endif --}}
            {{-- SUBSTITUIR POR CADA UM DOS PESQUISADORES --}}
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left box_pesq">
                {{--  --}}
                <div class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px]"></div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Nome do Pesquisador</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>


        </div>
    </div>
</section>
<!--patrocinadores -->
<section id="patrocinadores" class="w-[100%] h-[600px] inline-block bg-[#ffffff]">
    {{--  --}}
    <div  class="w-[90%] mx-[5%] mt-[10%] inline-block">
        {{--  --}}
        <center>
            {{-- REMOVER E COLOCAR NOS PROJETOS (PROJETO 1) --}}
            <ul>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/9.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/8.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/6.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/3.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/7.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[610px]" src="/img/10.png" alt=""></li>
            </ul>
        </center>
    </div>
</section>
{{-- BLOCO DE INFORMATIVO --}}
<section  id="resultado" class="w-[100%] inline-block">
    {{--  --}}
    <center id="pesquisas.">
        <p class="font-bold text-[#212121] text-[30px] border-b-[4px] w-[200px] pb-[20px]">Pesquisas</p>
    </center>
    <div id="boll" class="w-[94%] mx-[3%] mt-[70px] inline-block">
        {{--  --}}
        <div id="bk1" class="w-[20%] mx-[2.5%] float-left">
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
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="bk1" class="w-[20%] mx-[2.5%] float-left">
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
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="bk1" class="w-[20%] mx-[2.5%] float-left">
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
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p></a>
            </div>
        </div>
        <div id="bk1" class="w-[20%] mx-[2.5%] float-left">
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
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p></a>
            </div>
        </div>
    </div>
</section>
{{-- BLOCO DE INFORMATIVO --}}
<section id="resultado" class="w-[100%] inline-block">
    {{--  --}}
    <center id="eventos.">
        <p  class="font-bold text-[#212121] text-[30px] border-b-[4px] w-[200px] pb-[20px]">Eventos</p>
    </center>
    {{--  --}}
    <div class="w-[94%] mx-[3%] my-[10px] inline-block">
        {{--  --}}
        <ul class="float-right mr-[30px]">
            <li class="inline-block ml-[20px]"><button class="w-[120px] h-[40px] text-[#ffffff] bg-[blue]">Encerrados</button></li>
            <li class="inline-block ml-[20px]"><button class="w-[120px] h-[40px] text-[#ffffff] bg-[blue]">Futuros</button></li>
        </ul>
    </div>
    {{--  --}}
    <div class="w-[94%] mx-[3%] mt-[70px] inline-block">
        {{--  --}}
        <div id="bk1" class="w-[20%] mx-[2.5%] float-left">
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
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="bk1" class="w-[20%] mx-[2.5%] float-left">
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
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="bk1" class="w-[20%] mx-[2.5%] float-left">
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
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p></a>
            </div>
        </div>
        {{--  --}}
        <div id="bk1" class="w-[20%] mx-[2.5%] float-left">
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
                <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p></a>
            </div>
        </div>
    </div>
</section>
{{--  --}}
<section  class="w-[92%] inline-block mx-[4%] mb-[60px]">
    {{--  --}}
    <div  class="w-[100%]">

        {{--  --}}
        <div id="botao_facebook"  class="w-[30.3%] h-[200px] mx-[1.5%] float-left bg-[silver]">
            <center ><a  href="https://www.facebook.com/laire.lab" target="_blanck" ><button id="bt2-1" class="px-[40px] mt-[18%] bg-[#00FF8C] rounded-[100px] h-[50px] text-[#ffffff] font-bold text-[12px]"><img class="w-[18px] float-left mr-[10px]" src="/img/facebook.png"/> <p class="text-[#ffffff] float-left">Facebook</p></button></a><center>
        </div>
        {{--  --}}
        <div id="botao_instagram" class="w-[30.3%] h-[200px] mx-[1.5%] float-left bg-[silver]  ">
            <center><a href="https://www.instagram.com/laire_ufrn/?hl=pt" target="_blanck"><button id="bt2-1" class="px-[40px] mt-[18%] bg-[#00FF8C] rounded-[100px] h-[50px] text-[#ffffff] font-bold text-[12px]"><img class="w-[18px] float-left mr-[10px]" src="/img/instagram.png"/> <p class="text-[#ffffff] float-left">Instagram</p></button></a>
            </center>
        </div>
        {{--  --}}
        <div id="botao_youtube" class="w-[30.3%] h-[200px] mx-[1.5%] float-left bg-[silver]">
            <center><a href=" https://www.youtube.com/@laireufrn7670" target="_blank" ><button id="bt2-1" class="px-[40px] mt-[18%] bg-[#00FF8C] rounded-[100px] h-[50px] text-[#080E45] font-bold text-[12px]"> <img class="w-[18px] float-left mr-[10px]" src="/img/youtube.png"/> <p class="text-[#ffffff] float-left">youtube</p></button></a></center>
        </div>
    </div>
</section>
{{--  --}}
<div style="display: show;" class="modal_laire">
    {{--  --}}
    <div class="w-[1000px] h-[500px] bg-[#ffffff] mx-auto mt-[10%] shadow-lg">
        {{--  --}}
        <div class="w-[100%] inline-block px-[30px]">
            {{--  --}}
            <div class="float-left w-[100%]">
                {{--  --}}
                <p id="modal_laire" class="float-right text-[16px] mt-[30px] cursor-pointer">✕</p>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] px-[40px] inline-block">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <p class="text-[20px] text-center mt-[-30px] leading-[40px]">RespiraSaúde</p>
                {{--  --}}
                <p class="text-[30px] text-center leading-[40px] font-bold">O ARlindo pode te ajudar!</p>
            </div>
            {{--  --}}
            <div class="w-[100%] mt-[40px] inline-block">
                {{--  --}}
                <div class="w-[60%] inline-block float-left">
                    {{--  --}}
                    <div class="w-[100%] h-[300px] bg-[#212121]"></div>
                </div>
                {{--  --}}
                <div class="w-[40%] inline-block float-left">
                    {{--  --}}
                    <img class="w-[600px] absolute mt-[-40px] ml-[-120px]" src="/img/ARLINDO.png" alt="ARlindo">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

