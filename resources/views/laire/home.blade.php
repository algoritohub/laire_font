@extends('laire.layout.main')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

@php
    // FUNÇÃO FONT
    $session_font = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }

    // RECUPERAR INFORMAÇÕES DO PESQUISADOR
    @$info_pesquisador = $_GET['info'];
@endphp
{{--  --}}
<section id="topo_laire_mobile" class="w-[100%] bg-[#080E45] mt-[80px] inline-block">
    {{--  --}}
    <div class="w-[90%] inline-block mx-[5%]">
        {{--  --}}
        <div id="box_laire_a" class="w-[60%] float-left inline-block h-[600px] ">
            {{--  --}}
            <p id="text_box_a" class="uppercase text-[#080E45] text-[65px] font-bold mt-[180px] leading-[72px]">Avaliação, Intervenção e Educação em Saúde Respiratória</p>
        </div>
        {{-- MASCOTE --}}
        <div id="box_laire_b" class="w-[40%] float-left inline-block h-[600px] pl-[60px]">
            {{--  --}}
            <p id="sub_text_box_a" class="text-[#080E45] text-[20px] leading-[24px] pl-[20px] border-l-[4px] text-justify border-l-[#080E45] mt-[350px]">Atividades de ensino, pesquisa e extensão relacionadas às doenças respiratórias agudas e crônicas que comprometem a qualidade de vida de crianças, adolescentes e adultos</p>
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
        <a href="{{ route('feed_noticia') }}"><button id="bt_feed" class="px-[60px] h-[40px] rounded-[100px] bg-[#080E45] text-[14px] text-[#ffffff]">Mais Notícias</button></a>
    </center>
</div>

{{-- NOVO BLOCO LAIRE --}}
<section class="w-[100%] mt-[50px] inline-block">
    {{--  --}}
    <div class="w-[100%] inline-block">
        {{--  --}}
        <div id="bloco_laire_a" style="background: linear-gradient(90deg, rgba(238,238,238,1) 27%, rgba(255,255,255,1) 27%);" class="w-[50%] inline-block float-left pl-[80px] h-[600px]">
            {{--  --}}
            <div id="container_inner_laire" class="w-[100%] inline-block">
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <ul class="mt-[20px]">
                        <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
                {{--  --}}
                <div id="box_libra" style="display: none;" class="w-[100%] inline-block h-[400px] mt-[10px] bg-[orange]"></div>
                {{--  --}}
                <div id="box_audio" class="w-[100%] inline-block h-[400px] mt-[10px] bg-[purple]"></div>
            </div>
        </div>
        {{--  --}}
        <div id="bloco_laire_b" class="w-[50%] inline-block float-left h-[auto] px-[80px]">
            {{--  --}}
            <div id="container_inner_laire" class="w-[100%] inline-block">
                {{--  --}}
                <p class="text-[25px] font-bold mb-[40px] mt-[80px] pl-[20px] border-l-[3px] leading-[26px] border-l-[#00FF8C]">Um pouco sobre o LAIRE</p>

                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">O Laboratório de Avaliação e Intervenção Respiratória (LAIRE) está localizado no Departamento de Fisioterapia da Universidade Federal do Rio Grande do Norte (UFRN) e vinculado ao Programa de Pós-Graduação em Fisioterapia (PPGFIS). Fazem parte do LAIRE um grupo de pesquisadores composto por docentes, colaboradores externos, alunos de iniciação científica, alunos de mestrado e doutorado.</p>

                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">Desenvolvemos atividades de ensino, pesquisa e extensão. Estas atividades envolvem as mais diversas doenças respiratórias agudas e crônicas onde destacamos a asma. No LAIRE têm sido desenvolvidos estudos com apoio do CNPq, Ministério da Saúde e Ministério da Ciência, Tecnologia e Inovações.</p>

                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">Os estudos desenvolvidos envolvem inovação científica e tecnológica e buscam soluções para melhorar a condição de saúde e qualidade de vida da população. O enfrentamento da pandemia da COVID-19 também tem sido o eixo central de algumas pesquisas e ações de extensão desenvolvidas pela equipe do LAIRE. Nas atividades de extensão temos ressaltado a importância da educação em saúde e trabalhado de forma muito intensa com este propósito.</p>

                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">O LAIRE através de suas redes sociais tem levado conteúdos de educação em saúde para milhares de pessoas visando a adesão da população às medidas de prevenção de doenças respiratórias agudas graves e o controle de doenças respiratórias crônicas.</p>

                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify text_base">Navegue neste portal para conhecer melhor nossa equipe, parceiros e pesquisas.</p>
            </div>
        </div>
    </div>
</section>
{{--  --}}
<section id="pesquisadores_bloco" class="w-full mt-[20%]">
    <center>
        <p id="pesquisadores" class="font-bold text-[#212121] text-3xl border-b-4 w-44 pb-5">Equipe</p>
    </center>
    <div id="sub_bloco_pesq" class="w-[90%] mx-[5%] inline-block">
        <div class="w-[100%] mt-[50px] inline-block">
            @foreach ($pesquisadores as $pesquisador)
                <div id="card-laire-pesq" class="w-[23%] mb-[30px] inline-block mx-[1%] float-left">
                    <div class="w-[100%] h-[150px]">
                        <center>
                            <div style="background-image: url(/img/pesquisadores/{{ $pesquisador->imagem }}); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] bg-[#eeeeee] zoom-img"></div>
                        </center>
                    </div>
                    <div class="w-[100%] mt-[20px] h-[180px]">
                        <center>
                            <div class="w-[100%] h-[80px]">
                                <p class="font-bold leading-[17px]">{{ $pesquisador->nome }}</p>
                                <p class="uppercase mt-[5px] font-size: 12px;">{{ $pesquisador->referencia }}</p>
                            </div>
                            <a href="{{ route('pesquisadores.laire', ['id' => $pesquisador->id]) }}"><button class="border-[1px] border-[#212121] py-[10px] px-[15px] rounded-[5px] uppercase font-bold text-[13px] mt-[20px] motion-btn">✚ Ver mais</button></a>
                        </center>
                    </div>
                </div>
            @endforeach
        </div>
        @if (isset($modal_usuario) AND !empty($modal_usuario))
        {{-- MODAL --}}
        <div class="modal_pesquisadores_laire">
            <div class="w-[1000px] bg-[#ffffff] h-[550px] mx-auto mt-[5%] p-[50px] rounded-[20px]">
                {{-- linha header --}}
                <div class="w-[100%] inline-block">
                    <div class="w-[70%] inline-block float-left">
                        <p class="text-[20px] font-bold leading-[24px]">
                            {{ $modal_usuario->nome }}
                        </p>
                        <p class="uppercase mt-[3px]">{{ $modal_usuario->referencia }}</p>
                    </div>
                    <div class="w-[30%] inline-block float-left">
                        <a href="{{ route('home.laire') }}"><p class="float-right cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{-- line body --}}
                <div class="w-[100%] inline-block">
                    <center>
                        <div id="img-modal-laire" style="background-image: url(/img/pesquisadores/{{ $modal_usuario->imagem }}); background-size: 100%;" class="w-[150px] mt-[-20px] h-[150px] rounded-[100px] border-[1px] border-[#cdcdcd] bg-[#cdcdcd]"></div>
                    </center>
                    <div class="w-[100%] h-[160px] mt-[20px] overflow-scroll inline-block">
                        <p class="leading-[19px]">{!! $modal_usuario->descricao !!}</p>
                    </div>
                </div>
                {{-- links --}}
                <div class="w-[100%] inline-block">
                    <center>
                        <ul class="mt-[30px]">
                            @if (!empty($modal_usuario->link_lattes))
                            <li class="inline-block"><a href="{{ $modal_usuario->link_lattes }}" target="_blank"><button class="w-[150px] h-[40px] rounded-[100px] bg-[#080E45] text-[#ffffff] font-bold cur-btn">LATTES</button></a></li>
                            @endif

                            @if (!empty($modal_usuario->link_orcid))
                            <li class="inline-block"><a href="{{ $modal_usuario->link_orcid }}" target="_blank"><button class="w-[150px] h-[40px] rounded-[100px] bg-[#080E45] text-[#ffffff] font-bold cur-btn">ORCID</button></a></li>
                            @endif
                        </ul>
                    </center>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<div id="bk-"></div>
{{-- BLOCO DE EVENTOS --}}
<section  class="w-[100%] my-[10%] inline-block">

    {{--  --}}
    <div class="w-[90%] mx-[5%] inline-block">
        {{--  --}}
        <p class="text-center font-bold text-[30px]">Eventos</p>

        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <ul style="display: none;" class="float-right">
                <li class="inline-block ml-[10px]"><button class="px-[30px] rounded-[100px] h-[40px] bg-[blue] text-[#ffffff] font-bold text-[12px]">Encerrrados</button></li>
                <li class="inline-block ml-[10px]"><button class="px-[30px] rounded-[100px] h-[40px] bg-[blue] text-[#ffffff] font-bold text-[12px]">Futuros</button></li>
            </ul>
            {{--  --}}
        </div>
        {{--  --}}
        <div class="w-full mt-4 flex flex-wrap">
            <div  class="w-full md:w-1/3 px-2 mb-4">
                <div style="background-image: url('/img/E-book.png'); background-size: cover; background-position: center;" class="w-full rounded-lg h-48 md:h-64 bg-gray-300"></div>
                <a href="{{ route('banner_ebook', ['tipo' => 'ebook' ]) }}">
                    <p class="text-center uppercase text-sm font-bold mt-2">Ver mais</p>
                </a>
            </div>
            <div class="w-full md:w-1/3 px-2 mb-4">
                <div style="background-image: url('/img/Palestras.png'); background-size: cover;background-position: center;" class="w-full rounded-lg h-48 md:h-64 bg-gray-300"></div>
                <a href="{{ route('banner_ebook', ['tipo' => 'palestras' ]) }}">
                    <p class="text-center uppercase text-sm font-bold mt-2">Ver mais</p>
                </a>
            </div>
            <div class="w-full md:w-1/3 px-2 mb-4">
                <div style="background-image: url('/img/Plano_de_acao.png'); background-size: cover; background-position: center right;" class="w-full rounded-lg h-48 md:h-64 bg-gray-300 mr-2"></div>
                <a href="{{ route('banner_ebook', ['tipo' => 'plano' ]) }}">
                    <p class="text-center uppercase text-sm font-bold mt-2">Ver mais</p>
                </a>
                <div id="botao_youtube-" ></div>
            </div>


        </div>

        {{-- MODAL MASTER --}}
        @if (isset($evento_cat) AND !empty($evento_cat))
        {{--  --}}
        <div class="modal_master_eventos">
            {{--  --}}
            <div style="background-image: url('/img/fundo_ARlindo.png'); background-size: 100%;" class="w-[1000px] mt-[10%] shadow-lg bg-[#ffffff] p-[40px] h-[500px] rounded-[20px] mx-auto">
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[50%] inline-block float-left">
                        {{--  --}}
                        <p class="text-[15px] text-[#ffffff] font-bold uppercase">convivendo com a asma</p>
                    </div>
                    {{--  --}}
                    <div class="w-[50%] inline-block float-left">
                        {{--  --}}
                        <a href="{{ route('home.laire') }}"><p class="float-right text-[#ffffff]">✕</p></a>
                    </div>
                </div>
                {{-- CONTEÚDO E-BOOK --}}
                @if ($evento_cat == "ebook")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <p class="text-[30px] uppercase text-[#ffffff] font-bold">e-book</p>
                    {{--  --}}
                    <center>
                        {{--  --}}
                        <button class="px-[40px] h-[40px] rounded-[100px] mt-[15%] bg-[#00FF8C] text-[#080E45] text-[12px] font-bold">Baixar e-book do evento</button>
                    </center>
                </div>
                @endif
                {{-- CONTEÚDO PALESTRA --}}
                @if ($evento_cat == "palestras")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <p class="text-[30px] uppercase text-[#ffffff] font-bold">palestras</p>
                    {{--  --}}
                    <div class="w-[100%] bg-[#ffffff] overflow-scroll pt-[30px] px-[15px] rounded-[20px] mt-[30px] h-[300px] inline-block">
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=mpR7Fm32ZvQ&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=14" target="_blank"><div style="background-image: url('/img/8- (3).png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=3wJlQvYEdf4&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=8" target="_blank"><div style="background-image: url('/img/5.png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=88udAKuAheM&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=9" target="_blank"><div style="background-image: url('/img/8- (1).png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=gXkLtt2tHlw&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=12" target="_blank"><div style="background-image: url('/img/8- (2).png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=5VjgO_nnJE4&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=11" target="_blank"><div style="background-image: url('/img/10-1.png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=bMoK0r7Civo&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=5" target="_blank"><div style="background-image: url('/img/3 (2).png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=LDCoCah3wTI&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=6" target="_blank"><div style="background-image: url('/img/4 (2).png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=cSkDbXbWi4I&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=7" target="_blank"><div style="background-image: url('/img/6 (2).png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=ok92HQosYsw&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=15" target="_blank"><div style="background-image: url('/img/7.png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=YrN_qAF-OO0&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=13" target="_blank"><div style="background-image: url('/img/12.png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=hddSibrnSrM&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=10" target="_blank"><div style="background-image: url('/img/9 (2).png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=GzcvhjbWHLU&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=1" target="_blank"><div style="background-image: url('/img/1.png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>
                        {{--  --}}
                        <a href="https://www.youtube.com/watch?v=oSfq8CsvKJs&list=PLbjVywU2RQGKscmPaR0NOODu_dW0Nb2aH&index=4" target="_blank"><div style="background-image: url('/img/2 (2).png'); background-size: 100%;" class="w-[30.3%] mx-[1.5%] float-left mb-[30px] h-[150px] rounded-[10px]"></div></a>

                    </div>
                </div>

                @endif
                {{-- CONTEÚDO PLANO DE AÇÃO --}}
                @if ($evento_cat == "plano")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <p class="text-[30px] uppercase text-[#ffffff] font-bold">plano de ação</p>
                    {{--  --}}
                    <center>
                        {{--  --}}
                        <button class="px-[40px] h-[40px] rounded-[100px] mt-[15%] bg-[#00FF8C] text-[#080E45] text-[12px] font-bold">Baixar nosso plano de ação</button>
                    </center>

                </div>
                @endif
            </div>
        </div>
        @endif
    </div>
</section>


{{--  --}}
<section  class="w-[92%] inline-block mx-[4%] mb-[60px]">
    {{--  --}}
    <div  class="w-[100%]">
        {{--  --}}
        <div id="botao_facebook"  class="w-[30.3%] rounded-[20px] h-[200px] mx-[1.5%] float-left bg-[silver]">
            <center ><a  href="https://www.facebook.com/laire.lab" target="_blanck" ><button id="bt2-1" class="px-[40px] mt-[40%] bg-[#00FF8C] rounded-[100px] h-[50px] text-[#ffffff] font-bold text-[12px]"><img class="w-[18px] float-left mr-[10px]" src="/img/facebook.png"/> <p class="text-[#ffffff] float-left">Facebook</p></button></a><center>
        </div>
        {{--  --}}
        <div id="botao_instagram" class="w-[30.3%] rounded-[20px] h-[200px] mx-[1.5%] float-left bg-[silver]  ">
            <center><a href="https://www.instagram.com/laire_ufrn/?hl=pt" target="_blanck"><button id="bt2-1" class="px-[40px] mt-[40%] bg-[#00FF8C] rounded-[100px] h-[50px] text-[#ffffff] font-bold text-[12px]"><img class="w-[18px] float-left mr-[10px]" src="/img/instagram.png"/> <p class="text-[#ffffff] float-left">Instagram</p></button></a>
            </center>
        </div>
        {{--  --}}
        <div id="botao_youtube" class="w-[30.3%] rounded-[20px] h-[200px] mx-[1.5%] float-left bg-[silver]">
            <center><a href=" https://www.youtube.com/@laireufrn7670" target="_blank" ><button id="bt2-1" class="px-[40px] mt-[40%] bg-[#00FF8C] rounded-[100px] h-[50px] text-[#080E45] font-bold text-[12px]"> <img class="w-[18px] float-left mr-[10px]" src="/img/youtube.png"/> <p class="text-[#ffffff] float-left">Youtube</p></button></a></center>
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
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/Logo UFRN.jpg" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/8.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/6.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/3.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[410px]" src="/img/mcti.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[610px]" src="/img/10.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[310px]" src="/img/logomarcaproex_oficial.jpg" alt=""></li>
            </ul>
        </center>
    </div>
</section>
@endsection

