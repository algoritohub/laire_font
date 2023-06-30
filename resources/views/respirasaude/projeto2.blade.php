@extends('respirasaude.layout.main_projeto2')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

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

@if ($bloco_principal)
{{-- NEW BLOCK PRIME --}}
<section id="section-master-prime" class="w-[100%] inline-block mt-[100px]">
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
                <div id="moldure-prime" class="w-[100%] inline-block rounded-[20px]">
                    {{--  --}}
                    <img id="box_audio_home" class="w-[100%] rounded-[20px]" src="/img/conteudo/{{ $bloco_principal[0]->imagem }}" />
                    <video id="box_libra_home" style="display: none; border-radius: 20px;" id="video-missão" src="/videos/resumo_pesquisa_2.wmv" controls="controls"></video>
                </div>
                {{-- AUDIO --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="audio_libra_home" style="display: none;" class="inline-block float-left mt-[20px]">
                        {{--  --}}
                        <audio controls="controls">
                            <source src="/mp3/Resumo pesquisa 2.mp3" type="audio/mp3" />
                            seu navegador não suporta HTML5
                        </audio>
                    </div>
                </div>
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

                <p class="text-[30px] leading-[30px] float-right text-right font-bold text-[#080E45]">{{ $bloco_principal[0]->titulo }}</p>

                <div class="w-[100%] mt-[40px] inline-block">
                    @foreach ($explode_texto as $paragrafo)
                    <p id="text_projeto3" class="mb-[10px] text-justify text-[{{ $numb_font }}px]">{{ $paragrafo }}.</p>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
</section>
@endif

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
            </div>
        </div>
    </div>
</section>

{{-- BLOCO DINAMICOS AQUI --}}
@if ($bloco_conteudo)

    @foreach ($bloco_conteudo as $bloco)

        @php
            $descricao_contt = strip_tags($bloco->descricao);
            $descricao_contt = mb_convert_encoding($descricao_contt, 'UTF-8', 'HTML-ENTITIES');
            $descricao_contb = explode('.', $descricao_contt);
        @endphp

        @if ($bloco->posicao == 1)
        {{-- BLOCO TIPO 1 --}}
        <section class="w-[100%] mt-[-5px] bg-[#fafafa] inline-block">
            {{--  --}}
            <div id="container-block" class="w-[100%] inline-block">
                {{--  --}}
                <div id="band_a_block" class="w-[50%] px-[80px] inline-block float-left">
                    {{--  --}}
                    <div id="container_inner_bloco2" class="w-[100%] inline-block">
                        {{--  --}}
                        <p id="texto_titulo_bloco2" class="text-[25px] font-bold mb-[20px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">{{ $bloco->titulo }}</p>

                        @foreach ($descricao_contb as $texto_paragrafo)
                        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_paragrafo }}.</p>
                        @endforeach
                    </div>
                </div>
                {{--  --}}
                <div id="band_b_block" class="w-[50%] inline-block float-left pr-[80px]">
                    {{--  --}}
                    <div id="container_inner_bloco2" class="w-[100%] inline-block">
                        {{--  --}}
                        <img class="img-public" src="/img/conteudo/{{ $bloco->imagem }}">
                    </div>
                </div>
            </div>
        </section>
        @elseif($bloco->posicao == 2)
        {{-- BLOCO EXEMPLO metodo --}}
        <section class="w-[100%] mt-[-5px] bg-[#f1f1f1] inline-block">
            {{--  --}}
            <div id="container-block" class="w-[100%] inline-block">
                {{--  --}}
                <div id="band_a_block" class="w-[50%] pl-[80px] float-left inline-block">
                    {{--  --}}
                    <div id="container_inner_bloco1" class="w-[100%] inline-block">
                        {{--  --}}
                        <img class="img-public" src="/img/conteudo/{{ $bloco->imagem }}">
                    </div>
                </div>
                {{--  --}}
                <div id="band_b_block" class="w-[50%] px-[80px] float-left inline-block">
                    <div id="importacncia_projeto2"></div>
                    {{--  --}}
                    <div id="container_inner_bloco1" class="w-[100%] inline-block">
                        {{--  --}}
                        <p id="titulo_bloco1" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">{{ $bloco->titulo }}</p>

                        @foreach($descricao_contb as $texto_paragrafo)
                        <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">{{ $texto_paragrafo }}.</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endforeach
@endif





{{-- ABAIXO SEGUE O BLOCO ONDE DEVE COLOCAR O CONTEUDO (COMO A PESQUISA FOI FEITA) --}}
{{-- ABAIXO SEGUE O BLOCO ONDE DEVE COLOCAR O CONTEUDO (COMO A PESQUISA FOI FEITA) --}}
{{-- ABAIXO SEGUE O BLOCO ONDE DEVE COLOCAR O CONTEUDO (COMO A PESQUISA FOI FEITA) --}}
{{-- ABAIXO SEGUE O BLOCO ONDE DEVE COLOCAR O CONTEUDO (COMO A PESQUISA FOI FEITA) --}}

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
                <p id="title-post" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">COMO A PESQUISA FOI FEITA</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Vamos lá, primeiro foi necessário entender quais são os aspectos que ajudam as pessoas a prevenir estas doenças. Isso é o que chamamos de <b>facilitadores de adesão às medidas de prevenção e controle!</b> </b>.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Mas, vocês concordam que também é importante entender quais são os aspectos que nos atrapalham na prevenção destas doenças? Isso é o que chamamos de <b>barreiras de adesão às medidas de prevenção e controle!</b></p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Esta pesquisa está sendo realizada em três etapas!</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">
                <ul>
                    <li><p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"> <b>1)</b> Realizamos uma revisão sistemática para identificar a partir dos resultados de muitos estudos, realizados em vários países do mundo, quais são as <b>barreiras e facilitadores </b>para a adesão das pessoas a medidas de prevenção e controle da COVID-19 e outras doenças respiratórias graves.</p></li>
                    <li><p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"> <b>2)</b> Estamos desenvolvendo um questionário para entender quais são os aspectos que facilitam ou atrapalham os brasileiros na prevenção de doenças respiratórias contagiosas. O nome deste questionário é ADHERE.</p></li>
                    <li><p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"> <b>3)</b> Vamos aplicar o questionário ADHERE em todo o Brasil e fazer um diagnóstico nacional para entender o atrapalha e o que ajuda os brasileiros na prevenção das doenças respiratórias contagiosas</p></li>
                </ul>
               </p>
               <!-- <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Você já ouviu falar em <b>pneumonia</b>, <b>tuberculose</b>, <b>H1N1</b>, <b>bronquiolite</b>, <b>influenza</b>, <b>coqueluche</b>, <b>COVID-19</b></p>-->
            </div>
        </div>
    </div>
</section>






o
{{-- PESQUISADORES--}}
<section  class="w-[100%] inline-block">
    {{--  --}}
    <div class="w-[95%] h-[600px] mx-[2.5%] my-[40px] inline-block">
        {{--  --}}
        <center>
            <p id="pesquisadores" class="font-bold text-[#212121] text-[30px] border-b-[1px] text-center pb-[20px]">Pesquisadores</p>
            {{--  --}}
            <div style="display: none;" class="w-[100%] inline-block">
                {{--  --}}
                <ul class="mt-[30px] ml-[20px]">
                    {{--  --}}
                    <li class="inline-block ml-[20px]"><button class="px-[30px] h-[40px] rounded-[100px] bg-[#05337c] text-[13px] text-[#ffffff]">Professor</button></li>
                    <li class="inline-block ml-[20px]"><button class="px-[30px] h-[40px] rounded-[100px] bg-[#05337c] text-[13px] text-[#ffffff]">Pesquisador intenacional</button></li>
                    <li class="inline-block ml-[20px]"><button class="px-[30px] h-[40px] rounded-[100px] bg-[#05337c] text-[13px] text-[#ffffff]">Aluno de iniciação científica</button></li>
                    <li class="inline-block ml-[20px]"><button class="px-[30px] h-[40px] rounded-[100px] bg-[#05337c] text-[13px] text-[#ffffff]">Aluno de mestrado</button></li>
                    <li class="inline-block ml-[20px]"><button class="px-[30px] h-[40px] rounded-[100px] bg-[#05337c] text-[13px] text-[#ffffff]">Aluno de doutorado</button></li>
                </ul>
            </div>
        </center>
        {{--  --}}
        <div class="w-[100%] mt-[70px] inline-block">
            @if($pesquisadores)
                @foreach ($pesquisadores as $pessoa)

                @php
                $id_pesqs = $pessoa->id;
                $pesquisa = Illuminate\Support\Facades\DB::select("SELECT * FROM conect_pesquisas WHERE pesquisa = 4 AND pesquisador = '$id_pesqs'");
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
                        <a href="{{ route('pesquisadores_projeto_2', ['id' => $pessoa->id]) }}"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                    </div>
                </div>
                @endif
                @endforeach
            @else
            <p class="text-center text-[20px] font-bold mt-[30px]">Sem pesquisadores para esse projeto!</p>
            @endif
        </section>

        {{-- MODAL --}}
        @if(isset($pesquisador_info) AND !empty($pesquisador_info))
        {{--  --}}
        <div class="modal_info_pesquisadores">
            {{--  --}}
            <div id="modal_pesq_laire" class="w-[1000px] p-[40px] mx-auto rounded-[20px] h-[500px] mt-[10%] shadow-lg bg-[#ffffff]">
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]">{{ $pesquisador_info->nome }}</p>
                        @if($pesquisador_info->categoria == "professor")
                        <p class="text-[13px] uppercase">Professor</p>
                        @elseif($pesquisador_info->categoria == "pesquisador")
                        <p class="text-[13px] uppercase">Pesquisador</p>
                        @elseif($pesquisador_info->categoria == "aic")
                        <p class="text-[13px] uppercase">Aluno de Iniciação Científica</p>
                        @elseif($pesquisador_info->categoria == "am")
                        <p class="text-[13px] uppercase">Aluno de Mestrado</p>
                        @elseif($pesquisador_info->categoria == "ad")
                        <p class="text-[13px] uppercase">Aluno de Doutorado</p>
                        @endif
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="{{ route('projeto2') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div style="background-image: url('/img/pesquisadores/{{ $pesquisador_info->imagem }}'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <p class="leading-[17px] text-[14px] text-center mt-[30px]">{{ $descricao_info }}</p>
                </div>
                {{--  --}}
                @if(!empty($pesquisador_info->link_lattes) OR !empty($pesquisador_info->link_orcid))
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">

                        @if(!empty($pesquisador_info->link_lattes))
                        <li class="mr-[20px] inline-block"><a href="{{ $pesquisador_info->link_lattes }}" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        @endif

                        @if(!empty($pesquisador_info->link_orcid))
                        <li class="mr-[20px] inline-block"><a href="{{ $pesquisador_info->link_orcid }}"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                        @endif

                    </ul>
                    </center>
                </div>
                @endif
            </div>
        </div>
        @endif

        {{-- BANNER PRODUTOS --}}
        <section class="w-[100%] inline-block">
            {{--  --}}
           {{-- BANNER PRODUTOS --}}
        <section class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[90%] mx-[5%] inline-block">
                {{--  --}}
                <div id="banner-produtos" style="background-image: url(/img/banner.png); background-size: 100%; background-repeat: no-repeat;" class="w-[100%] rounded-[20px] h-[420px] inline-block">
                    <div class="w-[100%] h-[420px] inline-block">
                        <div class="w-[33%] h-[420px] inline-block float-left"></div>
                        <div class="w-[67%] h-[420px] inline-block float-left">
                            <div class="w-[100%] inline-block h-[300px]"></div>
                            <div class="w-[100%] inline-block h-[120px] mt-[-10px]">
                                <ul class="">
                                    <li class="inline-block mr-[20px]"><button id="video_produto" class="px-[20px] h-[40px] rounded-[10px] bg-[#ffffff] text-[15px] font-bold uppercase">Vídeo</button></li>
                                    <li class="inline-block mr-[20px]"><button id="podcst_produto" class="px-[20px] h-[40px] rounded-[10px] bg-[#ffffff] text-[15px] font-bold uppercase">Podcast</button></li>
                                    <li class="inline-block mr-[20px]"><button id="info_produto" class="px-[20px] h-[40px] rounded-[10px] bg-[#ffffff] text-[15px] font-bold uppercase">Infográfico</button></li>
                                    <li class="inline-block mr-[20px]"><button id="resumo_produto" class="px-[20px] h-[40px] rounded-[10px] bg-[#ffffff] text-[15px] font-bold uppercase">Resumo executivo</button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div style="display: none;" class="banner_produtos">
                {{--  --}}
                <div style="background: url(/img/fundo_ARlindo.png); background-size: 100%;" class="w-[1000px] mx-auto mt-[10%] p-[40px] h-[500px] rounded-[20px] shadow-lg bg-[#ffffff]">
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[70%] inline-block float-left">
                            {{--  --}}
                            <p class="text-[#ffffff] uppercase font-bold">Nosso resumo executivo</p>
                        </div>
                        {{--  --}}
                        <div class="w-[30%] inline-block float-left">
                            {{--  --}}
                            <p id="fechar_produto" class="float-right text-[#ffffff] cursor-pointer">✕</p>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="text-[#ffffff] text-[14px]">Resumo elaborado para que os profissionais da saúde, gestores a técnicos do Ministério da Saúde possam compreender os métodos, resultados e recomendações oriundas desta pesquisa. </p>
                        {{--  --}}
                        <center>
                            <a href="/ResumoExecutivo-LAIRE-1.pdf" target="blank_"><button class="w-[300px] h-[40px] rounded-[100px] mt-[30px] text-[12px] bg-[#00FF8C] font-bold text-[#080E45]">Baixar Resumo Executivo</button></a>
                        </center>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div style="display: none;" class="banner_produtos2">
                {{--  --}}
                <div style="background: url(/img/fundo_ARlindo.png); background-size: 100%;" class="w-[1000px] mx-auto mt-[10%] p-[40px] h-[500px] rounded-[20px] shadow-lg bg-[#ffffff]">
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[70%] inline-block float-left">
                            {{--  --}}
                            <p class="text-[#ffffff] uppercase font-bold">Nosso infográfico</p>
                        </div>
                        {{--  --}}
                        <div class="w-[30%] inline-block float-left">
                            {{--  --}}
                            <p id="fechar_info" class="float-right text-[#ffffff] cursor-pointer">✕</p>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="text-[#ffffff] text-[14px]">Este documento utiliza uma linguagem e formato acessível para resumir em uma única página os aspectos mais importantes da pesquisa. Este infográfico foi elaborado para que a comunidade entenda a pesquisa de forma rápida e simples. </p>
                        {{--  --}}
                        <center>
                            <a href="/ResumoExecutivo-LAIRE-1.pdf" target="blank_"><button class="w-[300px] h-[40px] rounded-[100px] mt-[30px] text-[12px] bg-[#00FF8C] font-bold text-[#080E45]">Baixar Infográfico</button></a>
                        </center>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div style="display: none;" class="banner_produtos1">
                {{--  --}}
                <div style="background: url(/img/fundo_ARlindo.png); background-size: 100%;" class="w-[1000px] mx-auto mt-[10%] p-[40px] h-[500px] rounded-[20px] shadow-lg bg-[#ffffff]">
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[70%] inline-block float-left">
                            {{--  --}}
                            <p class="text-[#ffffff] uppercase font-bold">Nosso podcast</p>
                        </div>
                        {{--  --}}
                        <div class="w-[30%] inline-block float-left">
                            {{--  --}}
                            <p id="fechar_produto1" class="float-right text-[#ffffff] cursor-pointer">✕</p>
                        </div>
                    </div>
                    {{--  --}}
                     {{--  --}}
                     <div class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="text-[#ffffff] text-[14px]">Aqui temos um bate papo descontraído, com uma linguagem muito simples. Ao ouvir esse podcast será possível entender como esta pesquisa foi feita e compreender melhor seus resultados. Esse podcast dispõe também de um vídeo com janela em libras para torná-lo ainda mais acessível.   </p>
                        {{--  --}}
                        <center>
                            <a href="/ResumoExecutivo-LAIRE-1.pdf" target="blank_"><button class="w-[500px] h-[350px] rounded-[100px]  text-[12px] bg-[] font-bold text-[#080E45]"><video src="/img/Videocast Versao Final Mesclado Menor780p - Libras.mp4" controls></video> </button></a>
                        </center>
                    </div>
                </div>
            </div>
            {{--  --}}
            <div class="modal_resumo">
                {{--  --}}
                <div style="background: url(/img/fundo_ARlindo.png); background-size: 100%;" class="w-[1000px] mx-auto mt-[10%] p-[40px] h-[500px] rounded-[20px] shadow-lg bg-[#ffffff]">
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[70%] inline-block float-left">
                            {{--  --}}
                            <p class="text-[#ffffff] uppercase font-bold">Resumo Sistemático</p>
                        </div>
                        {{--  --}}
                        <div class="w-[30%] inline-block float-left">
                            {{--  --}}
                            <p id="fechar_produto1" class="float-right text-[#ffffff] cursor-pointer">✕</p>
                        </div>
                    </div>
                    {{--  --}}
                </div>
            </div>
        </section>

        <section class="w-[100%] h-[600px] inline-block bg-[#ffffff]">
            {{--  --}}
            <div class="w-[90%] mx-[5%] mt-[10%] inline-block">
                {{--  --}}
                <center>
                    {{--  --}}
                    <ul>
                        <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/6.png" alt=""></li>
                        <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>
                        <li class="inline-block mx-[30px] my-[10px]"><img class="w-[250px]" src="/img/mcti.png" alt=""></li>
                        <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/Logo UFRN.jpg" alt=""></li>
                        <li class="inline-block mx-[30px] my-[10px]"><img class="w-[400px]" src="/img/10.png" alt=""></li>
                        <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/logomarcaproex_oficial.jpg" alt=""></li>
                        <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/LAIRE para fundo claro.png" alt=""></li>
                    </ul>
                </center>
            </div>
        </section>
@endsection
