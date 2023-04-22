<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RespiraSaúde | BLOG</title>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;700&display=swap" rel="stylesheet">
    {{-- ICONES --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
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
        $numb_font = 13;
    }
@endphp
{{--  --}}
<body>
    {{-- MOBILE HEADER --}}
    <header id="barra_superior_acessibilidade_mobile" class="w-[100%] bg-[#212121] inline-block fixed">
        {{--  --}}
        <div class="w-[55%] float-left inline-block h-[40px]">
            {{--  --}}
            <ul id="button_font" class="float-right mt-[5px]">
                <li class="inline-block mr-[15px]"><a class="font-bold text-[17px] text-[#ffffff]" href="{{ route('font_down') }}">A-</a></li>
                <li class="inline-block mr-[20px]"><a class="font-bold text-[17px] text-[#ffffff]" href="{{ route('font_up') }}">A+</a></li>
            </ul>
        </div>
        {{--  --}}
        <div class="w-[20%] float-left inline-block h-[40px]">
            {{--  --}}
            <a href="{{ route('mapa_site') }}"><p class="text-[12px] mt-[10px] float-right text-[#ffffff]">Mapa do site</p></a>
        </div>
        {{--  --}}
        <div class="w-[25%] float-left inline-block h-[40px]">
            {{--  --}}
            <ul class="mt-[5px] mr-[10px] float-right">
                <li class="inline-block ml-[10px]"><a href=""> <img class="w-[25px] h-[25px]" src="/img/brasil.png" alt=""></a></li>
                <li class="inline-block ml-[10px]"><a href=""> <img class="w-[25px] h-[25px]" src="/img/eua.png" alt=""></a></li>
            </ul>
        </div>
    </header>
    {{-- BARRA SUPERIOR MOBILE --}}
    <header id="barra_superior_fixa_mobile" class="w-[100%] mt-[40px] bg-[#ffffff] inline-block fixed">
        {{--  --}}
        <div class="w-[90%] mx-[5%] h-[100px] inline-block">
            {{--  --}}
            <div class="w-[70%] inline-block float-left">
                {{--  --}}
                <a href="{{ route('blog') }}">
                    <img class="float-left mt-[22px] w-[60px] mr-[10px]" src="/img/rs_logo.png" alt=""/>
                    <p class="text-[18px] mt-[34px] text-[#080E45]"><b>Respira</b>Saúde | <b>Blog</b></p>
                </a>
            </div>
            {{--  --}}
            <div class="w-[30%] inline-block float-left">
                {{--  --}}
                {{-- <img id="menu_bt" src="/img/menu-hamburguer.png" onclick="menu()" class="w-[20px] float-right mt-[35px]"> --}}
                <p class="text-[#080E45] text-[20px] float-right mt-[35px]"><i class="fi fi-br-menu-burger"></i></p>
            </div>
        </div>
    </header>
    {{-- HEADER --}}
    <header id="barra_superior_fixa" class="w-[100%] bg-[#ffffff] shadow-lg inline-block fixed">
        {{--  --}}
        <div class="w-[90%] mx-[5%] h-[100px]">
            {{-- LOGO --}}
            <div class="w-[30%] inline-block float-left">
                {{--  --}}
                <a href="{{ route('blog') }}">
                    <img class="float-left mt-[20px] w-[70px] mr-[10px] float-left" src="/img/rs_logo.png" alt=""/>
                    <p class="text-[25px] mt-[28px] text-[#080E45] float-left"><b>Respira</b>Saúde | <b class="text-[#5CD1FF]">Blog</b></p>
                </a>
            </div>
            {{-- MENU --}}
            <div class="w-[50%] inline-block float-left">
                {{--  --}}
                <div id="box_blog_menu" class="w-[100%] inline-block">
                    {{--  --}}
                    <ul class="mt-[36px]">
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#080E45] font-bold text-[14px]">Novidades</p></a></li>
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#080E45] font-bold text-[14px]">Pesquisas</p></a></li>
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#080E45] font-bold text-[14px]">Eventos</p></a></li>
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#080E45] font-bold text-[14px]">Doenças</p></a></li>
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#080E45] font-bold text-[14px]">Ações de Extensão</p></a></li>
                    </ul>
                </div>
                {{--  --}}
                <div style="display: none;" id="box_blog_busca" class="w-[100%] inline-block">
                    {{--  --}}
                    <form action="" method="POST">
                        {{--  --}}
                        @csrf
                        {{--  --}}
                        <input class="w-[100%] h-[40px] rounded-[10px] mt-[28px] text-[14px] pl-[10px] outline-none border-[#cdcdcd] bg-[#eeeeee] border-[1px]" type="text" placeholder="Busque por algo..." name="busca">
                    </form>
                </div>
            </div>
            {{--  --}}
            <div class="w-[4%] inline-blog float-left">
                {{--  --}}
                <p id="busca_blog_out" class="text-[#080E45] float-right text-center text-[20px] mt-[35px] cursor-pointer"><i class="fi fi-bs-search"></i></p>
            </div>
            {{-- BOTÕES --}}
            <div class="w-[8%] inline-block float-left">
                {{--  --}}
                <a href="{{ route('home.laire') }}"><img src="/img/avt_laire.png" class="w-[88px] mt-[3px] float-right"></a>
            </div>
            {{--  --}}
            <div class="w-[8%] inline-block float-left">
                {{--  --}}
                <a href="{{ route('home.respira_saude') }}"><img src="/img/avt_rs.png" class="w-[100px] float-right"></a>
            </div>
        </div>
    </header>
    {{-- ARTICLE --}}
    <article>
        @yield('conteudo')
    </article>
    {{-- FOOTER --}}
    <footer class="w-[100%] mt-[80px] bg-[#080E45] inline-block">
        {{--  --}}
        <div class="w-[90%] mx-[5%] my-[50px] inline-block">
            {{--  --}}
            <div id="footer_blog_1" class="w-[25%] inline-block float-left">
                <p class="text-[#ffffff] text-[12px]">laire@ccs.ufrn.br</p>
            </div>
            {{--  --}}
            <div id="footer_blog_2" id="p_respira_blog" class="w-[50%] inline-block float-left">
                {{--  --}}
                <p class="text-[20px] text-center text-[#ffffff]"><b>Respira</b>Saúde | <b class="text-[#ffffff]">Blog</b></p>
                {{--  --}}
                <center>
                    <ul id="menu_blog" class="mt-[30px] ml-[30px]">
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#ffffff] text-[14px]">Novidades</p></a></li>
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#ffffff] text-[14px]">Pesquisas</p></a></li>
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#ffffff] text-[14px]">Eventos</p></a></li>
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#ffffff] text-[14px]">Doenças</p></a></li>
                        <li class="inline-block mr-[30px]"><a href=""><p class="text-[#ffffff] text-[14px]">Ações de Extensão</p></a></li>
                    </ul>
                </center>
            </div>
            {{--  --}}
            <div id="footer_blog_3" class="w-[25%] inline-block float-left">
                {{--  --}}
                <ul class="float-right">
                    <li class="inline-block ml-[25px] w-[20px]"><a href="https://www.facebook.com/laire.lab" target="_blanck" ><img class="text-[#ffffff] text-[20px]" src="/img/facebook.png" alt="Facebook"></a></li>
                    <li class="inline-block ml-[25px] w-[20px]"><a href="https://www.instagram.com/laire_ufrn/?hl=pt" target="_blanck" ><img class="text-[#ffffff] text-[20px]" src="/img/instagram.png" alt="Instagram"></a></li>
                    <li class="inline-block ml-[25px] w-[20px]"><a href="https://www.youtube.com/channel/UCLTWKg3OKl5m9QQpY5inDtQ" target="_blanck" ><img class="text-[#ffffff] text-[20px]" src="/img/youtube.png" alt="Youtube"></a></li>
                </ul>
            </div>
        </div>
    </footer>

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
</body>
</html>
