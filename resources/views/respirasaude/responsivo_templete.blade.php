<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RespiraSaúde | Responsivo</title>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;700&display=swap" rel="stylesheet">
    <!-- ICONES -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
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

<style>
    #mixedSlider{
        position: relative;
    }
    .MS-content{
        white-space: nowrap;
        overflow: hidden;
        margin: 0;
    }

    #mixedSlider{
        padding: 13px 0px;
        position: relative;
        z-index: 20;
    }
    #mixedSlider .MS-content {
        white-space: nowrap;
        overflow: hidden;
        margin: 0;
        padding-left: 30px;
    }

    button.MS-left{
        padding: 8px 10px 6px 10px;
        border: 0px;
        border-radius: 100px;
        margin: 0px 0px 0px 0px;
        cursor: pointer;
    }
    button.MS-right{
        padding: 8px 10px 6px 10px;
        border: 0px;
        border-radius: 100px;
        margin: 0px 0px 0px 0px;
        float: right;
        cursor: pointer;
    }
    button.MS-left img{
        width: 20px;
    }
    button.MS-right img{
        width: 20px;
    }

    li.item{
        list-style: none;
        display: inline;
        margin-left: 60px;
    }
    li.item button{
        color: #080E45;
        font-weight: bold;
        font-size: 13px;
    }
    #shadow{
        box-shadow: rgba(8, 14, 69, 1) 100px 0px 36px -50px inset;
    }
    #active-search{
        width: 0px;
        height: 0px;
        visibility: hidden;
    }
    #hidden-search{
        width: 100%;
        height: 35px;
        visibility: visible;
    }
    #hidden-search-desk{
        display: none;
    }
    #block_acessibility{
        padding-top: 25px;
    }
    li.sub{
        display: show;
    }
    #section-master-prime{
        background: linear-gradient(90deg, rgba(250,250,250,1) 26%, rgba(0,212,255,1) 68%);
    }
    .img-public{
        margin-top: 80px;
        border-radius: 20px;
    }
    #title-post{
        margin-top: 80px;
        font-size: 25px;
        line-height: 25px;
    }
    #container-block{
        width: 100%;
        padding-bottom: 30px;
        height: auto;
    }
    #img-pesquisador{
        border-radius: 20px;
    }
    /* CELULARES */
    @media all and (min-width:2px) and (max-width:798px) {
        #mixedSlider{
            padding: 15px 0px;
            position: relative;
            z-index: 20;
        }
        #header-left{
            width: 20%;
            display: inline-block;
        }
        #header-right{
            width: 80%;
            display: inline-block;
        }
        p#nombre{
            visibility: hidden;
        }
        #acessibility-left{
            width: 90%;
            display: inline-block;
        }
        #acessibility-right{
            width: 10%;
            display: inline-block;
        }
        #active-search{
            width: 100%;
            height: 20px;
            visibility: visible;
        }
        #hidden-search{
            width: 0px;
            height: 0px;
            visibility: hidden;
        }
        #block_acessibility{
            padding-top: 30px;
        }
        #hidden-search-desk{
            display: none;
        }
        #sub_cronicas{
            display: none;
        }
        #block-prime-video{
            width: 80%;
            margin: 0px 10%;
            padding-left: 0px;
            height: auto;
            display: inline-block;
        }
        #block-prime-text{
            width: 80%;
            margin: 0px 10%;
            height: auto;
            padding: 20px 0px;
            display: inline-block;
        }
        #section-master-prime{
            background: #5CD1FF;
        }
        #moldure-prime{
            width: 100%;
            height: 220px;
        }
        #container-block{
            width: 100%;
        }
        .img-public{
            margin-top: 40px;
            border-radius: 20px;
        }
        #band_a_block{
            width: 100%;
            height: auto;
            padding: 0px;
        }
        #band_b_block{
            width: 100%;
            padding: 0px;
        }
        #title-post{
            margin-top: 30px;
            font-size: 25px;
            line-height: 25px;
        }
        #pesquisador-new{
            width: 44%;
            margin: 0px 3%;
            height: auto;
        }
        #img-pesquisador{
            height: 300px;
            border-radius: 20px;
        }
        #rounded-img{
            width: 120px;
            height: 120px;
        }
    }
    /* TABLETS */
    @media all and (min-width:800px) and (max-width:804px) {
        #mixedSlider{
            padding: 15px 0px;
            position: relative;
            z-index: 20;
        }
        #header-left{
            width: 12%;
            display: inline-block;
        }
        #header-right{
            width: 88%;
            display: inline-block;
        }
        p#nombre{
            visibility: hidden;
        }
        #active-search{
            width: 0px;
            height: 0px;
            visibility: hidden;
        }
        #hidden-search{
            width: 100%;
            height: 35px;
            visibility: visible;
        }
        #hidden-search-desk{
            width: 0px;
            height: 0px;
            visibility: hidden;
        }
        #block_acessibility{
            padding-top: 30px;
        }
        #sub_cronicas{
            display: none;
        }
        #block-prime-video{
            width: 90%;
            margin: 0px 5%;
            padding-left: 0px;
            height: auto;
            display: inline-block;
        }
        #block-prime-text{
            width: 90%;
            margin: 0px 5%;
            height: auto;
            padding: 20px 0px;
            display: inline-block;
        }
        #section-master-prime{
            background: #5CD1FF;
        }
        .img-public{
            margin: 40px 0px;
        }
        #container_inner_bloco1{
            width: 90%;
            height: auto;
            margin: 0px 5%;
        }
        #container_inner_bloco2{
            width: 90%;
            height: auto;
            margin: 0px 5%;
        }
        #container-block{
            width: 100%;
        }
        .img-public{
            margin-top: 40px;
            border-radius: 20px;
        }
        #band_a_block{
            width: 100%;
            height: auto;
            padding: 0px;
        }
        #band_b_block{
            width: 100%;
            padding: 0px;
        }
        #title-post{
            margin-top: 30px;
            font-size: 25px;
            line-height: 25px;
        }
        #pesquisador-new{
            width: 30%;
            margin: 0px 1.5%;
            height: auto;
        }
        #img-pesquisador{
            height: 310px;
            border-radius: 20px;
        }
    }
    /* RESPONSIVIDADE IPAD */
    @media all and (min-width:805px) and (max-width:815px) {
        #mixedSlider{
            padding: 13px 0px;
            position: relative;
            z-index: 20;
        }
        #header-left{
            width: 12%;
            display: inline-block;
        }
        #header-right{
            width: 88%;
            display: inline-block;
        }
        p#nombre{
            visibility: hidden;
        }
        #active-search{
            width: 0px;
            height: 0px;
            visibility: hidden;
        }
        #hidden-search{
            width: 100%;
            height: 35px;
            visibility: visible;
        }
        #block_acessibility{
            padding-top: 25px;
        }
        #sub_cronicas{
            display: none;
        }
        #moldure-prime{
            width: 100%;
            height: 360px;
        }
        #block-prime-video{
            width: 90%;
            margin: 0px 5%;
            padding-left: 0px;
            height: auto;
            display: inline-block;
        }
        #block-prime-text{
            width: 90%;
            margin: 0px 5%;
            height: auto;
            padding: 20px 0px;
            display: inline-block;
        }
        #section-master-prime{
            background: #5CD1FF;
        }
        #container_inner_bloco1{
            width: 90%;
            height: auto;
            margin: 0px 5%;
        }
        #container_inner_bloco2{
            width: 90%;
            height: auto;
            margin: 0px 5%;
        }
        #container_inner_bloco1{
            width: 90%;
            height: auto;
            margin: 0px 5%;
        }
        #lado_a_bloco1{
            width: 100%;
            height: auto;
            padding: 0px;
        }
        #container-block{
            width: 100%;
        }
        .img-public{
            margin-top: 40px;
            border-radius: 20px;
        }
        #band_a_block{
            width: 100%;
            height: auto;
            padding: 0px;
        }
        #band_b_block{
            width: 100%;
            padding: 0px;
        }
        #title-post{
            margin-top: 30px;
            font-size: 25px;
            line-height: 25px;
        }
        #pesquisador-new{
            width: 30%;
            margin: 0px 1.5%;
            height: auto;
        }
        #img-pesquisador{
            height: 310px;
            border-radius: 20px;
        }
    }
</style>

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

<body>
    <section class="w-[100%] fixed">
        {{-- BUTTON LAIRE --}}
        <a href="{{ route('home.laire') }}"><div class="w-[50px] h-[50px] mr-[10px] mt-[170px] rounded-[100px] float-right cursor-pointer" title="Volte ao Laire" style="background-image: url('/img/avt_laire.png'); background-size: 100%; z-index: 500;"></div></a>
    </section>
    <!-- HEADER  -->
    <header class="w-[100%] inline-block bg-[#080e45] fixed" style="z-index: 10;">
        <div class="w-[95%] ml-[5%] inline-block">
            <div class="w-[100%] h-[100px] inline-block">
                <div id="header-left" class="w-[20%] h-[100px] float-left inline-block bg-[#080E45]">
                    <!-- LOGO DESK -->
                    <img class="float-left mt-[20px] w-[75px] mr-[10px]" src="/img/rs_logo.png" alt="RespiraSaúde"/>
                    <p id="nombre" class="text-[20px] mt-[35px] text-[#ffffff]"><b>Respira</b>Saúde</p>
                </div>
                <div id="header-right" class="w-[80%] h-[100px] float-left inline-block">
                    <div class="w-[100%] inline-block">
                        <!-- ACESSIBILITY -->
                        <div id="shadow" class="w-[100%] px-[6%] float-left h-[50px] inline-block bg-[#212121]">
                            <div class="w-[100%] inline-block">
                                <!-- BUTTONS -->
                                <div id="acessibility-left" class="w-[70%] pr-[30px] inline-block float-left">
                                    <!-- SEARCH -->
                                    <input id="hidden-search-desk" placeholder="Busque algo!" class="w-[85%] ml-[15%] mt-[10px] pl-[10px] h-[35px] outline-none rounded-[5px]" type="text">
                                    <!-- BLOCK ACESSIBILITY -->
                                    <div id="block_acessibility" class="w-[100%] mt-[-12px] inline-block">
                                        <!-- LINGUAGES -->
                                        <ul class="float-right">
                                            <li class="inline-block ml-[10px]"><a href=""> <img class="w-[25px] h-[25px]" src="/img/brasil.png" alt=""></a></li>
                                            <li class="inline-block ml-[10px]"><a href=""> <img class="w-[25px] h-[25px]" src="/img/eua.png" alt=""></a></li>
                                        </ul>
                                        {{-- SIZE FONT --}}
                                        <ul class="float-right">
                                            <li class="inline-block mr-[15px]"><a class="font-bold text-[17px] text-[#ffffff]" href="{{ route('font_down') }}">A-</a></li>
                                            <li class="inline-block mr-[20px]"><a class="font-bold text-[17px] text-[#ffffff]" href="{{ route('font_up') }}">A+</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- SEARCH -->
                                <div id="acessibility-right" class="w-[30%] inline-block float-left">
                                    <!-- SEARCH -->
                                    <input id="hidden-search" placeholder="Busque algo!" class="w-[100%] text-[13px] mt-[10px] pl-[10px] h-[35px] outline-none rounded-[5px]" type="text">
                                    <!-- BUTTON ACTIVE SEARCH -->
                                    <p id="active-search" class="text-[#ffffff] text-center text-[16px] mt-[2px] cursor-pointer"><i class="fi fi-bs-search"></i></p>
                                </div>
                            </div>
                        </div>
                        <!-- MENU -->
                        <div class="w-[100%] float-left h-[50px] mt-[5px] inline-block bg-[#00FF8C]">
                            <!-- MENU PRIME -->
                            <div id="shadow" class="w-[100%] inline-block float-left overflow-scroll">
                                <!-- LISTEM -->
                                <nav>
                                    <ul class="w-[100%]">
                                        <div id="mixedSlider">
                                            {{-- ITENS --}}
                                            <div class="MS-content box_avalia_egg">
                                                <li class="item"><button>Missão</button></a></li>
                                                <li class="item"><button id="menu-doenca">Doenças respiratórias crônicas</button></li>
                                                <li class="item"><button>Doenças respiratórias agudas</button></li>
                                                <li class="item"><button id="menu-projetos">Projetos</button></li>
                                                <li class="item"><button id="menu-eventos">Eventos</button></li>
                                                <li class="item"><button>Projetos de Extensão</button></li>
                                            </div>
                                            {{-- BUTTONS --}}
                                            <div class="MS-controls" style="margin-top: -30px; position: absolute;">
                                                <button class="MS-left"></button>
                                                <button class="MS-right"><img src="/img/angulo-direito.png"></button>
                                            </div>
                                        </div>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- SUBMENU --}}
    <header id="sub_cronicas" class="w-[100%] mt-[106px] fixed inline-block" style="display: none; background: #080e45; z-index: 10;">
        <div class="w-[90%] mx-[5%] h-[50px]">
            <ul class="mt-[12px] mr-[-10px] float-right">
                @foreach ($doencas_cronicas as $doenca_cronica)
                    <li class="inline-block ml-[30px]"><a class="text-[#ffffff] text-[12px]" href="{{ route('doenca_cronica', ['id' => $doenca_cronica->id]) }}"><button class="btmenu">{{ $doenca_cronica->nome }}</button></a></li>
                @endforeach
            </ul>
        </div>
    </header>
    {{-- SUBMENU --}}
    <header id="sub_projetos" class="w-[100%] mt-[106px] fixed inline-block" style="display: none; background: #080e45; z-index: 10;">
        <div class="w-[90%] mx-[5%] h-[50px]">
            <ul class="mt-[12px] mr-[-10px] float-right">
                <li class="inline-block ml-[30px]"><a class="text-[#ffffff] text-[12px]" href=""><button class="btmenu">Efeitos da atenção domiciliar para adultos...</button></a></li>
                <li class="inline-block ml-[30px]"><a class="text-[#ffffff] text-[12px]" href=""><button class="btmenu">Soluções para aumentar a aceitabilidade, adesão...</button></a></li>
                <li class="inline-block ml-[30px]"><a class="text-[#ffffff] text-[12px]" href=""><button class="btmenu">Desenvolvimento e validação de um sistema eletrônico...</button></a></li>
            </ul>
        </div>
    </header>
    {{-- SUBMENU --}}
    <header id="sub_eventos" class="w-[100%] mt-[106px] fixed inline-block" style="display: none; background: #080e45; z-index: 10;">
        <div class="w-[90%] mx-[5%] h-[50px]">
            <ul class="mt-[12px] mr-[-10px] float-right">
                <li class="inline-block ml-[30px]"><a class="text-[#ffffff] text-[13px]" href=""><button class="btmenu">ConVivendo com a Asma</button></a></li>
            </ul>
        </div>
    </header>
    {{-- SLIDE --}}
    <div class="capsula-carrossel">
        <div style="margin-top: 5px; z-index: -10; display: none;" class="slider">
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


    {{-- NEW BLOCK PRIME --}}
    <section id="section-master-prime" class="w-[100%] inline-block mt-[100px]">
        <div class="w-[100%] inline-block">
            <div class="w-[100%] inline-block">
                {{-- BLOCK IMAGE PRIME --}}
                <div id="block-prime-video" class="w-[50%] pl-[5%] float-left inline-block">
                    {{-- BUTTON ACESSIBILITY --}}
                    <div class="w-[100%] mt-[40px] inline-block">
                        <ul>
                            <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                            <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                        </ul>
                    </div>
                    {{-- IMAGE/VIDEO --}}
                    <div id="moldure-prime" class="w-[100%] inline-block bg-[purple] rounded-[20px] h-[400px]"></div>
                    {{-- BASE LOGOS --}}
                    <div id="base_logos" class="w-[80%] mt-[20px] h-[150px] inline-block">
                        {{-- LOGOS --}}
                        <div class="w-[40%] float-left inline-block">
                            <img class="w-[80%]" src="/img/6.png" alt="CNPq">
                        </div>
                        {{--  --}}
                        <div class="w-[60%] float-left inline-block">
                            <img class="w-[100%]" src="/img/mcti.png" alt="Ministério Ciência e Tecnologia">
                        </div>
                    </div>
                </div>
                {{-- BLOCK TEXT PRIME --}}
                <div id="block-prime-text" class="w-[45%] float-left inline-block pl-[80px] pb-[20px] pt-[80px] text-justify">
                    <p class="text-[30px] leading-[30px] float-right text-right font-bold text-[#080E45]"> Soluções para aumentar a aceitabilidade, adesão e cumprimento das medidas de prevenção e controle da covid-19 na população.</p>
                    <p class="text-right mt-[40px] float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Esta pesquisa está sendo financiada pelo Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq),</p>
                    <p class="mt-[20px] text-right float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Ministério da Ciência, Tecnologia, Inovações e Comunicações (MCTIC) e Ministério da Saúde (MS). O seu objetivo é propor soluções para que a população seja capaz de aumentar a sua adesão às medidas de prevenção e controle da COVID-19 e outras doenças respiratórias contagiosas. Para isso, realizaremos uma importante e extensa revisão sistemática para compreender as barreiras e facilitadores da adesão às medidas de prevenção e controle a nível mundial. Posteriormente, a partir do desenvolvimento, validação a aplicação do questionário ADHERE no território nacional. </p>
                    <p class="mt-[20px] text-right float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Ministério da Ciência, Tecnologia, Inovações e Comunicações (MCTIC) e Ministério da Saúde (MS). O seu objetivo é propor soluções para que a população seja capaz de aumentar a sua adesão às medidas de prevenção e controle da COVID-19 e outras doenças respiratórias contagiosas. Para isso, realizaremos uma importante e extensa revisão sistemática para compreender as barreiras e facilitadores da adesão às medidas de prevenção e controle a nível mundial. Posteriormente, a partir do desenvolvimento, validação a aplicação do questionário ADHERE no território nacional. </p>
                    {{-- AUDIO --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="audio_libra" style="display: none;" class="inline-block float-right mt-[20px]">
                            {{--  --}}
                            <audio controls="controls">
                                <source src="sua_musica.mp3" type="audio/mp3" />
                                seu navegador não suporta HTML5
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOCO 1 --}}
    <section class="w-[100%] mt-[-5px] bg-[#f1f1f1] inline-block">
        {{--  --}}
        <div id="container-block" class="w-[100%] inline-block">
            {{--  --}}
            <div id="band_a_block" class="w-[50%] pl-[80px] float-left inline-block">
                {{--  --}}
                <div id="container_inner_bloco1" class="w-[100%] inline-block">
                    {{--  --}}
                    <img class="img-public" src="/img/Pesquisa 2/Pesquisa 2 - imagem 1.png">
                </div>
            </div>
            {{--  --}}
            <div id="band_b_block" class="w-[50%] px-[80px] float-left inline-block">
                <div id="importacncia_projeto2"></div>
                {{--  --}}
                <div id="container_inner_bloco1" class="w-[100%] inline-block">
                    {{--  --}}
                    <p id="title-post" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Vamos entender a importância da pesquisa</p>
                    <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Algumas doenças respiratórias infecciosas matam milhares de brasileiros todos os anos, pois elas são contagiosas e passam de uma pessoa para outra muito facilmente através da respiração, tosse, espirros e mãos contaminadas.</b>.</p>
                    <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Então, saber um pouco mais sobre essas doenças é muito importante. Precisamos entender como elas são transmitidas, quais são os seus sintomas e principalmente, como podemos nos proteger do contágio. Então, pense conosco... se nós conhecermos melhor essas doenças, e como nós podemos nos proteger delas, será possível diminuir a <b>mortalidade</b> no nosso país!</p>
                    <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Vamos dar agora alguns exemplos de doenças respiratórias que são contagiosas, algumas delas você já deve conhecer, outras talvez não. Vamos lá!</p>
                    <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Você já ouviu falar em <b>pneumonia</b>, <b>tuberculose</b>, <b>H1N1</b>, <b>bronquiolite</b>, <b>influenza</b>, <b>coqueluche</b>, <b>COVID-19</b></p>
                    <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Vamos compartilhar aqui de uma forma muito simples, como esta pesquisa está acontecendo e os seus resultados. Ela está sendo realizada com o apoio do Ministério da Saúde, CNPq. </p>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOCO 2 --}}
    <section class="w-[100%] mt-[-5px] bg-[#fafafa] inline-block">
        {{--  --}}
        <div id="container-block" class="w-[100%] inline-block">
            {{--  --}}
            <div id="band_a_block" class="w-[50%] px-[80px] inline-block float-left">
                {{--  --}}
                <div id="container_inner_bloco2" class="w-[100%] inline-block">
                    {{--  --}}
                    <p id="title-post" class="text-[25px] font-bold mb-[20px] mt-[90px] pl-[20px] mb-[20px] border-l-[3px] border-l-[#00FF8C]">Objetivo da Pesquisa </p>

                    <p id="metodo" class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Propor soluções para que a população seja capaz de aumentar a sua adesão às medidas de prevenção </b>.</p>
                    <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">e controle da COVID-19 e outras doenças respiratórias contagiosas. </p>
                    <p class="mt-[20px] text-right float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Ministério da Ciência, Tecnologia, Inovações e Comunicações (MCTIC) e Ministério da Saúde (MS). O seu objetivo é propor soluções para que a população seja capaz de aumentar a sua adesão às medidas de prevenção e controle da COVID-19 e outras doenças respiratórias contagiosas. Para isso, realizaremos uma importante e extensa revisão sistemática para compreender as barreiras e facilitadores da adesão às medidas de prevenção e controle a nível mundial. Posteriormente, a partir do desenvolvimento, validação a aplicação do questionário ADHERE no território nacional. </p>
                    <p class="mt-[20px] text-right float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Ministério da Ciência, Tecnologia, Inovações e Comunicações (MCTIC) e Ministério da Saúde (MS). O seu objetivo é propor soluções para que a população seja capaz de aumentar a sua adesão às medidas de prevenção e controle da COVID-19 e outras doenças respiratórias contagiosas. Para isso, realizaremos uma importante e extensa revisão sistemática para compreender as barreiras e facilitadores da adesão às medidas de prevenção e controle a nível mundial. Posteriormente, a partir do desenvolvimento, validação a aplicação do questionário ADHERE no território nacional. </p>
                </div>
            </div>
            {{--  --}}
            <div id="band_b_block" class="w-[50%] inline-block float-left pr-[80px]">
                {{--  --}}
                <div id="container_inner_bloco2" class="w-[100%] inline-block">
                    {{--  --}}
                    <img class="img-public" src="/img/Pesquisa 1 - imagem 5_20230510_073059_0004.png">
                </div>
            </div>
        </div>
    </section>

    {{-- PESQUISADORES --}}
    <section class="w-[100%] inline-block">
        <div class="w-[94%] mx-[3%] my-[40px] inline-block inline-block">
            <center><p class="font-bold text-[25px]">Pesquisadores</p></center>
        </div>
        {{-- LISTA DE PESQUISADORES --}}
        <div class="w-[94%] mx-[3%] mt-[60px] inline-block">
            @if($pesquisadores)
                @foreach ($pesquisadores as $pessoa)

                @php
                $id_pesqs = $pessoa->id;
                $pesquisa = Illuminate\Support\Facades\DB::select("SELECT * FROM conect_pesquisas WHERE pesquisa = 1 AND pesquisador = '$id_pesqs'");
                @endphp

                @if($pesquisa)
                {{-- CARD PESQUISADOR --}}
                <div id="pesquisador-new" class="w-[20%] mx-[2.5%] float-left">
                    {{--  --}}
                    <div id="img-pesquisador" class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                        {{--  --}}
                        <div id="rounded-img" style="background: url('/img/pesquisadores/{{ $pessoa->imagem }}'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                        {{--  --}}
                        <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                            {{--  --}}
                            <p class="font-bold text-center text-[15px]">{{ $pessoa->nome }}</p>
                            {{--  --}}
                            <p class="text-[#212121] text-center text-[16px]">{{ $pessoa->referencia }}</p>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block h-[150px]">
                        {{--  --}}
                        <a href="{{ route('pesquisadores_projeto_1', ['id' => $pessoa->id]) }}"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                    </div>
                </div>
                @endif
                @endforeach
            @else
            <p class="text-center text-[20px] font-bold mt-[30px]">Sem pesquisadores para esse projeto!</p>
            @endif
        </section>
    </section>

    <nav id="menu_prime" class="mt-[5px]">
        <ul class="menu">
            <li><b><a href="#text_missao_RS">Missão</a></b></li>
            <li><b><a href="#">Doenças respiratórias crônicas</a></b>
                <ul>
                    <li class="ma"><a href="#">Conheça as principais</a>
                        <ul class="mx">
                            @foreach ($doencas_cronicas as $doenca_cronica)
                                {{--  --}}
                                <li><a href="{{ route('doenca_cronica', ['id' => $doenca_cronica->id]) }}">{{ $doenca_cronica->nome }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="ma"><a href="#">Como controlar os sintomas</a>
                        <ul class="mx">
                            {{-- DOENÇAS AQUI --}}
                        </ul>
                    </li>
                    <li class="ma"><a href="#">Tratamento</a>
                        <ul class="mx">
                            {{-- DOENÇAS AQUI --}}
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b><a href="#">Doenças respiratórias agudas</a></b>
                <ul>
                    <li class="ma"><a href="#">Como prevenir?</a>
                        <ul class="mx">
                            <li><a href="#">Vacinas</a></li>
                            <li><a href="#">Higienização das mãos</a></li>
                            <li><a href="#">Uso de máscaras faciais</a></li>
                            <li><a href="#">Isolamento social</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b><a href="#">Projetos</a></b>
                <ul>
                    <li class="ma"><a href="/respira-saude/projeto/1">Efeitos da atenção domiciliar para adultos...</a>
                    </li>
                    <li class="ma"><a href="/respira-saude/projeto/2">Soluções para aumentar a aceitabilidade, adesão...</a>
                    </li>
                    <li class="ma"><a href="/respira-saude/projeto/3">Desenvolvimento e validação de um sistema eletrônico...</a>
                    </li>
                </ul>
            </li>
            <li><b><a href="#">Eventos</a></b>
                <ul>
                    <li class="ma"><a href="#">ConVivendo com a Asma</a>
                        <ul class="mx">
                            <li><a href="#">Vídeos</a></li>
                            <li><a href="#">E-books</a></li>
                            <li><a href="#">Infográficos</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><b><a href="#projeto_extensao">Projetos de Extensão</a></b></li>
        </ul>
    </nav>

    <div class="mt-[100px] w-[100%] h-[300px] p-[50px] bg-[purple] inline-block">
        <div id="caixa" class="w-[100%] h-[100%] bg-[red] mt-[-50px] ml-[-50px] absolute opacity-[0.5] border-[10px] border-[yellow]"></div>
        <center>
            <a style="position: bottom right;" href="https://www.google.com" target="blank_"><button class="px-[20px] h-[40px] rounded-[100px] bg-[blue] text-[#ffffff]">Button Teste</button></a>
        </center>

        <a href="https://wa.me/5531994365903?text=Ola%20estou%20na%20sua%20loja" class="button_wpp" target="_blank">
        <i style="margin-top:16px" class="fab fa-whatsapp"></i>
        </a>


        {{-- FDP ARLINDO --}}
        <img src="/img/anime.png" id="ftp" style="width: 200px;">
    </div>

    <!-- BODY  -->
    <section class="w-[100%] h-[1000px]"></section>
    <!-- FOOTER  -->
    <footer class=""></footer>

    {{-- SCRIPT --}}
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="/js/multislider.js"></script>
    <script>
        $('#basicSlider').multislider({
            continuous: true,
            duration: 2000
        });

        $('#mixedSlider').multislider({
            duration: 200,
            interval: 0
        });
    </script>

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

    </script>

</body>
</html>




