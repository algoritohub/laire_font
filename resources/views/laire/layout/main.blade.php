<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Laire | Home</title>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    {{-- ICONES --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script src="/js/script.js"></script>
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>
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
<body>
    {{-- NOVO ACESSIBILIDADE DESKTOP MOBILE --}}
    <div id="barra_de_acessibilidade_laire" class="w-[100%] inline_block bg-[#212121] fixed">
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
        <div class="w-[90%] mx-[5%] h-[100px] inline-block">
            {{--  --}}
            <div class="w-[70%] inline-block float-left">
                {{--  --}}
                <a href="{{ route('home.respira_saude') }}">
                    <img class="float-left mt-[25px] w-[150px] mr-[10px]" src="/img/LAIRE para fundo escuro.png" alt=""/>
                </a>
            </div>
            {{--  --}}
            <div class="w-[30%] inline-block float-left">
                {{--  --}}
                <p id="busca_mobile1" class="text-[#ffffff] cursor-pointer text-[18px] mt-[40px] float-right"><i class="fi fi-bs-search"></i></p>
            </div>
        </div>
    </header>
    {{-- BARRA DE MENU --}}
    <header id="barra_superior_menu_mobile" class="w-[100%] mt-[140px] shadow-lg bg-[#5CD1FF] overflow-scroll inline-block fixed">
        {{--  --}}
        <div id="menu_principal" class="w-[890px] py-[10px] inline-block">
            {{--  --}}
            <button class="w-[40px] h-[30px] text-[#080E45] font-bold">></button>
            <button class="w-[100px] h-[30px] text-[#080E45] font-bold">Laboratório</button>
            <button class="w-[100px] h-[30px] text-[#080E45] font-bold">Equipe</button>
            <button class="w-[100px] h-[30px] text-[#080E45] font-bold">Parceiros</button>
            <button class="w-[100px] h-[30px] text-[#080E45] font-bold">Pesquisas</button>
            <button class="w-[100px] h-[30px] text-[#080E45] font-bold">Eventos</button>
            <button class="w-[100px] h-[30px] text-[#080E45] font-bold">Notícias</button>
            <button class="w-[100px] h-[30px] text-[#080E45] font-bold">Contatos</button>
            <button class="w-[100px] h-[30px] text-[#080E45] font-bold">Redes Sociais</button>
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
    {{-- HEADER DESKTOP --}}
    <header id="barra_superior_fixa_laire" class="w-[100%] mt-[40px] bg-[#080E45] inline-block fixed">
        {{--  --}}
        <div id="jot" class="w-[90%] mx-[5%] inline-block">
            {{--  --}}
            <div class="w-[100%] h-[80px] float-left inline-block bg-[#080E45]">
                {{--  --}}
                <div id="maxbos" class="w-[15%] inline-block float-left">
                    {{--  --}}
                    <a href="{{ route('home.laire') }}"><img src="/img/LAIRE para fundo escuro.png" class="mt-[18px] w-[150px] float-left"></a>
                </div>
                {{--  --}}
                <div id="maxbos" class="w-[70%] inline-block float-left">
                    {{--  --}}
                    <div id="busca_lai" style="display: none;" class="w-[100%] inline-block">
                        {{--  --}}
                        <form id="mosc" class="float-left w-[95%] ml-[35px] mt-[22px]" action="" method="POST">
                            @csrf
                            <label for="search"></label>
                            <input id="cx-txt-pesquise" type="text" class="w-[100%] h-[40px] text-[13px] outline-none rounded-[10px] pl-[10px]" id="search" placeholder="Pesquise aqui...">
                        </form>
                    </div>
                    {{--  --}}
                    <div id="menu_lai" class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="rout" class="inline-block float-right">
                            {{--  --}}
                            <ul id="barca" class="float-left mt-[30px]">
                                <!--<li class="inline-block ml-[30px]"><a href="#laboratorio" class="text-[#ffffff] text-[14px] font-bold"><strong>Laboratório</strong></a></li>
                                <li class="inline-block ml-[30px]"><a href="#pesquisas." class="text-[#ffffff] text-[14px] font-bold"><strong>Pesquisas</strong>--><!-- por não ter conteúdo até o momento, foram inutilizados os botões-->
                                <li class="inline-block ml-[30px]"><a href="#noticias_slide" class="text-[#ffffff] text-[14px] font-bold"><strong>Notícias</strong></a></li>
                                <li class="inline-block ml-[30px]"><a href="#sobre" class="text-[#ffffff] text-[14px] font-bold"><strong>Sobre</strong></a></li>
                                <li class="inline-block ml-[30px]"><a href="#pesquisadores" class="text-[#ffffff] text-[14px] font-bold"><strong>Equipe</strong></a></li>
                                <li class="inline-block ml-[30px]"><a href="#bk-" class="text-[#ffffff] text-[14px] font-bold"><strong>Eventos</strong></a></li>
                                <li class="inline-block ml-[30px]"><a href="#botao_youtube-" class="text-[#ffffff] text-[14px] font-bold"><strong>Redes Sociais</strong></a></li>
                                <li class="inline-block ml-[30px]"><a href="#patrocinadores" class="text-[#ffffff] text-[14px] font-bold"><strong>Parceiros</strong></a></li>
                                <li class="inline-block ml-[30px]"><a href="#contatos." class="text-[#ffffff] text-[14px] font-bold"><strong>Contatos</strong></a></li>



                            </ul>
                        </div>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[5%] inline-block float-left">
                    {{--  --}}
                    <p id="busca_search_lai_in" class="text-[#ffffff] float-right text-center text-[20px] mt-[30px] cursor-pointer"><i class="fi fi-bs-search"></i></p>
                    {{--  --}}
                    <p style="display: none;" id="busca_search_lai_out" class="text-[#ffffff] float-right text-center text-[20px] mt-[30px] cursor-pointer"><i class="fi fi-bs-search"></i></p>
                </div>
                {{--  --}}
                <div class="w-[10%] inline-block float-left">
                    {{--  --}}
                    <a href="{{ route('home.respira_saude') }}"><img src="/img/avt_rs.png" id="mascot" class="w-[60px] ml-[40px] mt-[13px] cursor-pointer float-right"></a>
                </div>
            </div>
        </div>
    </header>
    {{-- ARTICLE --}}
    <article>
        @yield('conteudo')
    </article>
    {{-- FOOTER --}}
    <div id="contatos."></div>
    {{--  --}}
    <footer class="w-[100%] inline-block bg-[#080E45]">
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
                        <li class="mb-[5px]"><p class="text-[#ffffff] text-[16px]">Departamento <br> de Fisioterapia <br> Da UFRN</p></li> <br>
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
                        <li class="mb-[5px] flex"><!--<img class="mr-[10px] float-left" src="" alt="P">--><p class="float-left text-[#ffffff] text-[16px]"> laire@ccs.ufrn.br </p></li>
                        <!--<li class="mb-[5px] flex"><img class="mr-[10px] float-left" src="" alt="F"><p class="float-left text-[#ffffff]"></p></li>-->
                        <!--<li class="mb-[5px] flex"><img class="mr-[10px] float-left" src="" alt="E"><p class="float-left text-[#ffffff]"></p></li>-->
                    </ul>
                </div>
                {{--  --}}
                <div id="pat.footer" class="w-[100%] rounded-[10px] mt-[30px] inline-block bg-[#ffffff] p-[20px]">
                    <center>
                        {{--  --}}
                        <ul>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/9.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/8.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/6.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/3.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[310px]" src="/img/mcti.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[110px]" src="/img/ppgfis.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[410px]" src="/img/10.png" alt=""></li>
                            <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/logomarcaproex_oficial.jpg" alt=""></li>
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
        if(count > 5){
            count = 1;
        }

        document.getElementById("radio"+count).checked = true;
    }

    </script>

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

    <!-- PWA -->
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>

    <!--menu hamburgue-->
    <script>
        function clickMenu(){
            if (navegacao.style.display == 'block'){
                navegacao.style.display = 'none'
            } else ( navegacao.style.display = 'block')
        }
    </script>

    <script>
        // Script jQuery para esconder um elemento na página quando a rolagem ultrapassar 200px
        $(window).scroll(function(){

                if($(document).scrollTop() > 600){// se a rolagem passar de 200px esconde o elemento

                    $('#elementoAEsconder').fadeOut();

                } else { // senão ele volta a ser visivel

                    $('#elementoAEsconder').fadeIn();

                }

            });
    </script>

</body>
</html>
