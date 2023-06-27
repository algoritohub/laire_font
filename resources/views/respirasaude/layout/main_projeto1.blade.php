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

    // SESSION BANNER PWA
    @$banner_pwa = session('banner_pwa');

@endphp
{{--  --}}
<body id="pagina">
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
                                                <li class="item"><button id="menu-cronicas">Doenças respiratórias crônicas</button></li>
                                                <li class="item"><button>Importância</button></li>
                                                <li class="item"><button>Objetivo</button></li>
                                                <li class="item"><button>Métodos</button></li>
                                                <li class="item"><button>Resultados</button></li>
                                                <li class="item"><button>Pesquisadores</button></li>
                                                <li class="item"><button>Materiais de divulgação</button></li>
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
        {{-- MASCOTE --}}
        <img id="mascote" style="display:none" src="/img/mascote6.png" class="w-[400px] absolute mt-[380px] ml-[1220px] mascote">
        {{-- BALÃO --}}
        <div style="display:none" class="w-[200px] bg-[#080E45] shadow-lg p-[20px] rounded-[20px] absolute mt-[380px] ml-[1175px] balao">
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
        <img id="mascote_resumo" style="display:none" src="/img/mascote7.png" class="w-[400px] absolute mt-[630px] ml-[820px] mascote_resumo">
        {{-- BALÃO RESUMO --}}
        <div style="display:none" class="w-[200px] bg-[#080E45] shadow-lg p-[20px] rounded-[20px] absolute mt-[390px] ml-[775px] balao_resumo">
            {{--  --}}
            <p class="text-[#ffffff] text-[13px] leading-[15px] font-bold text-center"> Vamos entender o que é uma revisão sistemática?</p>
            {{--  --}}
            <p class="mt-[15px] text-center text-[#ffffff] text-[12px]">É só clicar!</p>
        </div>
    </header>
    {{-- SUBMENU --}}
    <header id="sub_cronicas" class="w-[100%] mt-[105px] fixed inline-block" style="display: none; background: #080e45; z-index: 10;">
        <div class="w-[90%] mx-[5%] h-[50px]">
            <ul id="ul-cronicas" class="mt-[12px] mr-[-10px] float-right">
                @foreach ($doencas_cronicas as $doenca_cronica)
                    <li id="mobile-list-cronicas" class="inline-block ml-[30px]"><a class="text-[#ffffff] text-[12px]" href="{{ route('doenca_cronica', ['id' => $doenca_cronica->id]) }}"><button class="btmenu">{{ $doenca_cronica->nome }}</button></a></li>
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

    {{-- MODAL PWA --}}
    <div class="modal_pwa">
        {{--  --}}
        <div class="w-[300px] mx-auto mt-[10%] rounded-[20px] bg-[#ffffff] p-[30px] shadow-lg">
            <img src="/img/frame.png" alt="qr">
            <p class="text-[13px]">Aponte a câmera do seu celular pro QR code e acesse a versão mobile da nossa página, em seguida aguarde o banner de instalação da aplicação em seu aparelho, clique em instalar e aguarde o ícone do respira saúde aparecer na sua lista de Apps. Pronto!</p>
            <a href="{{ route('banner.pwa') }}"><button class="w-[100%] mt-[10px] h-[40px] text-[#ffffff] bg-[#212121] rounded-[5px] border-[1px] border-[#cdcdcd] text-[13px]">Ok, entendi</button></a>
        </div>
    </div>

    {{-- BANNER FIXO --}}
    @if (!isset($banner_pwa) AND empty($banner_pwa))
    <div style="display: none;" id="hide_banner" class="pelicula_banner">
        <div class="w-[100%] h-[100vh] inline-block">
            {{--  --}}
            <div id="area_transparent" class="w-[100%] inline-block h-[85vh]"></div>
            {{--  --}}
            <div class="w-[100%] inline-block bg-[#cdcdcd] shadow-lg h-[15vh] px-[50px] py-[20px]">
                {{--  --}}
                <div class="w-[70%] inline-block float-left">
                    <p class="leading-[17px] mt-[20px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus minima totam ducimus maxime quos iste similique at iure, commodi laboriosam exercitationem. Dolor numquam perferendis illum impedit voluptas iure, eum placeat!</p>
                </div>
                {{--  --}}
                <div class="w-[30%] inline-block float-left">
                    <ul class="float-right mt-[15px]">
                        <li class="inline-block ml-[10px]"><button class="w-[180px] h-[40px] rounded-[5px] border-[1px] border-[#cdcdcd] bg-[#212121] text-[12px] text-[#ffffff]">Como instalar?</button></li>
                        <li class="inline-block ml-[10px]"><a href="{{ route('banner.pwa') }}"><button class="w-[180px] h-[40px] rounded-[5px] border-[1px] border-[#cdcdcd] bg-[#212121] text-[12px] text-[#ffffff]">Não exibir novamente</button></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endif

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

</body>
</html>
