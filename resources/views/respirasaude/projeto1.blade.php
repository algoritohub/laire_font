@extends('respirasaude.layout.main')
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

{{-- SECTION --}}
<div class="w-[100%] inline-block">
    {{--  --}}
    <div class="w-[100%] mt-[100px] inline-block">
        {{--  --}}
        <div id="lado_a_projeto" style="background: linear-gradient(101deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 70%, rgba(0,212,255,1) 70%);" class="w-[60%] float-left inline-block h-[650px]">
            {{--  --}}
            <div id="container_a" class="w-[100%] pl-[80px] pt-[20px] inline-block">
                {{-- BASE IMAGEM/VIDEO --}}
                <div id="base_imagem" class="w-[100%] h-[450px] inline-block">
                    {{-- NAVEGATION ACESSIBILITY --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <ul>
                            <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                            <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                        </ul>
                    </div>
                    {{-- IMAGEM --}}
                    <div id="box_audio" class="w-[800px] bg-[yellow] h-[400px]"></div>
                    {{-- VÍDEO --}}
                    <div id="box_libra" style="display: none;" id="imagem_countainer" class="w-[800px] bg-[orange] h-[400px]"></div>
                </div>
                {{-- BASE LOGOS --}}
                <div id="base_logos" class="w-[100%] h-[150px] inline-block">
                    {{-- LOGOS --}}
                    <ul id="list_logos" class="my-[20px]">
                        {{--  --}}
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px] " src="/img/6.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px]" src="/img/4.png" alt=""></li>
                        <li class="inline-block mr-[80px] my-[10px]"><img class="w-[140px] " src="/img/LAIRE para fundo claro.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px]" src="/img/ppgfis.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px] " src="/img/9.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[250px] " src="/img/10.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_projeto" class="w-[40%] pr-[50px] float-left inline-block bg-[#00d4ff] h-[650px]">
            {{--  --}}
            <div id="container_b" class="w-[90%] mx-[5%] inline-block">
                {{--  --}}
                <p id="texto_titulo_projeto" class="text-[30px] mt-[70px] leading-[30px] float-right text-right font-bold text-[#080E45]"> Efeitos da atenção domiciliar para adultos com doenças respiratórias crônicas e síndrome pós-covid-19 na rotatividade hospitalar: uma revisão sistemática com metanálise</p>
                <p id="texto_projeto" class="text-right mt-[40px] float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Mundialmente as doenças respiratórias crônicas têm uma alta taxa de internação hospitalar e mortalidade. Alguns exemplos importantes dessas doenças são a Doença Pulmonar Obstrutiva Crônica (DPOC), a asma, a fibrose cística, a bronquiectasia e a fibrose pulmonar . Aqui no RespiraSaúde vamos falar, de uma forma muito simples, sobre a pesquisa que foi realizada pelo nosso time de pesquisadores em parceria com o Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq) e Ministério da Saúde (MS). Nesta pesquisa nós realizamos uma revisão sistemática com o objetivo de comparar os efeitos da assistência domiciliar com a assistência hospitalar para pessoas com doenças respiratórias crônicas.</p>
                <p id="texto_projeto" class="mt-[20px] text-right float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]"> </p>
            </div>
        </div>
    </div>
</div>

{{-- BLOCO EXEMPLO 2 --}}
<section class="w-[100%] mt-[-5px] inline-block">
    {{--  --}}
    <div id="container_bloco1" class="w-[100%] inline-block">
        {{--  --}}
        <div id="lado_a_bloco1" style="background: linear-gradient(90deg, rgba(238,238,238,1) 27%, rgba(250,250,250,1) 27%);" class="w-[50%] h-[630px] pl-[80px] float-left inline-block">
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <div id="imagem_bloco1" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco1" class="w-[50%] h-[630px] px-[80px] bg-[#fafafa] float-left inline-block">
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <p id="titulo_bloco1" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Vamos entender a importância da pesquisa</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Mundialmente as doenças respiratórias crônicas têm uma alta taxa de internação hospitalar e mortalidade. Alguns exemplos importantes dessas doenças são a <b class="cursor-pointer">Doença Pulmonar Obstrutiva Crônica (DPOC)</b>, a <b class="cursor-pointer">asma</b>, a <b class="cursor-pointer">fibrose cística</b>, a <b>bronquiectasia</b> e a <b>fibrose pulmonar</b>.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Aqui no <b>RespiraSaúde</b> vamos falar, de uma forma muito simples, sobre a pesquisa que foi realizada pelo nosso time de pesquisadores em parceria com o Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq) e Ministério da Saúde (MS).</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Nesta pesquisa nós realizamos uma <b>revisão</b>sistemática</b> com o objetivo de comparar os efeitos da assistência domiciliar com a assistência hospitalar para pessoas com doenças respiratórias crônicas.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"><b>Isso mesmo, nós comparamos os resultados do tratamento recebido em casa com o recebido no hospital!</b></p>
            </div>
        </div>
    </div>
</section>

{{-- BLOCO EXEMPLO 3 --}}

<section class="w-[100%] mt-[-5px] inline-block">
    {{--  --}}
    <div id="container_bloco2" class="w-[100%] inline-block">
        {{--  --}}
        <div id="lado_a_bloco2" class="w-[50%] h-[630px] px-[80px] inline-block float-left">
            {{--  --}}
            <div id="container_inner_bloco2" class="w-[100%] inline-block">
                {{--  --}}
                <p id="texto_titulo_bloco2" class="text-[25px] font-bold mb-[20px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]"> Objetivo da pesquisa</p>
                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">desenvolvimento e validação de um sistema de avaliação e monitoramento do controle da asma e educação em saúde para crianças, adolescentes e adultos com asma (e-ASMA).</p>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco2" style="background: linear-gradient(90deg, rgba(255,255,255,1) 75%, rgba(238,238,238,1) 75%);" class="w-[50%] h-[630px] inline-block float-left pr-[80px]">
            {{--  --}}
            <div id="container_inner_bloco2" class="w-[100%] inline-block">
                {{--  --}}
                <div id="imagem_bloco2" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
    </div>
</section>

{{-- BLOCO EXEMPLO 4 --}}

<section class="w-[100%] mt-[-5px] inline-block">
    {{--  --}}
    <div id="container_bloco1" class="w-[100%] inline-block">
        {{--  --}}
        <div id="lado_a_bloco1" style="background: linear-gradient(90deg, rgba(238,238,238,1) 27%, rgba(250,250,250,1) 27%);" class="w-[50%] h-[630px] pl-[80px] float-left inline-block">
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <div id="imagem_bloco1" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco1" class="w-[50%] h-[630px] px-[80px] bg-[#fafafa] float-left inline-block">
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <p id="titulo_bloco1" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Resultado</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">A revisão incluiu <b>13 estudos </b>presentando 1.056 pacientes com <b>asma, doença pulmonar obstrutiva crônica (DPOC) e fibrose cística.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></b> As intervenções de atenção domiciliar avaliadas nos estudos foram: <b>consulta domiciliar</b>,<b> tratamento domiciliar de exacerbações, alta precoce, hospital em casa, antibioticoterapia domiciliar e programa de reabilitação domiciliar.</b></p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Não encontramos evidências suficientes para recomendar a atenção domiciliar para adultos com doenças respiratórias crônicas. </p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Entretanto, foi possível observar que os estudos, na sua maioria, <b>observaram que os pacientes tratados com atenção domiciliar tiveram menor taxa de readmissão no hospital, menos eventos adversos, menor mortalidade  e melhor estado funcional.</b></p>
            </div>
        </div>
    </div>
</section>


{{-- PESQUISADORES--}}
<section  class="w-[100%] inline-block">
    {{--  --}}
    <div class="w-[95%] h-[600px] mx-[2.5%] my-[40px] inline-block">
        {{--  --}}
        <center>
            <p id="pesquisadores" class="font-bold text-[#212121] text-[30px] border-b-[1px] w-[200px] pb-[20px]">Pesquisadores</p>
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

            {{-- CARD PESQUISADOR --}}
            <div id="pesquisador1" id="sarah" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Sarah Leite</p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'aluno_de_doutorado', 'nome' => 'sarah']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>

            {{-- CARD PESQUISADOR --}}
            <div id="pesquisador1" id="thaylaThayla Santino.jpg" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Thayla Santino.jpg'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Thayla Amorim Santino</p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">ASSOBRAFIR/COFFITO</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'thayla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>

            {{-- CARD PESQUISADOR --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Gabriela Chaves.jpg'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Gabriela Chaves</p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'colaboradora_externa', 'nome' => 'gabriela']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
              {{-- CARD PESQUISADOR --}}
              <div id="pesquisador1" id="joubert" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Joubert Vitor .JPG'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Joubert Barbosa</p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'thayla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
              {{-- CARD PESQUISADOR --}}
              <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Tácito Zaildo</p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN-UEPB-CEFAPP</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'thayla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
              {{-- CARD PESQUISADOR --}}
              <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Cleia Amaral</p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'thayla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
              {{-- CARD PESQUISADOR --}}
              <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Sara Ahmed</p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'thayla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
              {{-- CARD PESQUISADOR --}}
              <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Zenewton Gama </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'thayla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
              {{-- CARD PESQUISADOR --}}
              <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Karla Morganna.jpeg'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Karla Morganna  Mendonça </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">FACISA/UFRN, UEPB, ASSOBRAFIR</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'thayla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
        </section>

        <!--patrocinadores-->
        <section class="w-[100%] h-[650px]  inline-block bg-[#ffffff]">
        {{--  --}}
        <div class="w-[90%] mx-[5%]  mt-[10%] inline-block">
        {{--  --}}
        <center >
            {{-- logos maiores --}}
            <ul  >
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/9.png" alt=""></li>
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/8.png" alt=""></li> --}}
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>
               <!-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/3.png" alt=""></li>-->
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/2.png" alt=""></li> --}}
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/4.png" alt=""></li> --}}
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/10.png" alt=""></li> --}}
            </ul>
        </center>
    </div>
</section>

@endsection
