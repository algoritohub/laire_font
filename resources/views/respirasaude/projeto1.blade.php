@extends('respirasaude.layout.main_projeto1')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

{{--  --}}
@php
    // FUNÇÃO FONTE
    $session_font = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }

    else{
        $numb_font = 15;
    }

    // RESGATE DE PUBLICAÇÃO
    // $resumo   = Illuminate\Support\Facades\DB::select("SELECT * FROM conteudos WHERE pagina = 1 AND bloco = 1");
    // $count1   = count($resumo);

    // @$texto_resumo_eng = $resumo[0]->texto_eng;
    // @$texto_resumo     = $resumo[0]->texto;

    // RESGATE DE SESSÃO DE IDIOMA
    // @$session_idioma   = session('idioma');

@endphp

{{-- SECTION --}}
<section class="w-[100%] inline-block mt-[100px]">
    {{--  --}}
    <div class="w-[100%] bg-[#eeeeee] inline-block">
        {{--  --}}
        <div id="cx_cinza" class="w-[50%] pl-[5%] h-[700px] inline-block float-left">

            {{--  --}}
            <p class="uppercase text-[12px] font-bold text-[#080E45] mt-[50px]"></p>
            {{--  --}}
            <div id="caixa_cinza_projeto1" class="w-[750px] mt-[60px] inline-block bg-[silver] absolute h-[400px]">
                 {{--  --}}
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
            {{--  --}}
            <div class="w-[100%] inline-block mt-[480px]">
                {{--  --}}
                <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px] " src="/img/6.png" alt=""></li>
                <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px]" src="/img/4.png" alt=""></li>
                <li class="inline-block mr-[80px] my-[10px]"><img class="w-[140px] " src="/img/LAIRE para fundo claro.png" alt=""></li>
                <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px]" src="/img/ppgfis.png" alt=""></li>
                <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px] " src="/img/9.png" alt=""></li>
                <li class="inline-block mr-[40px] my-[10px]"><img class="w-[250px] " src="/img/10.png" alt=""></li>

            </div>
        </div>
        {{--  --}}
        <div id="cx_azul_text"  class="w-[50%] pr-[5%] h-[700px] pt-[30px] inline-block float-left bg-[#5CD1FF]">
            {{--  --}}
            <ul class="float-right">
                {{--  --}}
                {{-- <li class="ml-[25px] inline-block"><a href="#" class="text-[#212121] font-bold text-[14px]" title="Efeitos da atenção domiciliar para adultos com doenças respiratórias crônicas e síndrome pós-covid-19 na rotatividade hospitalar: uma revisão sistemática com metanálise">Efeitos da atenção domiciliar para adultos...</a></li> --}}
                {{-- <li class="ml-[25px] inline-block"><a href="#" class="text-[#212121] font-bold text-[14px]" title="Soluções para aumentar a aceitabilidade, adesão e cumprimento das medidas de prevenção e controle da covid-19 na população">Soluções para aumentar a aceitabilidade...</a></li> --}}
                {{-- <li class="ml-[25px] inline-block"><a href="#" class="text-[#212121] font-bold text-[14px]" title="Desenvolvimento e validação de um sistema eletrônico para Avaliação, Suporte e Monitoramento da Asma (e-ASMA)">Desenvolvimento e validação de um sistema...</a></li> --}}
            </ul>
            {{--  --}}
            <p id="text_projeto_0" class="text-[30px] leading-[30px] float-right mt-[60px] text-right w-[500px] font-bold text-[#080E45]">Efeitos da atenção domiciliar para adultos com doenças respiratórias crônicas e síndrome pós-covid-19 na rotatividade hospitalar: uma revisão sistemática com metanálise</p>
            {{--  --}}
            <p id="text_projeto_1" class="text-right mt-[40px] float-right text-justify w-[550px] text-[#080E45] text-[{{ $numb_font }}px]">Mundialmente as doenças respiratórias crônicas têm uma alta taxa de internação hospitalar e mortalidade. Alguns exemplos importantes dessas doenças são a Doença Pulmonar Obstrutiva Crônica (DPOC), a asma, a fibrose cística, a bronquiectasia e a fibrose pulmonar . Aqui no RespiraSaúde vamos falar, de uma forma muito simples, sobre a pesquisa que foi realizada pelo nosso time de pesquisadores em parceria com o Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq) e Ministério da Saúde (MS). Nesta pesquisa nós realizamos uma revisão sistemática com o objetivo de comparar os efeitos da assistência domiciliar com a assistência hospitalar para pessoas com doenças respiratórias crônicas.</p>
            {{-- @if ($count1 > 0) --}}
                {{--  --}}
                {{-- @if (isset($session_idioma) AND !empty($session_idioma)) --}}
                    {{-- TEXTO INGLÊS --}}
                    {{-- <p id="text_projeto_1" class="text-right mt-[40px] float-right text-justify w-[550px] text-[#080E45] text-[{{ $numb_font }}px]">{{ $texto_resumo_eng }}</p> --}}
                {{-- @else --}}
                    {{-- TEXTO PORTUGUÊS --}}
                    {{-- <p id="text_projeto_1" class="text-right mt-[40px] float-right text-justify w-[550px] text-[#080E45] text-[{{ $numb_font }}px]">{{ $texto_resumo }}</p> --}}
                {{-- @endif --}}
            {{-- @endif --}}
        </div>
    </div>
</section>
{{-- IMPORTÂNCIA --}}
<section id="importancia" class="w-[100%] inline-block">
    {{--  --}}
    <div id="cx_cinza_barreira" class="w-[20%] inline-block float-left h-[700px] bg-[#fafafa]">
        {{--  --}}
        <div id="cx_cinza_barreira"  class="w-[800px] h-[440px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div id="text_barreira" class="w-[80%] pl-[580px] pr-[60px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[40px] mt-[180px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Vamos entender a importância da pesquisa</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Mundialmente as doenças respiratórias crônicas têm uma alta taxa de internação hospitalar e mortalidade. Alguns exemplos importantes dessas doenças são a <b class="cursor-pointer">Doença Pulmonar Obstrutiva Crônica (DPOC)</b>, a <b class="cursor-pointer">asma</b>, a <b class="cursor-pointer">fibrose cística</b>, a <b>bronquiectasia</b> e a <b>fibrose pulmonar</b>.</p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Aqui no <b>RespiraSaúde</b> vamos falar, de uma forma muito simples, sobre a pesquisa que foi realizada pelo nosso time de pesquisadores em parceria com o Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq) e Ministério da Saúde (MS). Nesta pesquisa nós realizamos uma <b>revisão</b>sistemática</b> com o objetivo de comparar os efeitos da assistência domiciliar com a assistência hospitalar para pessoas com doenças respiratórias crônicas. <b>Isso mesmo, nós comparamos os resultados do tratamento recebido em casa com o recebido no hospital!</b></p>
        {{-- <button class="px-[30px] mt-[20px] h-[40px] bg-[#080E45] text-[#00FF8C]">More information</button> --}}
    </div>
</section>
{{-- OBJETIVO --}}
<div id="objetivo"></div>
{{--  --}}
@php
    // OBJETIVO DE PUBLICAÇÃO
    // $objetivo_cnt = Illuminate\Support\Facades\DB::select("SELECT * FROM conteudos WHERE pagina = 1 AND bloco = 3");
    // $count2       = count($objetivo_cnt);

    // foreach ($objetivo_cnt as $objetivo) {}

    // @$texto_objetivo1      = $objetivo->texto;
    // @$texto_objetivo2      = $objetivo->texto2;
    // @$texto_objetivo3      = $objetivo->texto3;
    // @$texto_objetivo4      = $objetivo->texto4;
    // @$texto_objetivo5      = $objetivo->texto5;

    // @$texto_objetivo_eng_1 = $objetivo->texto_eng;
    // @$texto_objetivo_eng_2 = $objetivo->texto2_eng;
    // @$texto_objetivo_eng_3 = $objetivo->texto3_eng;
    // @$texto_objetivo_eng_4 = $objetivo->texto4_eng;
    // @$texto_objetivo_eng_5 = $objetivo->texto5_eng;

    // RESGATE DE SESSÃO DE IDIOMA
    // @$session_idioma = session('idioma');

@endphp
{{-- BLOCO DE INFORMATIVO --}}
<section id="cronicas" class="w-[100%] mb-[40px] inline-block">
    {{--  --}}
    <div id="objetivo" id="text_solucoes"  class="w-[80%] pr-[650px] pl-[75px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[20px] mt-[310px] pl-[20px] border-l-[3px] border-l-[#00FF8C]"> Objetivo da pesquisa</p>
        {{-- ELIMINAR ESSE CAMPO --}}
        {{-- @if($count2 > 0) --}}

            {{-- PRIMEIRO PARÁGRAFO --}}
            {{-- @if (isset($session_idioma) AND !empty($session_idioma)) --}}
                {{-- TEXTO INGLÊS --}}
                {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_1 }}</p> --}}
            {{-- @else --}}
                {{-- TEXTO PORTUGUÊS --}}
                {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo1 }}</p> --}}
            {{-- @endif --}}

            {{-- SEGUNDO PARÁGRAFO --}}
            {{-- @if (isset($texto_objetivo2) AND !empty($texto_objetivo2)) --}}
                {{--  --}}
                {{-- @if (isset($session_idioma) AND !empty($session_idioma)) --}}
                    {{-- TEXTO INGLÊS --}}
                    {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_2 }}</p> --}}
                {{-- @else --}}
                    {{-- TEXTO PORTUGUÊS --}}
                    {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo2 }}</p> --}}
                {{-- @endif --}}
            {{-- @endif --}}

            {{-- TERCEIRO PARÁGRAFO --}}
            {{-- @if (isset($texto_objetivo3) AND !empty($texto_objetivo3)) --}}
                {{--  --}}
                {{-- @if (isset($session_idioma) AND !empty($session_idioma)) --}}
                    {{-- TEXTO INGLÊS --}}
                    {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_3 }}</p> --}}
                {{-- @else --}}
                    {{-- TEXTO PORTUGUÊS --}}
                    {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo3 }}</p> --}}
                {{-- @endif --}}
            {{-- @endif --}}

            {{-- QUARTO PARÁGRAFO --}}
            {{-- @if (isset($texto_objetivo4) AND !empty($texto_objetivo4)) --}}
                {{--  --}}
                {{-- @if (isset($session_idioma) AND !empty($session_idioma)) --}}
                    {{-- TEXTO INGLÊS --}}
                    {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_4 }}</p> --}}
                {{-- @else --}}
                    {{-- TEXTO PORTUGUÊS --}}
                    {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo4 }}</p> --}}
                {{-- @endif --}}
            {{-- @endif --}}

            {{-- QUINTO PARÁGRAFO --}}
            {{-- @if (isset($texto_objetivo5) AND !empty($texto_objetivo5)) --}}
                {{--  --}}
                {{-- @if (isset($session_idioma) AND !empty($session_idioma)) --}}
                    {{-- TEXTO INGLÊS --}}
                    {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo_eng_5 }}</p> --}}
                {{-- @else --}}
                    {{-- TEXTO PORTUGUÊS --}}
                    {{-- <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">{{ $texto_objetivo5 }}</p> --}}
                {{-- @endif --}}
            {{-- @endif --}}
        {{-- @endif --}}
        {{-- ELIMINAR ESSE CAMPO --}}

        {{-- SUBSTITUIR PELO TEXTO DO OBJETIVO AQUI --}}
        <p id="metodo" class="mb-[20px] text-[{{ $numb_font }}px] text-justify">
            Comparar os efeitos da assistência domiciliar com a assistência hospitalar para pessoas com doenças respiratórias crônicas.
            </p>
    </div>
    {{--  --}}
    <div id="cx_azul_solucao" class="w-[20%] inline-block float-left h-[700px] bg-[#5CD1FF]">
        {{--  --}}
        <div id="cx_cinza_solucao" class="w-[800px] h-[440px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
    </div>
</section>

{{-- BLOCO DE INFORMATIVO --}}
<section id="metodos" class="w-[100%] inline-block">
    {{--  --}}
    <div id="caixa_cinza_facilidade" class="w-[20%] inline-block float-left h-[700px] bg-[#fafafa]">
        {{--  --}}
        <div id="caixa_cinza_facilidade" class="w-[800px] h-[440px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div id="text_resultado_facilidade" class="w-[80%] pl-[600px] pr-[60px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p  class="text-[25px] font-bold mb-[20px] mt-[90px] pl-[20px] mb-[20px] border-l-[3px] border-l-[#00FF8C]">Como a pesquisa foi feita</p>

        <p id="metodo" class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Primeiro, nós identificamos os estudos que compararam os efeitos destes dois tipos de tratamento nos resultados de <b>mortalidade</b>,<b> qualidade de vida</b>, <b>satisfação</b> do paciente, <b>custos</b> do tratamento, <b>eventos adversos</b>, tempo de permanência no hospital, entre outros. <b>Esses estudos poderiam ter sido publicados em qualquer ano e em qualquer país do mundo</b>.</p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Depois que reunimos os estudos que tinham as características necessárias para entrar na revisão, nós realizamos uma análise estatística chamada metanálise. Assim, foi possível juntar os resultados de vários estudos que avaliaram as mesmas coisas que nós tínhamos interesse (mortalidade, qualidade de vida, satisfação, custos, eventos adversos...). Dessa forma, dá para comparar melhor os efeitos  do  tratamento recebido em casa com o recebido no hospital</p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify"><b>Entendeu como a revisão sistemática é legal</b>? Assim, ao invés de termos os resultados de apenas um estudo com poucos pacientes, nós conseguimos reunir os resultados de vários estudos e muitos pacientes! Mas isso não é simples, é necessário seguir uma metodologia muito rigorosa! <b>E tem mais</b>... É necessário <b>avaliar</b> muito bem esse conjunto de resultados, de vários estudos, para entendermos o quanto nós podemos confiar neles! </p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Agora que vocês já sabem o objetivo da pesquisa, já conhecem melhor as principais doenças respiratórias crônicas e, também já entenderam como essa revisão sistemática foi feita, vamos saber quais foram os resultados! Estão curiosos?
        </p>
    </div>
</section>

<section id="cronicas" class="w-[100%] mb-[40px] inline-block">
    {{--  --}}
    <div id="objetivo" id="text_solucoes"  class="w-[80%] pr-[650px] pl-[75px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[40px] mt-[180px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Resultados</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">A revisão incluiu <b>13 estudos </b>presentando 1.056 pacientes com <b>asma, doença pulmonar obstrutiva crônica (DPOC) e fibrose cística.</b> As intervenções de atenção domiciliar avaliadas nos estudos foram: <b>consulta domiciliar</b>,<b> tratamento domiciliar de exacerbações, alta precoce, hospital em casa, antibioticoterapia domiciliar e programa de reabilitação domiciliar.</b></p>
        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Não encontramos evidências suficientes para recomendar a atenção domiciliar para adultos com doenças respiratórias crônicas. Entretanto, foi possível observar que os estudos, na sua maioria, <b>observaram que os pacientes tratados com atenção domiciliar tiveram menor taxa de readmissão no hospital, menos eventos adversos, menor mortalidade  e melhor estado funcional.</b></p>
        {{-- <button class="px-[30px] mt-[20px] h-[40px] bg-[#080E45] text-[#00FF8C]">More information</button> --}}
    </div>
    {{--  --}}
    <div id="cx_azul_solucao" class="w-[20%] inline-block float-left h-[700px] bg-[#5CD1FF]">
        {{--  --}}
        <div id="cx_cinza_solucao" class="w-[800px] h-[440px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
    </div>
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
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
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
                    <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
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
                                <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-block">
                            {{--  --}}
                            <div id="imagem_pesq_mob" style="background-image: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
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

                    {{-- CONTEÚDO THAYLA --}}
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
                                <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                            </div>
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-block">
                            {{--  --}}
                            <div id="imagem_pesq_mob" style="background-image: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-30px] rounded-[100px] bg-[#eeeeee] mx-auto"></div>
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
                </div>
            </div>
            @endif
        </div>
    </div>
</section>



<!--patrocinadores-->
<section class="w-[100%] h-[600px] inline-block bg-[#ffffff]">
    {{--  --}}
    <div class="w-[90%] mx-[5%] mt-[10%] inline-block">
        {{--  --}}
        <center>
            {{-- logos maiores --}}
            <ul>
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
