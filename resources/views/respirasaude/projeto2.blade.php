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

{{-- SECTION --}}
<div class="w-[100%] inline-block">
    {{--  --}}
    <div class="w-[100%] mt-[100px] inline-block">
        {{--  --}}
        <div id="lado_a_projeto" style="background: linear-gradient(101deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 70%, rgba(0,212,255,1) 70%);" class="w-[60%] float-left inline-block h-[640px]">
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
                    <div id="box_audio-2" class="w-[800px] bg-[yellow] h-[400px]"></div>
                    {{-- VÍDEO --}}
                    <div id="box_libra" style="display: none;" id="imagem_countainer" class="w-[800px] bg-[black] h-[400px]"></div>
                </div>
                {{-- BASE LOGOS --}}
                <div id="base_logos" class="w-[100%] h-[150px] inline-block">
                    {{-- LOGOS --}}
                    <ul id="list_logos" class="my-[20px]">
                        {{--  --}}
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[160px] " src="/img/6.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[10px]"><img class="w-[370px]" src="/img/mcti.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_projeto" class="w-[40%] pr-[50px] float-left inline-block bg-[#00d4ff] h-[640px]">
            {{--  --}}
            <div id="container_b" class="w-[90%] mx-[5%] inline-block">
                {{--  --}}
                <p id="texto_titulo_projeto" class="text-[30px] mt-[70px] leading-[30px] float-right text-right font-bold text-[#080E45]"> Soluções para aumentar a aceitabilidade, adesão e cumprimento das medidas de prevenção e controle da covid-19 na população.</p>
                <p id="texto_projeto" class="text-right mt-[40px] float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Esta pesquisa está sendo financiada pelo Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq),</p>
                <p id="texto_projeto" class="mt-[20px] text-right float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Ministério da Ciência, Tecnologia, Inovações e Comunicações (MCTIC) e Ministério da Saúde (MS). O seu objetivo é propor soluções para que a população seja capaz de aumentar a sua adesão às medidas de prevenção e controle da COVID-19 e outras doenças respiratórias contagiosas. Para isso, realizaremos uma importante e extensa revisão sistemática para compreender as barreiras e facilitadores da adesão às medidas de prevenção e controle a nível mundial. Posteriormente, a partir do desenvolvimento, validação a aplicação do questionário ADHERE no território nacional. </p>
            </div>
            {{-- AUDIO --}}
            <div class="w-[90%] inline-block mx-[5%]">
                {{--  --}}
                <div id="audio_libra" style="display: none;" class="inline-block float-right mt-[20px]">
                    {{--  --}}
                    <audio autoplay="autoplay" controls="controls">
                        <source src="sua_musica.mp3" type="audio/mp3" />
                        seu navegador não suporta HTML5
                    </audio>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- BLOCO EXEMPLO 2 --}}
<section class="w-[100%] mt-[-5px] inline-block">
    {{--  --}}
    <div id="container_bloco1" class="w-[100%] inline-block">
        {{--  --}}
        <div id="lado_a_bloco1" style="background: linear-gradient(90deg, rgba(238,238,238,1) 27%, rgba(250,250,250,1) 27%);" class="w-[50%] h-[800px] pl-[80px] float-left inline-block">
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <div id="imagem_bloco1-pj2" class="w-[100%] h-[600px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco1" class="w-[50%] h-[800px] px-[80px] bg-[#fafafa] float-left inline-block">
            <div id="importacncia_projeto2"></div>
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <p id="titulo_bloco1" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Vamos entender a importância da pesquisa</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Algumas doenças respiratórias infecciosas matam milhares de brasileiros todos os anos, pois elas são contagiosas e passam de uma pessoa para outra muito facilmente através da respiração, tosse, espirros e mãos contaminadas.</b>.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Então, saber um pouco mais sobre essas doenças é muito importante. Precisamos entender como elas são transmitidas, quais são os seus sintomas e principalmente, como podemos nos proteger do contágio. Então, pense conosco... se nós conhecermos melhor essas doenças, e como nós podemos nos proteger delas, será possível diminuir a <b>mortalidade</b> no nosso país!</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Vamos dar agora alguns exemplos de doenças respiratórias que são contagiosas, algumas delas você já deve conhecer, outras talvez não. Vamos lá!</p>
                <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Você já ouviu falar em <b>pneumonia</b>, <b>tuberculose</b>, <b>H1N1</b>, <b>bronquiolite</b>, <b>influenza</b>, <b>coqueluche</b>, <b>COVID-19</b></p>
                <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Vamos compartilhar aqui de uma forma muito simples, como esta pesquisa está acontecendo e os seus resultados. Ela está sendo realizada com o apoio do Ministério da Saúde, CNPq. </p>
            </div>
        </div>
    </div>
</section>

{{-- BLOCO EXEMPLO 3 --}}

<section class="w-[100%] mt-[-5px] inline-block">
    <div id="objetivo"></div>
    {{--  --}}
    <div id="container_bloco2" class="w-[100%] inline-block">
        {{--  --}}
        <div id="lado_a_bloco2" class="w-[50%] h-[630px] px-[80px] inline-block float-left">
            {{--  --}}
            <div id="container_inner_bloco2" class="w-[100%] inline-block">
                {{--  --}}
                <p  class="text-[25px] font-bold mb-[20px] mt-[90px] pl-[20px] mb-[20px] border-l-[3px] border-l-[#00FF8C]">Objetivo da Pesquisa </p>

                <p id="metodo" class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Propor soluções para que a população seja capaz de aumentar a sua adesão às medidas de prevenção </b>.</p>
                <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">e controle da COVID-19 e outras doenças respiratórias contagiosas. </p>

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


{{-- BLOCO EXEMPLO 4--}}

<section class="w-[100%] mt-[-5px] inline-block">
    {{--  --}}
    <div id="container_bloco1" class="w-[100%] inline-block">
        {{--  --}}
        <div id="lado_a_bloco1" style="background: linear-gradient(90deg, rgba(238,238,238,1) 27%, rgba(250,250,250,1) 27%);" class="w-[50%] h-[630px] pl-[80px] float-left inline-block">
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <div id="imagem_bloco1-pj2a" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco1" class="w-[50%] h-[630px] px-[80px] bg-[#fafafa] float-left inline-block">
            <div id="titulo_projeto2_pesquisa" ></div>
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <p  class="text-[25px] font-bold mb-[40px] mt-[90px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Como a pesquisa foi feita</p>

                <p class="mb-[20px] text-justify text-[{{ $numb_font }}px]"><section id="cronicas" class="w-[100%] mb-[40px] inline-block">Vamos lá, primeiro foi necessário entender quais são os aspectos que ajudam as pessoas a preveni estas doenças. Isso é o que chamamos de <b><b>facilitadores</b> de adesão às medidas de prevenção e controle!</b></p>
                <p class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Mas, vocês concordam que também é importante entender quais são os aspectos que nos atrapalham na prevenção destas doenças? Isso é o que chamamos de <b><b>barreiras</b> de adesão às medidas de prevenção e controle!</b></p>
                <p class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Esta pesquisa está sendo realizada em três etapas!</p>

                <ul class="ml-[-10px]">
                    <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Realizamos uma revisão sistemática para identificar a partir dos resultados de muitos estudos, feitos em vários países do mundo, quais são as barreiras e facilitadores para a adesão das pessoas a medidas de prevenção e controle da COVID-19 e outras doenças respiratórias graves.</p></li>
                    <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Estamos desenvolvendo um questionário para entender quais são os aspectos que facilitam ou atrapalham os brasileiros na prevenção de doenças respiratórias contagiosas. O nome deste questionário é ADHERE.
                    </p></li>
                    <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Aplicar o questionário ADHERE em todo o Brasil e fazer um diagnóstico nacional para entender o atrapalha e o que ajuda os brasileiros na prevenção das doenças respiratórias contagiosas.</p></li>
                </ul>
            </div>
        </div>
    </div>
</section>




{{-- BLOCO EXEMPLO 3 --}}

<section class="w-[100%] mt-[-5px] inline-block">
    {{--  --}}
    <div id="container_bloco2" class="w-[100%] inline-block">
        <div id="text_projeto_resultado" ></div>
        {{--  --}}
        <div id="lado_a_bloco2" class="w-[50%] h-[630px] px-[80px] inline-block float-left">

            {{--  --}}
            <div id="container_inner_bloco2" class="w-[100%] inline-block">
                {{--  --}}
                <p id="titulo_bloco1" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Resultados</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">A revisão incluiu <b>13 estudos </b>presentando 1.056 pacientes com <b>asma, doença pulmonar obstrutiva crônica (DPOC) e fibrose cística.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]"></b> As intervenções de atenção domiciliar avaliadas nos estudos foram: <b>consulta domiciliar</b>,<b> tratamento domiciliar de exacerbações, alta precoce, hospital em casa, antibioticoterapia domiciliar e programa de reabilitação domiciliar.</b></p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Não encontramos evidências suficientes para recomendar a atenção domiciliar para adultos com doenças respiratórias crônicas. </p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Entretanto, foi possível observar que os estudos, na sua maioria, <b>observaram que os pacientes tratados com atenção domiciliar tiveram menor taxa de readmissão no hospital, menos eventos adversos, menor mortalidade  e melhor estado funcional.</b></p>

            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco2" style="background: linear-gradient(90deg, rgba(255,255,255,1) 75%, rgba(238,238,238,1) 75%);" class="w-[50%] h-[630px] inline-block float-left pr-[80px]">
            {{--  --}}
            <div id="container_inner_bloco2" class="w-[100%] inline-block">
                {{--  --}}
                <div id="imagem_bloco1-pj2b" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
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
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_2', ['tipo' => 'aluno_de_doutorado', 'nome' => 'tacito']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>

            {{-- CARD PESQUISADOR --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Baldomero.jpg'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Baldomero Silva </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                   <p class="text-center uppercase text-[15px] mt-[25px] font-bold ">ver bio ➜</p>
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
                        <p class="text-[#212121] text-center text-[16px]">UFRN, UFMG</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_2', ['tipo' => 'colaboradora_externa', 'nome' => 'gabriela']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            {{-- CARD PESQUISADOR --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Sarah Leite.jpeg'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
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
                    <a href="{{ route('pesquisadores_projeto_2', ['tipo' => 'aluno_de_doutorado', 'nome' => 'sarah']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                        <p class="font-bold text-center text-[15px]">João  Alchieri </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>

            {{-- CARD PESQUISADOR --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Cecilia.jpg'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Cecilia Patino </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                   <p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                        <p class="font-bold text-center text-[15px]">Kleber  Luz </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                        <p class="font-bold text-center text-[15px]">Ricardo  Guerra </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                   <p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
              {{-- CARD PESQUISADOR --}}
              <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/Tito Hugo.png'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">Tito Penha </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">ASSOBRAFIR/COFFITO</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                        <p class="font-bold text-center text-[15px]"> Gabriel silva </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_2', ['tipo' => ' Bolsista de IC', 'nome' => 'gabriel']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                        <p class="font-bold text-center text-[15px]">Ada Jácome </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                   <p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                        <p class="font-bold text-center text-[15px]">Karolinne Monteiro </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">UFRN</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                        <p class="font-bold text-center text-[15px]">-	Karla Morganna  Mendonça </p>
                        {{--  --}}
                        <p class="text-[#212121] text-center text-[16px]">FACISA/UFRN,UEPB,CBI of Miami</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('pesquisadores_projeto_2', ['tipo' => ' Coordenadora', 'nome' => 'karla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
        </section>

         {{-- MODAL --}}
        @if(isset($pesquisador) AND !empty($pesquisador))
        {{--  --}}
        <div class="modal_info_pesquisadores">
            {{--  --}}
            <div id="modal_pesq_laire" class="w-[1000px] p-[40px] mx-auto h-[500px] mt-[10%] shadow-lg bg-[#ffffff]">

                 {{-- CONTEÚDO SARAH --}}
                 @if($pesquisador == "sarah")
                 <div class="w-[100%] inline-block">
                     {{--  --}}
                     <div class="w-[80%] inline-block float-left">
                         {{--  --}}
                         <p class="font-bold leading-[23px] text-[20px]">Sarah Leite</p>
                         <p class="text-[13px] uppercase">{{ $categoria }}</p>
                     </div>
                     {{--  --}}
                     <div class="w-[20%] inline-block float-left">
                         {{--  --}}
                         <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto2') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                     </div>
                 </div>
                 {{--  --}}
                 <div class="w-[100%] inline-block">
                     {{--  --}}
                     <div id="imagem_pesq_mob" style="background-image: url('/img/Sarah Leite.jpeg'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                     {{--  --}}
                     <p class="leading-[17px] text-[14px] text-center mt-[30px]">
                         Fisioterapeuta graduada pela Universidade Federal do Rio Grande do Norte (UFRN) (2017), possui residência em Terapia Intensiva pelo Hospital Dom Helder Câmara (HDH) (2019), Mestrado acadêmico em Fisioterapia (UFRN) (2021) e Título de Especialista Profissional em Fisioterapia em Terapia Intensiva (ASSOBRAFIR/COFFITO) (2022). Atualmente cursa Doutorado em Fisioterapia pela UFRN, integrante do Laboratório de Avaliação e Intervenção Respiratória (LAIRE), ocupa o cargo público de fisioterapeuta no Hospital Barão de Lucena (HBL) - Secretaria Estadual de Saúde de Pernambuco (SES-PE), ocupa cargo de gestão como Coordenadora da equipe de Fisioterapia do Hospital Dom Helder Câmara. Tem experiência em pesquisas de tradução, adaptação transcultural e avaliação psicométrica de instrumentos em saúde; e revisões sistemáticas em saúde.
                     </p>
                 </div>
                  {{--  --}}
                  <div class="w-[100%] inline-block">
                     {{--  --}}
                     <center>
                     {{--  --}}
                     <ul id="links_pesq_mob" class="mt-[20px]">
                         <li class="mr-[20px] inline-block"><a href="http://lattes.cnpq.br/3312691654735238" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                         <li class="mr-[20px] inline-block"><a href="ttps://orcid.org/0000-0002-2908-8187"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                     </ul>
                     </center>
                 </div>
             @endif

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
                            <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto2') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
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

                {{-- CONTEÚDO gabriela --}}
                @if($pesquisador == "gabriela")
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold leading-[23px] text-[20px]">Gabriela Chaves</p>
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto2') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/Gabriela Chaves.jpg'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-center mt-[30px]">
                            Gabriela Chaves, fisioterapeuta formada pela UFRN. Mestrado em Fisioterapia pela UFRN, Doutorado em Ciências da Reabilitação pela UFMG. Pós doutorado em dor e envelhecimento pela York University (Toronto/Canadá). Atualmente trabalha como pesquisadora na empresa Myant Inc. (Toronto/Canadá). Colaboradora nas Revisões Sistemáticas e metanálises na área de avaliação e intervenção em Fisioterapia respiratória.
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
                            <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto2') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
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
                {{-- CONTEÚDO tacito --}}
                @if($pesquisador == "tacito")
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold leading-[23px] text-[20px]"> Tácito Zaildo de Morais Santos</p>
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto2') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-center mt-[30px]">
                            Tácito Santos é Fisioterapeuta graduado pela Universidade Estadual da Paraíba (UEPB),
                            Mestre em Fisioterapia na área de Avaliação e Intervenção nos Sistemas Cardiovascular e
                            Respiratório (UFRN), Doutorando em Fisioterapia pela UFRN. Possui pós-graduação lato-
                            sensu em Saúde Coletiva (FIP-PB), pós-graduação lato sensu em Terapia Intensiva
                            (CEFAPP-PE). Especialista profissional em Terapia Intensiva Neonatal e Pediátrica pelo
                            COFFITO/ASSOBRAFIR. Servidor público estatutário no Hospital Pediátrico Maria Alice
                            Fernandes SESAP/RN. Possui experiências adicionais como docente em educação superior
                            pública e privada na área de avaliação e intervenção em Fisioterapia Cardiovascular e
                            Respiratória/Terapia Intensiva, ministrando disciplinas teórico-práticas como: Terapia
                            Intensiva, Respiratória, Cardiovascular, Ética e Deontologia em Fisioterapia na Atenção
                            Primária. Linhas de interesse para pesquisa: avaliação cinético-funcional e intervenção não
                            farmacológica em doenças cardiovasculares, neuromusculares e respiratórias pediátricas.
                            Participa como colaborador de projetos de pesquisa e extensão na área de Avaliação e
                            Intervenção em Fisioterapia Respiratória, desenvolvimento, tradução, adaptação
                            transcultural e avaliação das propriedades psicométricas de instrumentos de medida em
                            saúde. Em momentos de lazer, gosta de viajar, nadar, ir à praia e estar junto de amigos e
                            familiares
                        </p>
                    </div>
                     {{--  --}}
                     <div class="w-[100%] inline-block">
                        {{--  --}}
                        <center>
                        {{--  --}}
                        <ul id="links_pesq_mob" class="mt-[20px]">
                            <li class="mr-[20px] inline-block"><a href=": http://lattes.cnpq.br/0614300074220357" target="blank_"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">LATTES</button></a></li>
                            <li class="mr-[20px] inline-block"><a href="https://orcid.org/my-orcid?orcid=0000-0002-9495-7078"><button class="w-[200px] h-[40px] rounded-[100px] bg-[#080E45] font-bold text-[10px] text-[#ffffff]">ORCID</button></a></li>
                        </ul>
                        </center>
                    </div>
                @endif
                {{-- CONTEÚDO joubert --}}
                @if($pesquisador == "gabriel")
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold leading-[23px] text-[20px]">  Gabriel Rodrigues da Silva</p>
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto2') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-center mt-[30px]">
                            Gabriel / Fisioterapia / Graduando / Inglês / Fisioterapia Cardiorrespiratória / Atividades de
                            ensino, pesquisa e extensão/ Gosto de estar por dentro das atualizações tecnológicas, toco
                            teclado na igreja, amo assistir uma série.
                            Gabriel Silva está se formando em fisioterapia pela Universidade Federal do Rio Grande do
                            Norte e teve experiências em outras instituições até chegar na UFRN. É autodidata e
                            sempre está buscando conhecimentos que possam agregar para sua atuação profissional,
                            desde o uso de tecnologias de programação até conhecimentos em marketing digital e
                            infoprodutos. É estrategista e faz parte da equipe de projetos de uma empresa que oferece
                            preparatório para concursos e residências na área da fisioterapia. Aqui no LAIRE, Gabriel
                            está envolvido com o projeto de Implementação do RespiraSaúde, uma plataforma de
                            tradução do conhecimento em saúde respiratória. Gabriel é uma pessoa mais reservada,
                            caseira e é o “humano” de 2 gatinhas.
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
                {{-- CONTEÚDO karla --}}
                @if($pesquisador == "karla")
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold leading-[23px] text-[20px]"> Karla Morganna</p>
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto2') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/Karla Morganna.jpeg'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
                        {{--  --}}
                        <p class="leading-[17px] text-[14px] text-center mt-[30px]">
                            Karla Morganna é Professora Titular do Departamento de Fisioterapia e do Programa de
                            Pós-Graduação em Fisioterapia da Universidade Federal do Rio Grande do Norte. Possui
                            títulos de Mestrado e Doutorado em Ciências da Saúde obtidos no Programa de Pós-Graduação em Ciências da Saúde pela Universidade Federal do Rio Grande do Norte.
                            Realizou Pós-Doutorado na Universidade de Massachusetts-Lowell, MA - USA. Coordena
                            projetos de pesquisa na área de Avaliação e Intervenção em Fisioterapia Respiratória,
                            desenvolvimento, tradução, adaptação transcultural e avaliação das propriedades
                            psicométricas de instrumentos de medida em saúde, desenvolve revisões sistemáticas em
                            colaboração com a Cochrane e coordena projetos de inovação científica e tecnológica em
                            saúde.

                        </p>
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
