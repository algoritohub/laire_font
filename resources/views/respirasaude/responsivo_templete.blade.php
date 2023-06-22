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
    }
</style>

<body>
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
                        <div id="shadow" class="w-[100%] px-[5%] float-left h-[50px] inline-block bg-[#212121]">
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
                                <ul class="w-[100%]">
                                    <div id="mixedSlider">
                                        {{-- ITENS --}}
                                        <div class="MS-content box_avalia_egg">
                                            <li class="item"><button>Missão</button></a></li>
                                            <li class="item"><button style="background-color: transparent;" id="cronicas">Doenças respiratórias crônicas</button></li>
                                            <li class="item"><button>Doenças respiratórias agudas</button></li>
                                            <li class="item"><button>Projetos</button></li>
                                            <li class="item"><button>Eventos</button></li>
                                            <li class="item"><button>Projetos de Extensão</button></li>
                                        </div>
                                        {{-- BUTTONS --}}
                                        <div class="MS-controls" style="margin-top: -30px; position: absolute;">
                                            <button class="MS-left"></button>
                                            <button class="MS-right"><img src="/img/angulo-direito.png"></button>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- SUBMENU --}}
    <header id="sub_cronicas" class="w-[100%] mt-[106px] fixed inline-block" style="display: none;">
        <div class="w-[90%] mx-[5%] h-[50px]">
            <ul class="mt-[12px] mr-[-10px] float-right">
                @foreach ($doencas_cronicas as $doenca_cronica)
                    {{--  --}}
                    <li class="inline-block ml-[30px]"><b><a id="look" class="text-[#080E45] text-[13px]" href="{{ route('doenca_cronica', ['id' => $doenca_cronica->id]) }}">{{ $doenca_cronica->nome }}</a></b></li>
                @endforeach
            </ul>
        </div>
    </header>
    {{-- SLIDE --}}
    <div style="margin-top: 5px; z-index: -10;" class="slider">
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




