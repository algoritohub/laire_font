<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RespiraSaúde | Pesquisas</title>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;700&display=swap" rel="stylesheet">

    {{-- ICONES --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>

    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('/laire/laire/public/img/web_logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script src="/js/script.js"></script>
</head>
{{--  --}}
@php
    // FUNÇÃO FONT
    $session_font = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }
@endphp
{{--  --}}
<body id="pagina">
    {{-- NOVO ACESSIBILIDADE DESKTOP MOBILE --}}
    <div id="barra_superior_acessibilidade_mobile" class="w-[100%] inline_block bg-[#212121] fixed">
        {{--  --}}
        <div class="w-[90%] mx-[5%] inline-block">
            {{--  --}}
            <div id="barra_acessibilidade_azul" class="w-[70%] inline-block h-[40px] float-left"></div>
            {{--  --}}
            <div id="barra_acessibilidade_roxa" class="w-[30%] inline-block h-[40px] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="sub_barra_acessibilidade_verde" class="w-[53.3%] h-[40px] inline-block float-left">
                        {{--  --}}
                        <ul id="button_font" class="float-right mt-[5px]">
                            <li class="inline-block mr-[15px]"><a class="font-bold text-[17px] text-[#ffffff]" href="{{ route('font_down') }}">A-</a></li>
                            <li class="inline-block mr-[20px]"><a class="font-bold text-[17px] text-[#ffffff]" href="{{ route('font_up') }}">A+</a></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div id="sub_barra_acessibilidade_vermelho" class="w-[23.3%] h-[40px] inline-block float-left">
                        {{--  --}}
                        <a href="{{ route('mapa_site') }}"><p class="text-[9px] mt-[14px] float-right text-[#ffffff] font-bold uppercase">Mapa do Site</p></a>
                    </div>
                    {{--  --}}
                    <div id="sub_barra_acessibilidade_cinza" class="w-[23.3%] h-[40px] inline-block float-left">
                        {{--  --}}
                        <ul class="mt-[10px] float-right">
                            <li class="inline-block ml-[10px]"><a href=""> <img class="w-[25px] h-[25px]" src="/img/brasil.png" alt=""></a></li>
                            <li class="inline-block ml-[10px]"><a href=""> <img class="w-[25px] h-[25px]" src="/img/eua.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- BARRA SUPERIOR MOBILE --}}
    <header id="barra_superior_fixa_mobile" class="w-[100%] mt-[40px] bg-[#080E45] inline-block fixed">
        {{--  --}}
        <div id="barra_secundaria"  class="w-[90%] mx-[5%] h-[100px] inline-block">
            {{--  --}}
            <div class="w-[70%] inline-block float-left">
                {{--  --}}
                <a href="{{ route('home.respira_saude') }}">
                    <img class="float-left mt-[20px] w-[60px] mr-[10px]" src="/img/rs_logo.png" alt=""/>
                    <p class="text-[20px] mt-[32px] text-[#ffffff]"><b>Respira</b>Saúde</p>
                </a>
            </div>
            {{--  --}}
            <div class="w-[30%] inline-block float-left">
                {{--  --}}
                <p id="busca_mobile" class="text-[#ffffff] cursor-pointer text-[18px] mt-[40px] float-right"><i class="fi fi-bs-search"></i></p>
            </div>
        </div>
    </header>
    {{--  --}}
    <header id="barra_superior_menu_mobile" class="w-[100%] mt-[140px] bg-[#5CD1FF] overflow-scroll inline-block fixed">
        {{--  --}}
        <div id="menu_principal" class="w-[1030px] py-[10px] inline-block">
            {{--  --}}
            <ul class="menu">
                <li><b><a href="#text_missao_RS">Missão</a></b></li>
                <li><b><a id="cronicas_doencas" href="#">Doenças respiratórias crônicas <i class="fi fi-rr-angle-small-down"></i></a></b></li>
                <li><b><a id="cronicas_agudas" href="#">Doenças respiratórias agudas <i class="fi fi-rr-angle-small-down"></i></a></b></li>
                <li><b><a href="#">Projetos</a></b></li>
                <li><b><a href="#">Eventos</a></b><li>
                <li><b><a href="#projeto_extensao">Projetos de Extensão</a></b></li>
            </ul>
        </div>
        {{--  --}}
        <div style="display: none;" id="menu_cronicas_doencas" class="w-[1200px] py-[16px] inline-block">
            {{--  --}}
            <ul class="">
                <li class="inline-block ml-[25px]"><b><a class="text-[#ffffff]" id="voltar_menu" href="">Menu Principal</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'asma']) }}">Asma</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'fibrose_cistica']) }}">Fibrose Cística</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'dpoc']) }}">DPOC</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'bronquiectasia']) }}">Bronquiectasia</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'fibrose_pulmonar']) }}">Fibrose pulmonar</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'sinusite']) }}">Sinusite</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'hipertensao_pulmonar']) }}">Hipertensão pulmonar</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'sindrome_pos_covid_19']) }}">Síndrome pós-COVID-19</a></b></li>
            </ul>
        </div>
        {{--  --}}
        <div style="display: none;" id="menu_agudas_doencas" class="w-[800px] py-[16px] inline-block">
            {{--  --}}
            <ul class="">
                <li class="inline-block ml-[25px]"><b><a class="text-[#ffffff]" id="voltar_menu1" href="">Menu Principal</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'agudas', 'doenca' => 'h1n1']) }}">H1N1</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'agudas', 'doenca' => 'covid_19']) }}">COVID-19</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'agudas', 'doenca' => 'tuberculose']) }}">Tuberculose</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'agudas', 'doenca' => 'influenza']) }}">Influenza</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'agudas', 'doenca' => 'pneumonia']) }}">Pneumonia</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'agudas', 'doenca' => 'bronquiolite']) }}">Bronquiolite</a></b></li>
                <li class="inline-block ml-[25px]"><b><a class="text-[#080E45]" href="{{ route('pag_doencas', ['tipo' => 'agudas', 'doenca' => 'coqueluxe']) }}">Coqueluxe</a></b></li>
            </ul>
        </div>
        {{--  --}}
        <div style="display: none;" id="busca_mobile_menu" class="w-[90%] mx-[5%] inline-block">
            {{--  --}}
            <form class="m-[0px]" action="" method="POST">
                @csrf
                <input class="w-[100%] h-[30px] bg-[#ffffff] outline-none pl-[10px] my-[10px] rounded-[5px]" type="text" placeholder="Busque por algo!">
            </form>
        </div>
    </header>
    {{-- NOVO HEADER --}}
    <header style="background: url(/img/background_header.png); background-size: 100%; background-repeat: no-repeat;" id="barra_superior_fixa" class="w-[100%] inline-block fixed">
        {{--  --}}
        <div class="w-[90%] inline-block mx-[5%]">
            {{--  --}}
            <div class="w-[20%] float-left inline-block">
                {{--  --}}
                <a href="{{ route('home.respira_saude') }}">
                    <img class="float-left mt-[20px] w-[70px] mr-[10px]" src="/img/rs_logo.png" alt=""/>
                    <p class="text-[22px] mt-[30px] text-[#ffffff]"><b>Respira</b>Saúde</p>
                </a>
            </div>
            {{--  --}}
            <div class="w-[80%] float-left inline-block">
                {{--  --}}
                <div class="w-[100%] h-[40px] inline-block">
                    {{--  --}}
                    <div class="w-[70%] float-left inline-block h-[50px]">
                        {{--  --}}
                        <ul id="button_font" class="float-right mt-[5px]">
                            <li class="inline-block mr-[15px]"><a class="font-bold text-[17px] text-[#ffffff]" href="{{ route('font_down') }}">A-</a></li>
                            <li class="inline-block mr-[20px]"><a class="font-bold text-[17px] text-[#ffffff]" href="{{ route('font_up') }}">A+</a></li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class="w-[15%] float-left inline-block h-[50px]">
                        {{--  --}}
                        <a href="{{ route('mapa_site') }}"><p class="text-[12px] mt-[10px] float-right text-[#ffffff]">Mapa do site</p></a>
                    </div>
                    {{--  --}}
                    <div class="w-[15%] float-left inline-block h-[50px]">
                        {{--  --}}
                        <ul class="mt-[5px] mr-[10px] float-right">
                            <li class="inline-block ml-[10px]"><a href="{{ route('idioma_portugues') }}"> <img class="w-[25px] h-[25px]" src="/img/brasil.png" alt=""></a></li>
                            <li class="inline-block ml-[10px]"><a href="{{ route('idioma_ingles') }}"> <img class="w-[25px] h-[25px]" src="/img/eua.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] h-[60px] inline-block">
                    {{--  --}}
                    <div class="w-[95%] inline-block float-left">
                        {{--  --}}
                        <nav>
                            <ul class="menu">
                                <li><b><a href="#">Doenças respiratórias crônicas</a></b>
                                    <ul>
                                        <li class="ma"><a href="#">Definição</a>
                                            <ul class="mx">
                                                <li><a href="#">Asma</a></li>
                                                <li><a href="#">Fibrose Cística</a></li>
                                                <li><a href="#">DPOC</a></li>
                                                <li><a href="#">Bronquiectasia</a></li>
                                                <li><a href="#">Fibrose pulmonar</a></li>
                                                <li><a href="#">Sinusite</a></li>
                                                <li><a href="#">Hipertensão pulmonar</a></li>
                                                <li><a href="#">Síndrome pós-COVID-19</a></li>
                                            </ul>
                                        </li>
                                        <li class="ma"><a href="#">Como controlar os sintomas</a>
                                            <ul class="mx">
                                                <li><a href="#">Fibrose Cística</a></li>
                                                <li><a href="#">DPOC</a></li>
                                                <li><a href="#">Bronquiectasia</a></li>
                                                <li><a href="#">Fibrose pulmonar</a></li>
                                                <li><a href="#">Sinusite</a></li>
                                                <li><a href="#">Hipertensão pulmonar</a></li>
                                                <li><a href="#">Síndrome pós-COVID-19</a></li>
                                            </ul>
                                        </li>
                                        <li class="ma"><a href="#">Tratamento</a>
                                            <ul class="mx">
                                                <li><a href="#">Asma</a></li>
                                                <li><a href="#">Fibrose Cística</a></li>
                                                <li><a href="#">DPOC</a></li>
                                                <li><a href="#">Bronquiectasia</a></li>
                                                <li><a href="#">Fibrose pulmonar</a></li>
                                                <li><a href="#">Sinusite</a></li>
                                                <li><a href="#">Hipertensão pulmonar</a></li>
                                                <li><a href="#">Síndrome pós-COVID-19</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><b><a href="#import">Importância</a></b></li>
                                <li><b><a href="#objeti">Objetivo</a></b></li>
                                <li><b><a href="#metod">Métodos</a></b></li>
                                <li><b><a href="#resul">Resultados</a></b></li>
                                <li><b><a href="#pesquisadores">Pesquisadores</a></b></li>
                                <li><b><a href="#banner-produtos">Materiais de divulgação</a></b></li>
                            </ul>
                        </nav>
                    </div>
                    {{--  --}}
                    <div class="w-[5%] inline-block float-left">
                        {{--  --}}
                        <a href="{{ route('home.laire') }}"><img src="/img/avt_laire.png" id="mascot" class="w-[50px] ml-[40px] mt-[1px] cursor-pointer float-right"></a>
                    </div>
                    {{-- MASCOTE --}}
                    <img id="mascote" style="display:none" src="/img/mascote6.png" class="w-[400px] absolute mt-[430px] ml-[820px] mascote">
                    {{-- BALÃO --}}
                    <div style="display:none" class="w-[200px] bg-[#080E45] shadow-lg p-[20px] rounded-[20px] absolute mt-[380px] ml-[775px] balao">
                        {{--  --}}
                        <p class="text-[#ffffff] text-[13px] leading-[15px] font-bold text-center">Esse conteúde tem acessibilidade</p>
                        {{--  --}}
                        <center>
                            <ul class="mt-[5px]">
                                <li class="mr-[2px] inline-block"><img class="w-[37px] cursor-pointer" src="/img/audio.png"></li>
                                <li class="mr-[2px] inline-block"><img class="w-[38px] cursor-pointer" src="/img/libra.png"></li>
                            </ul>
                        </center>
                    </div>
                    {{-- MASCOTE RESUMO --}}
                    <img id="mascote_resumo" style="display:none" src="/img/mascote7.png" class="w-[400px] absolute mt-[430px] ml-[820px] mascote_resumo">
                    {{-- BALÃO RESUMO --}}
                    <div style="display:none" class="w-[200px] bg-[#080E45] shadow-lg p-[20px] rounded-[20px] absolute mt-[390px] ml-[775px] balao_resumo">
                        {{--  --}}
                        <p class="text-[#ffffff] text-[13px] leading-[15px] font-bold text-center"> Vamos entender o que é uma revisão sistemática?</p>
                        {{--  --}}
                        <p class="mt-[15px] text-center text-[#ffffff] text-[12px]">É só clicar!</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- ARTICLE --}}
    <article>
        @yield('conteudo')
    </article>
    {{-- FOOTER --}}
    <footer  class="w-[100%] inline-block bg-[#080E45]">
        {{--  --}}
        <div class="w-[90%] mx-[5%] mt-[5%] inline-block">
            {{--  --}}
            <div id="borda" class="w-[50%] h-[400px] border-r-[1px] border-r-[#eeeeee] inliene-block float-left">
                {{--  --}}
                <p id="inscreva" class="text-[30px] w-[500px] leading-[40px] font-bold text-[#ffffff]">Inscreva-se hoje para receber as atualizações mais recentes.</p>
                {{--  --}}
                <table id="e-mail" class="mt-[40px] w-[80%]">
                    <tr>
                        <td></td>
                    </tr>
                    {{--  --}}
                    <tr>
                        <td>
                            <input class="border-b-[#00FF8C] float-left w-[100%] border-b-[1px] outline-none bg-[transparent] pb-[10px] text-[#ffffff] text-[16px]" placeholder="Endereço de e-mail" type="text">
                        </td>
                    </tr>
                </table>
                {{--  --}}
                <ul id="imglire" id="img-footer"class="mt-[60px] inline-block ">
                    <li id="img-footer" class="mb-[5px]"><a href="{{ route('home.laire') }}"><img class="text-[30px] text-[#ffffff] w-[150px] float-left" src="/img/LAIRE para fundo escuro.png" alt="A"></a></li>
                </ul>
                <ul id="imglire" class="mt-[60px] inline-block  ">
                     <li id="img-footer2" class="mb-[5px]"><a href="{{ route('home.respira_saude') }}"><img class="text-[30px] text-[#ffffff] w-[150px] float-left pl-[50px]" src="/img/01_RS_COR_Negativa.png" alt="A"></a></li>
                </ul>
            </div>
            {{--  --}}
            <div id="contato" class="w-[50%] inliene-block pl-[10%] float-left">
                {{--  --}}
                <div id="bcl" class="w-[50%] inline-block float-left">
                    {{--  --}}
                    <p class="font-bold text-[#ffffff] text-[16px]">Endereço</p>
                    {{--  --}}
                    <ul class="mt-[20px]">
                        <li class="mb-[5px]"><p class="text-[#ffffff] text-[16px]">Departamento de Fisioterapia <br> Da UFRN</p></li>
                        <li class="mb-[5px]"><p class="text-[#ffffff] text-[16px]">Natal/Rn</p></li>
                        <li class="mb-[5px]"><p class="text-[#ffffff] text-[16px]">Brasil</p></li>
                    </ul>
                </div>
                {{--  --}}
                <div id="bcl" class="w-[50%] inline-block float-left">
                    {{--  --}}
                    <p class="font-bold text-[#ffffff] text-[16px]">Contatos</p>
                    {{--  --}}
                    <ul class="mt-[20px]">
                        <li class="mb-[5px] flex"><!--<img class="mr-[10px] float-left" src="" alt="P">--><p class="float-left text-[#ffffff] text-[16px]">asmabasep@gmail.com</p></li>
                        <!--<li class="mb-[5px] flex"><img class="mr-[10px] float-left" src="" alt="F"><p class="float-left text-[#ffffff]"></p></li>-->
                        <!--<li class="mb-[5px] flex"><img class="mr-[10px] float-left" src="" alt="E"><p class="float-left text-[#ffffff]"></p></li>-->
                    </ul>
                </div>
                {{--  --}}
                <div style="display: none;" id="pat.footer" class="w-[100%] rounded-[10px] mt-[30px] inline-block bg-[#ffffff] p-[20px]">
                    <center>
                        {{--  --}}
                        <ul>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/9.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/8.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/6.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/3.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/7.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/ppgfis.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[410px]" src="/img/10.png" alt=""></li>
                        </ul>
                    </center>
                </div>
            </div>
            {{--  --}}
            <div  class="w-[100%] inline-block py-[40px]">
                {{--  --}}
                <div id="master1" class="float-left inline-block w-[33.3%]">
                    {{--  --}}
                    <ul id="lrb" class="float-right">
                        {{--  --}}
                        <li class="inline-block mr-[50px]"><a href="{{ route('home.laire') }}"><p class="text-[#ffffff] text-[13px]">Laire</p></a></li>
                        {{--  --}}
                        <li class="inline-block mr-[50px]"><a href="{{ route('home.respira_saude') }}"><p class="text-[#ffffff] text-[13px]">RespiraSaúde</p></a></li>
                        {{--  --}}
                        <li class="inline-block mr-[50px]"><a href="{{ route('blog') }}"><p class="text-[#ffffff] text-[13px]">Blog</p></a></li>
                    </ul>
                </div>
                {{--  --}}
                <div id="master2" class="float-left inline-block w-[33.3%]">
                    {{--  --}}
                    <center>
                    <ul class="ml-[-40px]" id="logos_rede_footer">
                        <li class="inline-block ml-[40px] w-[20px]"  ><a href="https://www.facebook.com/laire.lab" target="_blanck"><img  class="text-[#ffffff] text-[20px]" src="/img/facebook.png" alt="Facebook"></a></li>
                        <li class="inline-block ml-[40px] w-[20px]"><a href="https://www.instagram.com/laire_ufrn/?hl=pt" target="_blanck" ><img class="text-[#ffffff] text-[20px]" src="/img/instagram.png" alt="Instagram"></a></li>
                        <li class="inline-block ml-[40px] w-[20px]"><a href="https://www.youtube.com/channel/UCLTWKg3OKl5m9QQpY5inDtQ" target="_blanck"><img class="text-[#ffffff] text-[20px]" src="/img/youtube.png" alt="Youtube"></a></li>
                    </ul>
                    </center>
                </div>
                {{--  --}}
                <div id="master2" class="float-left inline-block w-[33.3%]">
                    {{--  --}}
                    <p class="text-[#ffffff] text-[13px]">Todos os direitos reservados a Laire | UFRN &copy; 2023</p>
                </div>
            </div>
        </div>
    </footer>

    {{-- CARROSSEL --}}
    <script>

    let count = 1;

    document.getElementById("radio1").checked = true;

    setInterval( function(){
        nextImage();
    }, 10000)

    function nextImage(){
        count++;
        if(count > 4){
            count = 1;
        }

        document.getElementById("radio"+count).checked = true;
    }

    <!--</script>
    {{-- VLIBRAS --}}
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <script src="{{ asset('/sw.js') }}"></script>

    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

    <script>
        let c = 0;
        function menu(){
        if(c % 2 == 0) {
        document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";
        document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";
        c++;
        }else{
        document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";
        document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";
        c++;
        }
        }
    </script>

</body>
</html>
