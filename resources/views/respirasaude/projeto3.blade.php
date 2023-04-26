@extends('respirasaude.layout.main_projeto3')
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
        <div id="lado_a_projeto" style="background: linear-gradient(101deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 70%, rgba(0,212,255,1) 70%);" class="w-[60%] float-left inline-block h-[600px]">
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
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px]" src="/img/6.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[140px]" src="/img/7.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_projeto" class="w-[40%] pr-[50px] float-left inline-block bg-[#00d4ff] h-[600px]">
            {{--  --}}
            <div id="container_b" class="w-[90%] mx-[5%] inline-block">
                {{--  --}}
                <p id="texto_titulo_projeto" class="text-[30px] mt-[70px] leading-[30px] float-right text-right font-bold text-[#080E45]"> Desenvolvimento e validação de um sistema eletrônico para Avaliação, Suporte e Monitoramento da Asma (e-ASMA)</p>
                <p id="texto_projeto" class="text-right mt-[40px] float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">A asma é uma doença respiratória crônica caracterizada pela elevada prevalência, mortalidade e custos para o SUS, sendo assim considerada um grave problema de saúde pública, especialmente em países em desenvolvimento como o Brasil. O desenvolvimento e validação de um sistema, com aplicabilidade para o SUS, que permita a avaliação, monitoração do controle e educação em asma para crianças, adolescentes e adultos poderá otimizar a assistência em diferentes níveis de complexibilidade.</p>
                <p id="texto_projeto" class="mt-[20px] text-right float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Estes produtos de inovação científica e tecnológica poderão impactar ainda, no automanejo e autoeficácia em asma.
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
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">A realização deste estudo resultará em um avanço para o controle dos sintomas da asma em crianças, adolescentes e adultos brasileiros.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">As atuais políticas públicas, que incluem a distribuição de medicamentos de baixo e alto custo, podem ser insuficientes devido à falta de mecanismos de avaliação e monitorização eficazes dos sintomas e riscos futuros decorrentes da asma.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Vamos dar agora alguns exemplos de doenças respiratórias que são contagiosas, algumas delas você já deve conhecer, outras talvez não. Vamos lá!</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Os produtos desta proposta resultarão em um sistema de instrumentos que será de fácil implementação no cotidiano do paciente para facilitar o automanejo e a educação em asma.</p>
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
<section class="w-[100%] inline-block">
    {{--  --}}
    <div class="w-[95%] h-[600px] mx-[2.5%] my-[40px] inline-block">
        {{--  --}}
        <center>
            <p id="pesquisadores" class="font-bold text-[#212121] text-[30px] border-b-[1px] w-[200px] pb-[20px]">Pesquisadores</p>
        </center>
        {{--  --}}
        <div class="w-[100%] mt-[70px] inline-block">
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Sarah Joysi Almeida Leite</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Thayla Santino.jpg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Thayla Amorim Santino</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">UECG</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Gabriela Chaves.jpg'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Gabriela Chaves</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">Myant Inc</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Karoline Souza.jpg'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Karolinne Souza Monteiro</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">FACISA UFRN</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url(/img/); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Cleia teixeira Amaral</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">HUOL</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url(/img/); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Zenewton André da Silva Gama </p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url(/img/); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Sara Ahmed</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">McGill</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url(/img/); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Karla Morganna P.P. de Mendonça</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url(/img/); background-size: 150%; background-position: center;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Tácito Zaildo de Morais Santos</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--patrocinadores-->
<section class="w-[100%] h-[600px] inline-block bg-[#ffffff]">
    {{--  --}}
    <div class="w-[90%] mx-[5%] mt-[10%] inline-block">
        {{--  --}}
        <center>
            {{--  --}}
            <ul>
                 <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/9.png" alt=""></li>
                 <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>
                <!--<li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>-->
                 <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/LAIRE para fundo claro.png" alt=""></li>
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/2.png" alt=""></li> --}}
                <!--<li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/4.png" alt=""></li>-->
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/10.png" alt=""></li> --}}
            </ul>
        </center>
    </div>
</section>

@endsection
