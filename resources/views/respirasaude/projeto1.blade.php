@extends('respirasaude.layout.main_projeto1')
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
                    <div id="box_audio-1" class="w-[800px] bg-[yellow] h-[400px]"></div>
                    {{-- VÍDEO --}}
                    <div id="box_libra" style="display: none;" id="imagem_countainer" class="w-[800px] bg-[orange] h-[400px]"></div>
                </div>
                {{-- BASE LOGOS --}}
                <div id="base_logos" class="w-[100%] h-[170px] inline-block">
                    {{-- LOGOS --}}
                    <ul id="list_logos" class="my-[20px]">
                        {{--  --}}
                        <li class="inline-block mr-[40px] my-[8px]"><img class="w-[100px] " src="/img/6.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[8px]"><img class="w-[80px]" src="/img/4.png" alt=""></li>
                        {{-- <li class="inline-block mr-[80px] my-[10px]"><img class="w-[140px] " src="/img/LAIRE para fundo claro.png" alt=""></li> --}}
                        <li class="inline-block mr-[40px] my-[8px]"><img class="w-[105px]" src="/img/ppgfis.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[8px]"><img class="w-[105px] " src="/img/9.png" alt=""></li>
                        <li class="inline-block mr-[40px] my-[8px]"><img class="w-[250px] " src="/img/10.png" alt=""></li>
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
                <p id="texto_projeto" class="text-right mt-[40px] float-right text-justify text-[#080E45] text-[{{ $numb_font }}px]">Mundialmente as doenças respiratórias crônicas têm uma alta taxa de internação hospitalar e mortalidade. Alguns exemplos importantes dessas doenças são a Doença Pulmonar Obstrutiva Crônica (DPOC), a asma, a >fibrose cística, a bronquiectasia e a fibrose pulmonar. Aqui no RespiraSaúde vamos falar, de uma forma muito simples, sobre a pesquisa que foi realizada pelo nosso time de pesquisadores em parceria com o Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq) e Ministério da Saúde (MS). Nesta pesquisa nós realizamos uma revisão sistemática com o objetivo de comparar os efeitos da assistência domiciliar com a assistência hospitalar para pessoas com doenças respiratórias crônicas.</p>
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
                <div id="imagem_bloco1-pj1" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco1" class="w-[50%] h-[630px] px-[80px] bg-[#fafafa] float-left inline-block">
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <p id="titulo_bloco1" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Vamos entender a importância da pesquisa</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Mundialmente as doenças respiratórias crônicas têm uma alta taxa de internação hospitalar e mortalidade. Alguns exemplos importantes dessas doenças são a <a href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'dpoc']) }}"><b id="DPOC" class="text-[#080E45]">Doença Pulmonar Obstrutiva Crônica (DPOC)</b></a>, a <a href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'asma']) }}"><b id="asma" class="text-[#080E45]">asma</b></a>, a <a href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'fibrose_cistica']) }}"><b id="fibrose" class="text-[#080E45]">fibrose cística</b></a>, a <a href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'bronquiectasia']) }}"><b id="bronquiectasia" class="text-[#080E45]">bronquiectasia</b></a> e a <a href="{{ route('pag_doencas', ['tipo' => 'cronicas', 'doenca' => 'fibrose_pulmonar']) }}"><b id="pulmonar" class="text-[#080E45]">fibrose pulmonar</b></a>.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Aqui no <b>RespiraSaúde</b> vamos falar, de uma forma muito simples, sobre a pesquisa que foi realizada pelo nosso time de pesquisadores em parceria com o Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq) e Ministério da Saúde (MS).</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Nesta pesquisa nós realizamos uma <b class="text-[#080E45]">revisão sistemática</b></a> com o objetivo de comparar os efeitos da assistência domiciliar com a assistência hospitalar para pessoas com doenças respiratórias crônicas.</p>
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
                <div id="imagem_bloco2-pj1b" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
    </div>
</section>


{{-- BLOCO EXEMPLO metodo --}}
<section class="w-[100%] mt-[-5px] inline-block">
    {{--  --}}
    <div id="container_bloco1" class="w-[100%] inline-block">
        {{--  --}}
        <div id="lado_a_bloco1" style="background: linear-gradient(90deg, rgba(238,238,238,1) 27%, rgba(250,250,250,1) 27%);" class="w-[50%] h-[630px] pl-[80px] float-left inline-block">
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <div id="imagem_bloco1-pj1a" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
            </div>
        </div>
        {{--  --}}
        <div id="lado_b_bloco1" class="w-[50%] h-[830px] px-[80px] bg-[#fafafa] float-left inline-block">
            {{--  --}}
            <div id="container_inner_bloco1" class="w-[100%] inline-block">
                {{--  --}}
                <p id="titulo_bloco1" class="text-[25px] font-bold mb-[40px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Método</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Primeiro, nós identificamos os estudos que compararam os efeitos destes dois tipos de tratamento nos resultados de mortalidade, qualidade de vida, satisfação do paciente, custos do tratamento, eventos adversos[o], tempo de permanência no hospital, entre outros. Esses estudos poderiam ter sido publicados em qualquer ano e em qualquer país do mundo.</b>.</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Depois que reunimos os estudos que tinham as características necessárias para entrar na revisão, nós realizamos uma análise estatística chamada metanálise[p]. Assim, foi possível juntar os resultados de vários estudos que avaliaram as mesmas coisas que nós tínhamos interesse (mortalidade, qualidade de vida, satisfação, custos, eventos adversos...). Dessa forma, dá para comparar melhor os efeitos do tratamento recebido em casa com o recebido no hospital.(MS).</p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Entendeu como a revisão sistemática é legal? Assim, ao invés de termos os resultados de apenas um estudo com poucos pacientes, nós conseguimos reunir os resultados de vários estudos e muitos pacientes! Mas isso não é simples, é necessário seguir uma metodologia muito rigorosa! E tem mais... </p>
                <p id="text_projeto3" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">É necessário avaliar muito bem esse conjunto de resultados, de vários estudos, para entendermos o quanto nós podemos confiar neles!

                    Agora que você já sabe o objetivo da pesquisa, já conhece melhor as principais doenças respiratórias crônicas e, também como essa revisão sistemática foi feita, vamos saber quais foram os resultados! Estão curiosos?</p>
            </div>
        </div>
    </div>
</section>

{{-- BLOCO resultado --}}

<section class="w-[100%] mt-[-5px] inline-block">
    {{--  --}}
    <div id="container_bloco2" class="w-[100%] inline-block">
        {{--  --}}
        <div id="lado_b_bloco1"  class="w-[50%] h-[630px] px-[80px] inline-block float-left">
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
                <div id="imagem_bloco2-pj1" class="w-[100%] h-[400px] bg-[purple] mt-[100px]"></div>
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
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'joubert']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'tacito']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'cleia']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'sara']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'zenewton']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'karla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                            <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                        </div>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div id="imagem_pesq_mob" style="background-image: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
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
                            <a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
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
                            <a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
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
                        < class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
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
                        < class="w-[20%] inline-block float-left">
                            {{--  --}}
                            <a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
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

            </div>
        </div>
        @endif

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
