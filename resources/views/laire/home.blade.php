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
            <div id="elementoAEsconder" style="z-index: 1; border-radius: 20px 0px 0px 20px; display: show;" class="w-[100%] cursor-pointer shadow-lg h-[100px] fixed mt-[150px] inline-block bg-[#ffffff]">
                {{--  --}}
                <div class="w-[40%] inline-block float-left">
                    {{--  --}}
                    <img src="/img/ARLINDO.png" class="w-[400px] float-left mt-[-100px] ml-[-170px]">
                    <div class="w-[270px] inline-block float">
                        {{--  --}}
                        <p class="text-[20px] text-[#212121] font-bold mt-[15px] ml-[-70px]">Já conhece o ARlindo? </p>
                        <p id="modal_in_laire" class="text-[14px] text-[#212121] leading-[14px] mt-[5px] ml-[-70px]">Clique e saiba mais sobre nosso assistente de acessibilidade</p>
                    </div>
                </div>
            </div>
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
@php
    // CONEXÃO COM BANCO
    // $info_doenca = Illuminate\Support\Facades\DB::select("SELECT * FROM pesquisadors");
    // $conta_pesqs = $info_doenca;
@endphp
{{--  --}}
<section id="pesquisadores_bloco" class="w-[100%] mt-[50px] inline-block">
    {{--  --}}
    <center>
        <p id="pesquisadores" class="font-bold text-[#212121] text-[30px] border-b-[4px] w-[200px] pb-[20px]">Equipe</p>
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
            <a href="?info=amanda#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="amanda" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Amanda Quirino</p>

                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=karla#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="karla" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Karla Morganna</p>
                {{--  --}}
                <p class="text-[13px] text-center">FACISA/UFRN,UEPB,CBI of Miami</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=ivan#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="ivan" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Ivan Daniel</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=joubert#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="joubert" class=" w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Joubert Vitor </p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=valbny#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="valbny" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Válbny Morais</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=gabriela#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="gabriela" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Gabriela Chaves</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFR,UFMG</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=vitoria#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="vitoria" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Vitória Jéssica</p>
                {{--  --}}
                <p class="text-[13px] text-center">HUOL/UFRN,COFFITO/ASSOBRAFIR</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=sabrina#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="sabrina" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Sabrina</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=luana#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="luana" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Luana Moura</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=thayla#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="thayla" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Thayla Santino</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN,ASSOBRAFIR/COFFITO</p>
            </div>
            </a>
            {{--  --}}
            <a href="?info=juliana#pesquisadores">
            <div id="box_pesq" class="w-[18%] mx-[1%] mb-[30px] float-left">
                {{--  --}}
                <div id="juliana" class="w-[150px] h-[150px] mb-[10px] bg-[#212121] mx-auto rounded-[100px] transform hover:scale-110 transition duration-500">

                </div>
                {{--  --}}
                <p class="text-[16px] font-bold text-center">Juliana Souza</p>
                {{--  --}}
                <p class="text-[13px] text-center">UFRN</p>
            </div>
            </a>
        </div>
    </div>
    {{-- MODAL INFO PESQUISADORES --}}
    @if (isset($info_pesquisador) AND !empty($info_pesquisador))
    {{--  --}}
    <div class="modal_info_pesquisadores">
        {{--  --}}
        <div id="modal_pesq_laire" class="w-[1000px] p-[40px] mx-auto h-[500px] rounded-[20px] mt-[10%] shadow-lg bg-[#ffffff]">
            {{-- Amanda Quirino --}}
            @if ($info_pesquisador == "amanda")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]">Amanda Quirino</p>
                        <p class="font-bold leading-[13px] text-[13px]"> Colaboradora em projetos de pesquisa e extensão</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Amanda Quirino.jpg'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-center mt-[0px]">
                            Amanda Quirino é graduanda em Fisioterapia pela Universidade Federal do Rio Grande do
                            Norte. É técnica em informática formada pelo Instituto Federal de Educação, Ciência e
                            Tecnologia do Rio Grande do Norte. Contribui como colaboradora em projetos de pesquisa
                            e extensão na área de Avaliação e Intervenção em Fisioterapia Respiratória. Participa do
                            projeto de Iniciação Científica na área de Intervenção e Análise do Movimento na
                            Fisioterapia Neurofuncional e atualmente também participa do projeto de extensão AGruPar
                            (Assistência Fisioterapêutica em Grupo para Indivíduos com Doença de Parkinson).
                        </p>
                    </div>
                </div>
                 {{--  --}}
                 <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href="http://lattes.cnpq.br/9863112397601600"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href="ttps://orcid.org/0000-0002-9034-0812"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- Karla Morganna --}}
            @if ($info_pesquisador == "karla")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]">Karla Morganna</p>
                        <p class="font-bold leading-[13px] text-[13px]"></p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Karla Morganna.jpeg'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[0px]">Karla Morganna é Professora Titular do Departamento de Fisioterapia e do Programa de Pós-Graduação em Fisioterapia da Universidade Federal do Rio Grande do Norte. Possui títulos de Mestrado e Doutorado em Ciências da Saúde obtidos no Programa de Pós-Graduação em Ciências da Saúde pela Universidade Federal do Rio Grande do Norte. Realizou Pós-Doutorado na Universidade de Massachusetts-Lowell, MA - USA. Coordena projetos de pesquisa na área de Avaliação e Intervenção em Fisioterapia Respiratória, desenvolvimento, tradução, adaptação transcultural e avaliação das propriedades psicométricas de instrumentos de medida em saúde, desenvolve revisões sistemáticas em colaboração com a Cochrane e coordena projetos de inovação científica e tecnológica em saúde.
                        </p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href=""><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href=""><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- Ivan Daniel --}}
            @if ($info_pesquisador == "ivan")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]">Ivan Daniel</p>
                        <p class="font-bold leading-[13px] text-[13px]">Professor colaborador</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Ivan Daniel.jpg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[0px]">Possui Graduação em Fisioterapia pela Universidade Federal do Rio Grande do Norte (1994-1999), Especialização em Fisioterapia Respiratória pela Universidade Federal de São Paulo (2000-2001), Especialização em Fisiologia do Exercício pela Universidade Federal de São Paulo (2003), Especialista em Terapia Intensiva Adulto pela ASSOBRAFIR/COFFITO (2015), Mestrado em Ciências pelo Programa da Cardiologia da Universidade Federal de São Paulo (2008-2009) e Doutorado em Fisioterapia pelo Programa de Pós-Graduação em Fisioterapia da Universidade Federal do Rio Grande do Norte (2014-2017). Foi Professor da Especialização em Fisioterapia Respiratória da Universidade Federal de São Paulo (2001-2008), Professor Assistente do Centro Universitário São Camilo (2003-2008) e Professor Assistente do Centro Universitário de João Pessoa (2008). Atualmente é Professor Adjunto do Departamento de Fisioterapia da Universidade Federal do Rio Grande do Norte. Tem experiência na área de Fisioterapia, com ênfase em Fisioterapia Cardiorrespiratória, atuando principalmente nos seguintes temas: treinamento físico, capacidade funcional, qualidade de vida e suporte ventilatório.
                        </p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href=""><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href=""><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- NOME DO PESQUISADOR --}}
            @if ($info_pesquisador == "joubert")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]"> Joubert Vitor de Souto Barbosa</p>
                        <p class="font-bold leading-[13px] text-[13px]"> Aluno de doutorado</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Joubert Vitor .JPG'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[0px]">Joubert Vitor de Souto Barbosa, Fisioterapeuta pelo Centro Universitário Unifacisa, Possui
                        pós-graduação em Fisioterapia em terapia intensiva adulto e pediátrica pelo Centro
                        Universitário Unifacisa, Mestre em Fisioterapia pela Universidade Federal do Rio Grande do
                        Norte e atualmente é doutorando no Programa de Pós-graduação em Fisioterapia também
                        pela Universidade Federal do Rio Grande do Norte. Desenvolve atividades de pesquisa e
                        extensão no Laboratório de Avaliação e Intervenção em Fisioterapia Respiratória
                        (LAIRE/UFRN), voltados à área de adaptação transcultural e avaliação das propriedades
                        psicométricas de instrumentos de medida em saúde. </p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href=" http://lattes.cnpq.br/3554788662850733"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <!--<li class="mr-[20px] inline-block"><a href="LINKORCID"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>-->
                    </ul>
                    </center>
                </div>
            @endif
            {{-- PRÓXIMO PESQUISADOR PESQUISADOR --}}
            @if ($info_pesquisador == "valbny")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]"> Válbny Júlia Fernandes de Morais</p>
                        <p class="font-bold leading-[13px] text-[13px]"> Bolsista de Projeto de pesquisa</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Válbny Morais.jpeg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[0px]">Válbny Júlia é aluna da graduação de Fisioterapia na UFRN, atualmente irá começar o 6°
                        período. Participa como bolsista de projetos de pesquisa na área de Avaliação e
                        Intervenção em Fisioterapia Respiratória, como também de vários projetos de extensão na
                        educação em Saúde, rodas de TCI e etc, projeto de iniciação científica em controle postural
                        em pessoas idosas com vestibulopatias crônicas.
                        </p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href="https://lattes.cnpq.br/6418810116793515"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href="https://orcid.org/0000-0002-6785-2369"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- PRÓXIMO PESQUISADOR PESQUISADOR --}}
            @if ($info_pesquisador == "gabriela")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]"> Gabriela Chaves</p>
                        <p class="font-bold leading-[15px] text-[15px]"> Bolsista de IC</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Gabriela Chaves.jpg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[0px]">Gabriela Chaves, fisioterapeuta formada pela UFRN. Mestrado em Fisioterapia pela UFRN,
                        Doutorado em Ciências da Reabilitação pela UFMG. Pós doutorado em dor e
                        envelhecimento pela York University (Toronto/Canadá). Atualmente trabalha como
                        pesquisadora na empresa Myant Inc. (Toronto/Canadá).
                        Colaboradora nas Revisões Sistemáticas e metanálises na área de avaliação e intervenção
                        em Fisioterapia respiratória. </p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href="http://lattes.cnpq.br/7725252810522161"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href="https://orcid.org/0000-0002-7737-8015"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- PRÓXIMO PESQUISADOR PESQUISADOR --}}
            @if ($info_pesquisador == "vitoria")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]"> Vitória Jéssica Teixeira Dantas Brito</p>
                        <p class="font-bold leading-[13px] text-[13px]">Aluna de mestrado</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Vitória Jéssica.jpg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[0px]">Vitória Jéssica é Fisioterapeuta formada pela Universidade Federal do Rio Grande do Norte
                        e aluna de mestrado do Programa de Pós-Graduação em Fisioterapia da Universidade
                        Federal do Rio Grande do Norte. É Pós-Graduada em Atenção à Saúde da Criança pela
                        Residência Multiprofissional em Saúde, formada pelo Hospital Universitário Onofre Lopes
                        (HUOL/UFRN) e Especialista em Terapia Intensiva Pediátrica e Neonatal concedido pelo
                        Conselho Federal de Fisioterapia e Terapia Ocupacional/ Associação Brasileira de
                        Fisioterapia Respiratória, Fisioterapia Cardiovascular e Fisioterapia em Terapia Intensiva
                        (COFFITO/ASSOBRAFIR). Participa como colaboradora de projetos de pesquisa e
                        extensão na área de Avaliação e Intervenção em Fisioterapia Respiratória,
                        desenvolvimento, tradução, adaptação transcultural e avaliação das propriedades
                        psicométricas de instrumentos de medida em saúde. </p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href=" http://lattes.cnpq.br/6942533313733956"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href="https://orcid.org/0000-0002-7593-4807"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- PRÓXIMO PESQUISADOR PESQUISADOR --}}
            @if ($info_pesquisador == "sabrina")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]"> Sabrina da Silva Teixeira</p>
                        <p class="font-bold leading-[13px] text-[13px]"> Aluna de IC</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Sabrina.jpeg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[0px]">Sabrina da Silva Teixeira é graduanda em Fisioterapia pela Universidade Federal do Rio
                        Grande do Norte. É técnica em eletrotécnica formada pelo Instituto Federal de Educação,
                        Ciência e Tecnologia do Rio Grande do Norte.</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href="http://lattes.cnpq.br/4590004464040950"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href=" https://orcid.org/0000-0003-2815-5891"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- PRÓXIMO PESQUISADOR PESQUISADOR --}}
            @if ($info_pesquisador == "luana")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]">Luana Beatriz de Moura Freitas</p>
                        <p class="font-bold leading-[13px] text-[13px]">bolsista de IC</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Luana Moura.JPG'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[0px]">Luana Moura é discente de Fisioterapia na Universidade Federal do Rio Grande do Norte. É
                        técnica em Logística formada pelo Instituto Federal de Educação, Ciência e Tecnologia do
                        Rio Grande do Norte. Possui interesse nas áreas de fisioterapia cardiorrespiratória,
                        pediátrica e de neonatologia. Atualmente participa como bolsista de iniciação científica e
                        bolsista voluntária de extensão na área de Avaliação e Intervenção em Fisioterapia
                        Respiratória.</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href=" http://lattes.cnpq.br/4658310550097283"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href=" https://orcid.org/0000-0003-2815-5891
                            "><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- PRÓXIMO PESQUISADOR PESQUISADOR --}}
            @if ($info_pesquisador == "thayla")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]">Thayla Amorim Santino</p>
                        <p class="font-bold leading-[13px] text-[13px]"> Colaboradora ou Professora Colaboradora</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Thayla Santino.jpg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[0px]">Thayla Amorim Santino é fisioterapeuta formada pela Universidade Estadual da Paraíba,
                        especialista em Fisioterapia Respiratória (ASSOBRAFIR/COFFITO) e em Informática em
                        Saúde pela Universidade Federal de São Paulo, mestre e doutora pelo Programa de Pós-Graduação em Fisioterapia pela Universidade Federal do Rio Grande do Norte. Atualmente
                        é professora do Departamento de Fisioterapia da Universidade Estadual da Paraíba e
                        pesquisadora do Instituto de Pesquisa Professor Joaquim Amorim Neto. Participa como
                        colaboradora de projetos de pesquisa e extensão na área de Avaliação e Intervenção em
                        Fisioterapia Respiratória, desenvolvimento, tradução, adaptação transcultural e avaliação
                        das propriedades psicométricas de instrumentos de medida em saúde. Além disso, é
                        pesquisadora colaboradora no Person-Centred Health Informatics Research Lab vinculado à
                        McGill University (Montreal, Canadá)..</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href="http://lattes.cnpq.br/7500827180804952"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href=" https://orcid.org/0000-0002-5514-762X"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- PRÓXIMO PESQUISADOR PESQUISADOR --}}
            @if ($info_pesquisador == "juliana")
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div class="w-[80%] inline-block float-left">
                        {{--  --}}
                        <p class="font-bold leading-[23px] text-[20px]">Juliana Souza</p>
                        <p class="font-bold leading-[13px] text-[13px]">Aluna de mestrado</p>
                    </div>
                    {{--  --}}
                    <div class="w-[20%] inline-block float-left">
                        {{--  --}}
                        <a href="http://localhost:8000/#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <div id="imagem_pesq_mob" style="background-image: url('/img/Juliana Souza.jpg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                    {{--  --}}
                    <div id="caixa_descricao" class="w-[100%] mt-[30px] inline-block">
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-justify mt-[30px]">Juliana Souza é Fisioterapeuta formada pela Universidade Federal do Rio Grande do Norte
                        e aluna de mestrado do Programa de Pós-Graduação em Fisioterapia da Universidade
                        Federal do Rio Grande do Norte. É técnica em mecânica formada pelo Instituto Federal de
                        Educação, Ciência e Tecnologia do Rio Grande do Norte e Engenheira mecânica formada
                        pela Universidade Federal do Rio Grande do Norte. Participa como colaboradora de
                        projetos de pesquisa e extensão na área de Avaliação e Intervenção em Fisioterapia
                        Respiratória, desenvolvimento, tradução, adaptação transcultural e avaliação das
                        propriedades psicométricas de instrumentos de medida em saúde.</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <center>
                    {{--  --}}
                    <ul id="links_pesq_mob" class="mt-[20px]">
                        <li class="mr-[20px] inline-block"><a href="http://lattes.cnpq.br/3215502613957548"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                        <li class="mr-[20px] inline-block"><a href=" https://orcid.org/0000-0001-6486-2329"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                    </ul>
                    </center>
                </div>
            @endif
            {{-- PRÓXIMO PESQUISADOR PESQUISADOR --}}
        </div>
    </div>
    @endif
</section>
{{-- BLOCO DE INFORMATIVO --}}
<section style="display: none;" id="resultado" class="w-[100%] inline-block">
    {{--  --}}
    <center id="pesquisas">
        <p id="titulo_pesquisas" class="font-bold text-[#212121] text-[30px] border-b-[4px] w-[200px] pb-[20px]">Pesquisas</p>
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
    </div>
</section>

{{-- BLOCO DE INFORMATIVO --}}
<div id="bk-" ></div>
<section id="resultado" class="w-[100%] inline-block">
    {{--  --}}
    <center id="eventos.">
        <p  class="font-bold text-[#212121] text-[30px] border-b-[4px] w-[200px] pb-[20px]">Eventos</p>
    </center>
    {{--  --}}

    <div style="display: none;" class="w-[94%] mx-[3%] my-[10px] inline-block">
        {{--  --}}
        <ul class="float-right mr-[30px]">
            <li class="inline-block ml-[20px]"><button class="w-[120px] h-[40px] text-[#ffffff] bg-[blue]">Encerrados</button></li>
            <li class="inline-block ml-[20px]"><button class="w-[120px] h-[40px] text-[#ffffff] bg-[blue]">Futuros</button></li>
        </ul>
        <div id="bk."></div>
    </div>
    {{--  --}}
    <div class="w-[94%] mx-[3%] mt-[70px] inline-block">
        {{--  --}}
        <div id="bk1" class="w-[28%] rounded-[20px] mx-[2.5%] float-left">
            {{--  --}}
            <div style="border-radius: 0px 0px 20px 20px;" class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                {{--  --}}
                <div style="border-radius: 20px 20px 0px 0px;" id="img_eventos_1" class="w-[100%] h-[220px] bg-[gray] mx-auto"></div>
                {{--  --}}
                <div class="w-[100%] h-[130px] p-[20px] inline-block">
                    {{--  --}}
                    <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Relação entre a obesidade e a Asma</p>
                </div>
                {{--  --}}
            </div>
            {{--  --}}
            <div class="w-[100%] inline-block h-[150px]">
                {{--  --}}
                <p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p>
            </div>
        </div>
        {{--  --}}
        <div id="bk1" class="w-[28%] mx-[2.5%] float-left">
            {{--  --}}
            <div style="border-radius: 0px 0px 20px 20px;" class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                {{--  --}}
                <div style="border-radius: 20px 20px 0px 0px;" id="img_eventos_2"class="w-[100%] h-[220px] bg-[gray] mx-auto"></div>
                {{--  --}}
                <div class="w-[100%] h-[130px] p-[20px] inline-block">
                    {{--  --}}
                    <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Fisioterapia e Asma</p>
                </div>
                {{--  --}}
            </div>

            {{--  --}}
            <div class="w-[100%] inline-block h-[150px]">
                {{--  --}}
                <p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p>
            </div>
        </div>
        {{--  --}}
        <div id="bk1" class="w-[28%] mx-[2.5%] float-left">
            {{--  --}}
            <div style="border-radius: 0px 0px 20px 20px;" class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                {{--  --}}
                <div style="border-radius: 20px 20px 0px 0px;" id="img_eventos_3" class="w-[100%] h-[220px] bg-[gray] mx-auto"></div>
                {{--  --}}
                <div class="w-[100%] h-[130px] p-[20px] inline-block">
                    {{--  --}}
                    <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Adesão ao tratamento e sua repercussão no nível de controle da asma</p>
                </div>
                {{--  --}}
            </div>
            {{--  --}}
            <div class="w-[100%] inline-block h-[150px]">
                {{--  --}}
                <p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS ➜</p>
            </div>
        </div>
        
        {{-- BANNER CONVIVENDO --}}
        @if (isset($banner_conviv) AND !empty($banner_conviv))
        {{--  --}}
        <div class="banner_convivendo">
            {{--  --}}
            <div class="w-[1000px] mx-auto h-[400px] mt-[12%] p-[30px] rounded-[20px] bg-[#ffffff]">
                {{--  --}}
                <div class="w-[100%] inline-block">
                    {{--  --}}
                    <p class="float-right cursor-pointer">✕</p>
                </div>
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
            <center ><a  href="https://www.facebook.com/laire.lab" target="_blanck" ><button id="bt2-1" class="px-[40px] mt-[18%] bg-[#00FF8C] rounded-[100px] h-[50px] text-[#ffffff] font-bold text-[12px]"><img class="w-[18px] float-left mr-[10px]" src="/img/facebook.png"/> <p class="text-[#ffffff] float-left">Facebook</p></button></a><center>
        </div>
        {{--  --}}
        <div id="botao_instagram" class="w-[30.3%] rounded-[20px] h-[200px] mx-[1.5%] float-left bg-[silver]  ">
            <center><a href="https://www.instagram.com/laire_ufrn/?hl=pt" target="_blanck"><button id="bt2-1" class="px-[40px] mt-[18%] bg-[#00FF8C] rounded-[100px] h-[50px] text-[#ffffff] font-bold text-[12px]"><img class="w-[18px] float-left mr-[10px]" src="/img/instagram.png"/> <p class="text-[#ffffff] float-left">Instagram</p></button></a>
            </center>
        </div>
        {{--  --}}
        <div id="botao_youtube" class="w-[30.3%] rounded-[20px] h-[200px] mx-[1.5%] float-left bg-[silver]">
            <center><a href=" https://www.youtube.com/@laireufrn7670" target="_blank" ><button id="bt2-1" class="px-[40px] mt-[18%] bg-[#00FF8C] rounded-[100px] h-[50px] text-[#080E45] font-bold text-[12px]"> <img class="w-[18px] float-left mr-[10px]" src="/img/youtube.png"/> <p class="text-[#ffffff] float-left">youtube</p></button></a></center>
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
{{--  --}}
<div style="display: none;" class="modal_laire">
    {{--  --}}
    <div style="background: url(/img/fundo_ARlindo.png); background-size: 100%;" class="w-[800px] h-[550px] rounded-[20px] bg-[#ffffff] mx-auto mt-[10%] shadow-lg">
        {{--  --}}
        <div class="w-[100%] inline-block px-[30px]">
            {{--  --}}
            <div class="float-left w-[100%]">
                {{--  --}}
                <p id="modal_laire" class="float-right text-[16px] text-[#ffffff] mt-[30px] cursor-pointer">✕</p>
            </div>
        </div>
        {{--  --}}
        <div class="w-[100%] px-[40px] inline-block">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <p class="text-[20px] text-[#ffffff] text-center mt-[-30px] leading-[40px]">RespiraSaúde</p>
                {{--  --}}
                <p class="text-[30px] text-[#ffffff] text-center leading-[40px] font-bold">O ARlindo pode te ajudar!</p>
            </div>
            {{--  --}}
            <div class="w-[100%] mt-[40px] inline-block">
                {{--  --}}
                <div class="w-[100%] h-[350px] bg-[#212121]"></div>
            </div>
        </div>
    </div>
</div>
@endsection

