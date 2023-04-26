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
    <header id="barra_superior_fixa_mobile" class="w-[100%] mt-[40px] bg-[#080E45] inline-block fixed">
        {{--  --}}
        <div class="w-[90%] mx-[5%] h-[100px] inline-block">
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
                <img id="menu_bt" src="/img/menu-hamburguer.png" onclick="menu()" class="w-[20px] float-right mt-[35px]">
            </div>
        </div>
    </header>
    {{--  --}}
    <div class="menu_mobile_cascata">
        {{--  --}}
        <div class="cont_principal">
            <div class="cont_icon_trg disable">
                <div class="cont_drobpdown_menu disable">
                    <ul class="">
                        <li class=""><a class="text-[13px] text-[#080E45] font-bold" href="#">Missão</a></li>
                        <hr class="my-[10px]">
                        <li class=""><a class="text-[13px] text-[#080E45] font-bold" href="#">Doenças respiratórias agudas</a></li>
                        <hr class="my-[10px]">
                        <li class=""><a class="text-[13px] text-[#080E45] font-bold" href="#">Doenças respiratórias crônicas</a></li>
                        <hr class="my-[10px]">
                        <li class=""><a class="text-[13px] text-[#080E45] font-bold" href="#">Eventos</a></li>
                        <hr class="my-[10px]">
                        <li class=""><a class="text-[13px] text-[#080E45] font-bold" href="#">Projetos de Extensão</a></li>
                    </ul>
                    {{--  --}}
                    <input class="w-[100%] mb-[10px] mt-[20px] outline-none h-[30px] rounded-[5px] bg-[#ffffff] pl-[10px]" type="text">
                </div>
            </div>
        </div>
    </div>
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
                            <li class="inline-block ml-[10px]"><a href=""> <img class="w-[25px] h-[25px]" src="/img/brasil.png" alt=""></a></li>
                            <li class="inline-block ml-[10px]"><a href=""> <img class="w-[25px] h-[25px]" src="/img/eua.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] h-[60px] inline-block">
                    {{--  --}}
                    <div class="w-[95%] inline-block float-left">
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
                                <li><b><a href="#importacncia_projeto3">Importância</a></b></li>
                                <li><b><a href="#objetivo">Objetivo</a></b></li>
                                <li><b><a href="#titulo_projeto3_pesquisa">Métodos</a></b></li>
                                <li><b><a href="#text_projeto3_resultado">Resultados</a></b></li>
                                <li><b><a href="#pesquisadores">Pesquisadores</a></b></li>
                                <li><b><a href="#caixa_info">Materiais de divulgação</a></b></li>
                            </ul>
                        </nav>
                    </div>
                    {{--  --}}
                    <div class="w-[5%] inline-block float-left">
                        {{--  --}}
                        <a href="{{ route('home.laire') }}"><img src="/img/avt_laire.png" id="mascot" class="w-[50px] ml-[40px] mt-[0px] cursor-pointer float-right"></a>
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
                <div id="pat.footer" class="w-[100%] rounded-[10px] mt-[30px] inline-block bg-[#ffffff] p-[20px]">
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
                        <li class="inline-block mr-[50px]"><a href=""><p class="text-[#ffffff] text-[16px]">Laire</p></a></li>
                        {{--  --}}
                        <li class="inline-block mr-[50px]"><a href=""><p class="text-[#ffffff] text-[16px]">RespiraSaúde</p></a></li>
                        {{--  --}}
                        <li class="inline-block mr-[50px]"><a href=""><p class="text-[#ffffff] text-[16px]">Blog</p></a></li>
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
                    <p class="text-[#ffffff] text-[16px]">Todos os direitos reservados a Laire | UFRN &copy; 2023</p>
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
