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
                    <div id="box_audio-pj3" class="w-[800px] bg-[yellow] h-[400px]"></div>
                    {{-- VÍDEO --}}
                    <div id="box_libra" style="display: none;" id="imagem_countainer" class="w-[800px] bg-[black] h-[400px]"></div>
                </div>
                {{-- BASE LOGOS --}}
                <div id="base_logos" class="w-[100%] h-[150px] inline-block">
                    {{-- LOGOS --}}
                    <ul id="list_logos" class="my-[20px]">
                        {{--  --}}
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[160px]" src="/img/6.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[370px]" src="/img/mcti.png" alt=""></li>
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
                <div id="imagem_bloco1-pj3" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco1" class="w-[50%] h-[630px] px-[80px] bg-[#fafafa] float-left inline-block">
            <div id="importacncia_projeto3" ></div>
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
        <div id="objetivo" ></div>
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
                <div id="imagem_bloco2-pj3" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
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
                <div id="imagem_bloco1-pj3a" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco1" class="w-[50%] h-[630px] px-[80px] bg-[#fafafa] float-left inline-block">
            <div id="titulo_projeto3_pesquisa"></div>
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <p id="titulo_bloco1" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">COMO A PESQUISA FOI FEITA</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Em breve disponibilizaremos maiores informações!</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></p>
            </div>
        </div>
    </div>
</section>
{{-- BLOCO EXEMPLO 5 --}}

<section class="w-[100%] mt-[-5px] inline-block">
    <div id="text_projeto3_resultado"></div>
    {{--  --}}
    <div id="container_bloco2" class="w-[100%] inline-block">
        {{--  --}}
        <div id="lado_a_bloco2" class="w-[50%] h-[630px] px-[80px] inline-block float-left">
            {{--  --}}
            <div id="container_inner_bloco2" class="w-[100%] inline-block">
                {{--  --}}
                <p id="texto_titulo_bloco2" class="text-[25px] font-bold mb-[20px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]"> RESULTADOS</p>
                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Em breve disponibilizaremos maiores informações!</p>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco2" style="background: linear-gradient(90deg, rgba(255,255,255,1) 75%, rgba(238,238,238,1) 75%);" class="w-[50%] h-[630px] inline-block float-left pr-[80px]">
            {{--  --}}
            <div id="container_inner_bloco2" class="w-[100%] inline-block">
                {{--  --}}
                <div id="imagem_bloco2-pj3c" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
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
                    <div style="background: url('/img/Thayla Santino.jpg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Thayla Amorim Santino</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">UFRN,ASSOBRAFIR/COFFITO</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_3', ['tipo' => 'professor', 'nome' => 'thayla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
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
                    <a href="{{ route('pesquisadores_projeto_3', ['tipo' => 'Aluno de Doutorado', 'nome' => 'joubert']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
             {{-- CARD PESQUISADOR --}}
             <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Sara Ahmed.jpg'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
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
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'Aluno de Doutorado', 'nome' => 'sara']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url(/img/); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Patrícia Angélica de Miranda Silva Nogueira</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">UFRN,USP</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_3', ['tipo' => ' Professora colaboradora', 'nome' => 'patricia']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url(/img/); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Karoline Monteiro</p>
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
                    <div style="background: url(/img/Alchieri.jpg); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">João Alchiere</p>
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
                    <div style="background-image: url('/img/Ivan Daniel.jpg'); background-size: 95%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Ivan Nogueira</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">UFRN, ASSOBRAFIR/COFFITO</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_3', ['tipo' => ' Professor', 'nome' => 'ivan']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>


            {{--  --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url(/img/); background-size: 150%; background-position: center;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Cleia Amaral</p>
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
                    <div style="background: url(/img/Baldomero.jpg); background-size: 150%; background-position: center;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Baldomero Silva </p>
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
                    <p class="text-center font-bold mt-[20px] text-[15px]">Ana Gisele </p>
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
                    <div style="background-image: url('/img/Karla Morganna.jpeg'); background-size: 150%; background-position: center;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <p class="text-center font-bold mt-[20px] text-[15px]">Karla Morgana</p>
                    {{--  --}}
                    <p class="text-[#212121] text-center text-[16px]">FACISA/UFRN, UEPB, ASSOBRAFIR</p>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_3', ['tipo' => 'Cordenadora', 'nome' => 'karla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>

</section>

            {{-- MODAL --}}
        @if(isset($pesquisador) AND !empty($pesquisador))
        {{--  --}}
        <div class="modal_info_pesquisadores">
            {{--  --}}
            <div id="modal_pesq_laire" class="w-[1000px] p-[40px] mx-auto h-[500px] mt-[10%] shadow-lg bg-[#ffffff]">

                {{-- CONTEÚDO THAYLA --}}
                @if($pesquisador == "thayla")
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold leading-[23px] text-[20px]">Thayla Amorim Santino</p>
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <a href="{{ route('projeto3') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/Thayla Santino.jpg'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-center mt-[30px]">
                            Thayla Amorim Santino é fisioterapeuta formada pela Universidade Estadual da Paraíba, especialista em Fisioterapia Respiratória (ASSOBRAFIR/COFFITO) e em Informática em Saúde pela Universidade Federal de São Paulo, mestre e doutora pelo Programa de Pós-Graduação em Fisioterapia pela Universidade Federal do Rio Grande do Norte. Atualmente é professora do Departamento de Fisioterapia da Universidade Estadual da Paraíba e pesquisadora do Instituto de Pesquisa Professor Joaquim Amorim Neto. Participa como colaboradora de projetos de pesquisa e extensão na área de Avaliação e Intervenção em Fisioterapia Respiratória, desenvolvimento, tradução, adaptação transcultural e avaliação das propriedades psicométricas de instrumentos de medida em saúde. Além disso, é pesquisadora colaboradora no Person-Centred Health Informatics Research Lab vinculado à McGill University (Montreal, Canadá).
                        </p>
                    </div>
                        {{--  --}}
                        <div class="w-[100%] inline-block">
                        {{--  --}}
                        <center>
                        {{--  --}}
                        <ul id="links_pesq_mob" class="mt-[20px]">
                            <li class="mr-[20px] inline-block"><a href="http://lattes.cnpq.br/7500827180804952" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                            <li class="mr-[20px] inline-block"><a href="https://orcid.org/0000-0002-5514-762X" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                        </ul>
                        </center>
                    </div>
                @endif
                {{-- CONTEÚDO joubert --}}
                @if($pesquisador == "joubert")
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold leading-[23px] text-[20px]"> Joubert Vitor de Souto Barbosa</p>
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <a href="{{ route('projeto3') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/Joubert Vitor .JPG'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-center mt-[30px]">
                            Joubert Vitor de Souto Barbosa, Fisioterapeuta pelo Centro Universitário Unifacisa, Possui
                            pós-graduação em Fisioterapia em terapia intensiva adulto e pediátrica pelo Centro
                            Universitário Unifacisa, Mestre em Fisioterapia pela Universidade Federal do Rio Grande do
                            Norte e atualmente é doutorando no Programa de Pós-graduação em Fisioterapia também
                            pela Universidade Federal do Rio Grande do Norte. Desenvolve atividades de pesquisa e
                            extensão no Laboratório de Avaliação e Intervenção em Fisioterapia Respiratória
                            (LAIRE/UFRN), voltados à área de adaptação transcultural e avaliação das propriedades
                            psicométricas de instrumentos de medida em saúde. Joubert é comunicativo, gosta de
                            expressar sua arte e emoções através de fotografias, viagens e música.
                        </p>
                    </div>
                     {{--  --}}
                     <div class="w-[100%] inline-block">
                        {{--  --}}
                        <center>
                        {{--  --}}
                        <ul id="links_pesq_mob" class="mt-[20px]">
                            <li class="mr-[20px] inline-block"><a href="http://lattes.cnpq.br/3554788662850733" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>

                        </ul>
                        </center>
                    </div>
                @endif
                {{-- CONTEÚDO patricia --}}
                @if($pesquisador == "patricia")
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold leading-[23px] text-[20px]">  Patrícia Angélica de Miranda Silva Nogueira
                            </p>
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <a href="{{ route('projeto3') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-center mt-[30px]">Possui Graduação em Fisioterapia pela Universidade Federal do Rio Grande do Norte
                            (1997-2001), Especialização em Fisioterapia Respiratória pela Universidade Federal de São
                            Paulo (2002-2003), Especialização em Fisiologia do Exercício pela Universidade Federal de
                            São Paulo (2003) e Doutorado em Ciências pelo programa de Pós-Graduação em Ciências
                            Aplicadas à Cardiologia pela Universidade Federal de São Paulo (2004-2006). Foi
                            professora Adjunta da Universidade Federal da Paraíba (05/08 - 01/09). Atualmente é
                            professora Associada da Universidade Federal do Rio Grande do Norte (UFRN) e
                            professora orientadora de mestrado e doutorado no programa de pós-graduação em
                            Fisioterapia da UFRN. Tem experiência na área de Fisioterapia, com ênfase em Fisioterapia
                            Respiratória, e atua principalmente nas seguintes linhas de pesquisa: 1. Avaliação e
                            intervenção fisioterapêutica cardiorrespiratória nas doenças agudas e crônicas, bem como
                            2.Tradução, adaptação transcultural e avaliação das propriedades psicométricas de
                            instrumentos de medida em saúde.</p>
                    </div>
                     {{--  --}}
                     <div class="w-[100%] inline-block">
                        {{--  --}}
                        <center>
                        {{--  --}}
                        <ul id="links_pesq_mob" class="mt-[20px]">
                            <li class="mr-[20px] inline-block"><a href=" https://lattes.cnpq.br/1788918737416095" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                            <li class="mr-[20px] inline-block"><a href=" https://orcid.org/0000-0002-3763-2410" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                        </ul>
                        </center>
                    </div>
                @endif
                {{-- CONTEÚDO ivan --}}
                @if($pesquisador == "ivan")
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold leading-[23px] text-[20px]">  Ivan Daniel Bezerra Nogueira
                            </p>
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <a href="{{ route('projeto3') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/Ivan Daniel.jpg'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-center mt-[30px]">Possui Graduação em Fisioterapia pela Universidade Federal do Rio Grande do Norte
                            (1994-1999), Especialização em Fisioterapia Respiratória pela Universidade Federal de São
                            Paulo (2000-2001), Especialização em Fisiologia do Exercício pela Universidade Federal de
                            São Paulo (2003), Especialista em Terapia Intensiva Adulto pela ASSOBRAFIR/COFFITO
                            (2015), Mestrado em Ciências pelo Programa da Cardiologia da Universidade Federal de
                            São Paulo (2008-2009) e Doutorado em Fisioterapia pelo Programa de Pós-Graduação em
                            Fisioterapia da Universidade Federal do Rio Grande do Norte (2014-2017). Foi Professor da
                            Especialização em Fisioterapia Respiratória da Universidade Federal de São Paulo (2001-
                            2008), Professor Assistente do Centro Universitário São Camilo (2003-2008) e Professor
                            Assistente do Centro Universitário de João Pessoa (2008). Atualmente é Professor Adjunto
                            do Departamento de Fisioterapia da Universidade Federal do Rio Grande do Norte. Tem
                            experiência na área de Fisioterapia, com ênfase em Fisioterapia Cardiorrespiratória,
                            atuando principalmente nos seguintes temas: treinamento físico, capacidade funcional,
                            qualidade de vida e suporte ventilatório.</p>
                    </div>
                     {{--  --}}
                     <div class="w-[100%] inline-block">
                        {{--  --}}
                        <center>
                        {{--  --}}
                        <ul id="links_pesq_mob" class="mt-[20px]">
                            <li class="mr-[20px] inline-block"><a href="http://lattes.cnpq.br/7500827180804952" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                            <li class="mr-[20px] inline-block"><a href=" https://orcid.org/0000-0002-5514-762X" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                        </ul>
                        </center>
                    </div>
                @endif
                 {{-- CONTEÚDO ivan --}}
                 @if($pesquisador == "karla")
                 <div class="w-[100%] inline-block">
                     {{--  --}}
                     <div class="w-[80%] inline-block float-left">
                         {{--  --}}
                         <p class="font-bold leading-[23px] text-[20px]">  Karla Morganna

                         </p>
                         <p class="text-[13px] uppercase">{{ $categoria }}</p>
                     </div>
                     {{--  --}}
                     <div class="w-[20%] inline-block float-left">
                         {{--  --}}
                         <a href="{{ route('projeto3') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                     </div>
                 </div>
                 {{--  --}}
                 <div class="w-[100%] inline-block">
                     {{--  --}}
                     <div id="imagem_pesq_mob" style="background-image: url('/img/Karla Morganna.jpeg'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                     {{--  --}}
                     <p class="leading-[17px] text-[14px] text-center mt-[30px]">Karla Morganna é Professora Titular do Departamento de Fisioterapia e do Programa de
                        Pós-Graduação em Fisioterapia da Universidade Federal do Rio Grande do Norte. Possui
                        títulos de Mestrado e Doutorado em Ciências da Saúde obtidos no Programa de Pós-Graduação em Ciências da Saúde pela Universidade Federal do Rio Grande do Norte.
                        Realizou Pós-Doutorado na Universidade de Massachusetts-Lowell, MA - USA. Coordena
                        projetos de pesquisa na área de Avaliação e Intervenção em Fisioterapia Respiratória,
                        desenvolvimento, tradução, adaptação transcultural e avaliação das propriedades
                        psicométricas de instrumentos de medida em saúde, desenvolve revisões sistemáticas em
                        colaboração com a Cochrane e coordena projetos de inovação científica e tecnológica em
                        saúde.</p>
                 </div>
                  {{--  --}}
                  <div class="w-[100%] inline-block">
                     {{--  --}}
                     <center>
                     {{--  --}}
                     <ul id="links_pesq_mob" class="mt-[20px]">
                         <li class="mr-[20px] inline-block"><a href=" http://lattes.cnpq.br/1736384836028397" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                         <li class="mr-[20px] inline-block"><a href="https://orcid.org/0000-0001-5734-3707" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                     </ul>
                     </center>
                 </div>
             @endif






         @endif

              {{-- BANNER PRODUTOS --}}
        <section class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[90%] mx-[5%] inline-block">
                {{--  --}}
                <div id="banner-produtos" style="background-image: url(/img/banner.png); background-size: 100%; background-repeat: no-repeat;" class="w-[100%] rounded-[20px] h-[420px] inline-block">
                    <ul class="mt-[300px] ml-[470px]">
                        <li id="video_produto"  class="inline-block mr-[60px]"><button class="bg-[transparent] w-[100px] h-[40px]"></button></li>
                        <li id="info_produto"   class="inline-block mr-[60px]"><button class="bg-[transparent] w-[160px] h-[40px]"></button></li>
                        <li id="podcst_produto" class="inline-block mr-[60px]"><button class="bg-[transparent] w-[150px] h-[40px]"></button></li>
                        <li id="resumo_produto" class="inline-block mr-[60px]"><button class="bg-[transparent] w-[200px] h-[40px]"></button></li>
                    </ul>
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
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/6.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/LAIRE para fundo claro.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[300px]" src="/img/mcti.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/Logo UFRN.jpg" alt=""></li>
            </ul>
        </center>
    </div>
</section>

@endsection
