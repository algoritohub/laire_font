@extends('respirasaude.layout.main_projeto3')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

{{-- FONT --}}
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

{{-- especifico doencias respiratórias agudas e (tópicos + barreiras e facilitadores) --}}

{{-- SECTION --}}
<section class="w-[100%] inline-block mt-[100px]">
    {{--  --}}
    <div  class="w-[100%] bg-[#eeeeee] inline-block">
        {{--  --}}
        <div   id="caixa_cinza_projeto3" class="w-[50%] pl-[5%] h-[600px] inline-block float-left">
            {{--  --}}
            <div id="caixa_cinza_projeto3" class="w-[750px] mt-[80px] inline-block bg-[silver] absolute h-[420px]">

                <div id="box_audio" style="background: url('/img/img_missao.png'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px]  inline-block absolute h-[450px]"></div>
                {{--  --}}
                <div  style="display: none;" id="box_libra" class="w-[780px] inline-block absolute h-[450px]">
                    {{--  --}}
                    <video id="video_missao" class="w-[750px] h-[420px]" controls="controls">
                        <source src="/img/" type="video/mp4">
                    </video>
                </div>

                    <div class="w-[100%] h-[40px] mt-[-7%] ml-[5%] ">
                        <ul class="">
                            <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                            <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                        </ul>
                    </div>
            </div>
        </div>
        {{--  --}}
        <div id="cx_azul_text_projeto2"  class="w-[50%] pr-[5%] h-[600px] pt-[30px] inline-block float-left bg-[#5CD1FF]">
            {{--  --}}
            <ul class="float-right">
                {{--  --}}
                {{-- <li class="ml-[25px] inline-block"><a href="#" class="text-[#212121] font-bold text-[14px]" title="Efeitos da atenção domiciliar para adultos com doenças respiratórias crônicas e síndrome pós-covid-19 na rotatividade hospitalar: uma revisão sistemática com metanálise">Efeitos da atenção domiciliar para adultos...</a></li> --}}
                {{-- <li class="ml-[25px] inline-block"><a href="#" class="text-[#212121] font-bold text-[14px]" title="Soluções para aumentar a aceitabilidade, adesão e cumprimento das medidas de prevenção e controle da covid-19 na população">Soluções para aumentar a aceitabilidade...</a></li> --}}
                {{-- <li class="ml-[25px] inline-block"><a href="#" class="text-[#212121] font-bold text-[14px]" title="Desenvolvimento e validação de um sistema eletrônico para Avaliação, Suporte e Monitoramento da Asma (e-ASMA)">Desenvolvimento e validação de um sistema...</a></li> --}}
            </ul>
            {{--  --}}
            <p id="text_projeto3_0" class="text-[30px] mt-[50px] leading-[30px] float-right text-right w-[500px] font-bold text-[#080E45]"> Desenvolvimento e validação de um sistema eletrônico para Avaliação, Suporte e Monitoramento da Asma (e-ASMA)</p>
            {{--  --}}
            <p id="text_projeto_3" class="text-right mt-[40px] float-right text-justify w-[550px] text-[#080E45] text-[{{ $numb_font }}px]">A asma é uma doença respiratória crônica caracterizada pela elevada prevalência, mortalidade e custos para o SUS, sendo assim considerada um grave problema de saúde pública, especialmente em países em desenvolvimento como o Brasil. O desenvolvimento e validação de um sistema, com aplicabilidade para o SUS, que permita a avaliação, monitoração do controle e educação em asma para crianças, adolescentes e adultos poderá otimizar a assistência em diferentes níveis de complexibilidade.</p>
            <p id="text_projeto_3" class="mt-[20px] text-right float-right text-right w-[550px] text-[#080E45] text-[{{ $numb_font }}px]">Estes produtos de inovação científica e tecnológica poderão impactar ainda, no automanejo e autoeficácia em asma.
            </p>
        </div>
    </div>
</section>
{{-- IMPORTÂNCIA --}}
<section id="agudas" class="w-[100%] inline-block">
    {{--  --}}
    <div id="caixa_cinza_projeto3" class="w-[20%] inline-block float-left h-[700px] bg-[#fafafa]">
        {{--  --}}
        <div class="w-[800px] h-[440px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div id="importacncia_projeto3" class="w-[80%] inline-block float-left h-[700px] pl-[550px] pr-[80px] bg-[#fafafa]">

        <p  class="text-[25px] font-bold mb-[40px] mt-[70px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Vamos entender a importância da pesquisa</p>
        <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">A realização deste estudo resultará em um avanço para o controle dos sintomas da asma em crianças, adolescentes e adultos brasileiros.</p>
        <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">As atuais políticas públicas, que incluem a distribuição de medicamentos de baixo e alto custo, podem ser insuficientes devido à falta de mecanismos de avaliação e monitorização eficazes dos sintomas e riscos futuros decorrentes da asma.</p>
        <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Vamos dar agora alguns exemplos de doenças respiratórias que são contagiosas, algumas delas você já deve conhecer, outras talvez não. Vamos lá!</p>
        <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Os produtos desta proposta resultarão em um sistema de instrumentos que será de fácil implementação no cotidiano do paciente para facilitar o automanejo e a educação em asma.</p>
        <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></p>
        <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></p>
    </div>
    {{--  --}}


</section>
{{-- SOLUÇÕES --}}
<section id="cronicas" class="w-[100%] mb-[40px] inline-block">
    <div id="objetivo"  id="text_solucoes"  class="w-[80%] pr-[650px] pl-[75px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[20px] mt-[310px] pl-[20px] border-l-[3px] border-l-[#00FF8C]"> Objetivo da pesquisa</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">desenvolvimento e validação de um sistema de avaliação e monitoramento do controle da asma e educação em saúde para crianças, adolescentes e adultos com asma (e-ASMA).</p>
        <!--<p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Isso mesmo, nós comparamos os resultados do tratamento recebido em casa com os resultados do tratamento recebido no hospital.</p>-->
        <!--<p class="mb-[20px] text-[{{ $numb_font }}px] text-justify"><b>Entendeu como a revisão sistemática é legal</b>? Assim, ao invés de termos os resultados de apenas um estudo com poucos pacientes, nós conseguimos reunir os resultados de vários estudos e muitos pacientes! Mas isso não é simples, é necessário seguir uma metodologia muito rigorosa! <b>E tem mais</b>... É necessário <b>avaliar</b> muito bem esse conjunto de resultados, de vários estudos, para entendermos o quanto nós podemos confiar neles! </p>-->
        <!--<p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Agora que vocês já sabem o objetivo da pesquisa, já conhecem melhor as principais doenças respiratórias crônicas e, também já entenderam como essa revisão sistemática foi feita, vamos saber quais foram os resultados! Estão curiosos?
        </p>-->

    </div>
    {{--  --}}

    <div style="display:none" id="cx_azul_solucao" class="w-[20%] inline-block float-left h-[700px] bg-[#5CD1FF]">
        {{--  --}}
        <div id="cx_cinza_solucao" class="w-[800px] h-[440px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div style="display:none" id="titulo_projeto3_pesquisa" class="w-[80%] pr-[650px] pl-[75px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p  class="text-[25px] font-bold mb-[40px] mt-[90px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Como a pesquisa foi feita</p>

        <p class="mb-[20px] text-justify text-[{{ $numb_font }}px]"><section id="cronicas" class="w-[100%] mb-[40px] inline-block">Em breve disponibilizaremos maiores informações!</b></p>
        <p class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></b></p>
        <p class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></p>

        <ul class="ml-[-10px]">
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left"></p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]"></p></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left"></p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">
            </p></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left"></p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]"></p></li>
        </ul>

    </div>
    {{--  --}}
    <div id="caixa_azul_projeto_2" class="w-[20%] inline-block float-left h-[700px] bg-[#5CD1FF]">
        {{--  --}}
        <div id="caixa_cinza_projeto2" class="w-[800px] h-[440px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}

</section>
<!-- RESULTADOS-->
<section id="agudas" class="w-[100%] inline-block">
    {{--  --}}
    <div id="caixa_cinza_projeto2-1" class="w-[20%] inline-block float-left h-[700px] bg-[#fafafa]">
        {{--  --}}
        <div id="caixa_cinza_projeto2-1" class="w-[800px] h-[440px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div id="text_projeto3_resultado" class="w-[80%] pl-[580px] pr-[80px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p id="text_projeto_resultado" class="text-[25px] font-bold mb-[40px] mt-[80px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Resultados</p>

        <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Em breve disponibilizaremos maiores informações!</p>
        <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></p>
        <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></p>
        <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></p>
        {{-- <button class="px-[30px] mt-[20px] h-[40px] bg-[#080E45] text-[#00FF8C]">More information</button> --}}
    </div>

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
                    <div style="background: url('/img/Karla Morganna.jpeg'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
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


    {{--  --}}

</section>
{{--  --}}
<section class="w-[90%] inline-block mx-[5%]">
    {{-- CAIXA DE INFORMAÇÕES COM 4 BOTÕES --}}
    <div id="caixa_info" style="background: url('/img/banner.png'); background-size: 100%;" class="w-[100%] h-[420px] inline-block px-[20px] py-[80px] bg-[#00FF8C] mb-[60px] rounded-[10px] mt-[80px]">
        {{--  --}}
        <div class="w-[90%] mx-[5%] mt-[20px]">
            {{--  --}}
            <center>
            <ul id="bt_box_inf" class="ml-[300px] mt-[200px]">
                <li class="inline-block ml-[40px]"><a href=""><button class="px-[40px] my-[10px] rounded-[5px] h-[50px] text-transparent font-bold text-[18px]">Vídeo</button></a></li>
                <li class="inline-block ml-[40px]"><a href=""><button class="px-[40px] my-[10px] rounded-[5px] h-[50px] text-transparent font-bold text-[18px]">Infográfico</button></a></li>
                <li class="inline-block ml-[40px]"><a href=""><button class="px-[40px] my-[10px] rounded-[5px] h-[50px] text-transparent font-bold text-[18px]">Podcast</button></a></li>
                <li  id="bt-quadrado-verde" class="inline-block ml-[40px]"><a href=""><button class="px-[40px] my-[10px] rounded-[5px] h-[50px] text-transparent font-bold text-[18px]">Resumo executivo</button></a></li>
            </ul>
            </center>
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
                 <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/9.png" alt=""></li>-->
                 <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/6.png" alt=""></li>
                <!--<li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>-->
                 <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/7.png" alt=""></li>
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/2.png" alt=""></li> --}}
                <!--<li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/4.png" alt=""></li>-->
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/10.png" alt=""></li> --}}
            </ul>
        </center>
    </div>
</section>

@endsection
