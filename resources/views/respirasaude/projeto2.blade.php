@extends('respirasaude.layout.main_projeto2')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

{{-- FONT --}}
@php
    // FUNÇÃO FONTE
    $session_font = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }

    // RESGATE DE RESUMO
    // $resumo    = Illuminate\Support\Facades\DB::select("SELECT * FROM conteudos WHERE pagina = 2 AND bloco = 1");
    // $count1    = count($resumo);

    // @$texto_resumo = $resumo[0]->texto;

    // RESGATE DE OBJETIVO
    // $objetivo  = Illuminate\Support\Facades\DB::select("SELECT * FROM conteudos WHERE pagina = 2 AND bloco = 3");
    // $count2    = count($objetivo);

    // @$texto_objetivo = $objetivo[0]->texto;

    // RESGATE DE OBJETIVO
    // $resultado = Illuminate\Support\Facades\DB::select("SELECT * FROM conteudos WHERE pagina = 2 AND bloco = 5");
    // $count3    = count($resultado);

    // @$texto_resultado1 = $resultado[0]->texto;
    // @$texto_resultado2 = $resultado[0]->texto2;
    // @$texto_resultado3 = $resultado[0]->texto3;
    // @$texto_resultado4 = $resultado[0]->texto4;
    // @$texto_resultado5 = $resultado[0]->texto5;

@endphp
{{--  --}}

{{-- especifico doencias respiratórias agudas e (tópicos + barreiras e facilitadores) --}}

{{-- SECTION --}}
<section class="w-[100%] inline-block mt-[100px]">
    {{--  --}}
    <div  class="w-[100%] bg-[#eeeeee] inline-block">
        {{--  --}}
        <div   id="caixa_cinza_projeto2" class="w-[50%] pl-[5%] h-[700px] inline-block float-left">
            {{--  --}}
            <div id="caixa_cinza_projeto2" class="w-[750px] mt-[80px] inline-block bg-[silver] absolute h-[420px]">

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
            <div class="w-[100%] inline-block mt-[495px]">
                {{--  --}}
                <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px] " src="/img/6.png" alt=""></li>
                <li class="inline-block mr-[40px] my-[10px]"><img class="w-[140px]" src="/img/7.png" alt=""></li>
                <li class="inline-block mr-[80px] my-[10px]"><img class="w-[140px] " src="/img/LAIRE para fundo claro.png" alt=""></li>
                <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px]" src="/img/ppgfis.png" alt=""></li>
                <li class="inline-block mr-[40px] my-[10px]"><img class="w-[105px] " src="/img/9.png" alt=""></li>


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
            <p id="text_projeto2_0" class="text-[30px] mt-[50px] leading-[30px] float-right text-right w-[500px] font-bold text-[#080E45]">Soluções para aumentar a aceitabilidade, adesão e cumprimento das medidas de prevenção e controle da covid-19 na população.</p>
            {{--  --}}

            <p id="text_projeto_2" class="text-right mt-[40px] float-right text-justify w-[550px] text-[#080E45] text-[{{ $numb_font }}px]"> Esta pesquisa está sendo financiada pelo Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq), Ministério da Ciência, Tecnologia, Inovações e Comunicações (MCTIC) e Ministério da Saúde (MS). O seu objetivo é propor soluções para que a população seja capaz de aumentar a sua adesão às medidas de prevenção e controle da COVID-19 e outras doenças respiratórias contagiosas. Para isso, realizaremos uma importante e extensa revisão sistemática para compreender as barreiras e facilitadores da adesão às medidas de prevenção e controle a nível mundial. Posteriormente, a partir do desenvolvimento, validação a aplicação do questionário ADHERE no território nacional.</p>

        </div>
    </div>
</section>
{{-- IMPORTÂNCIA --}}
<section id="agudas" class="w-[100%] inline-block">
    {{--  --}}
    <div id="caixa_cinza_projeto2-1" class="w-[20%] inline-block float-left h-[700px] bg-[#fafafa]">
        {{--  --}}
        <div class="w-[800px] h-[440px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div id="importacncia_projeto2" class="w-[80%] inline-block float-left h-[700px] pl-[550px] pr-[80px] bg-[#fafafa]">

        <p  class="text-[25px] font-bold mb-[40px] mt-[70px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Vamos entender a importância da pesquisa</p>
        <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Algumas doenças respiratórias infecciosas matam milhares de brasileiros todos os anos, pois elas são contagiosas e passam de uma pessoa para outra muito facilmente através da respiração, tosse, espirros e mãos contaminadas.</p>
        <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Então, saber um pouco mais sobre essas doenças é muito importante. Precisamos entender como elas são transmitidas, quais são os seus sintomas e principalmente, como podemos nos proteger do contágio. Então, pense conosco... se nós conhecermos melhor essas doenças, e como nós podemos nos proteger delas, será possível diminuir a <b>mortalidade</b> no nosso país!</p>
        <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Vamos dar agora alguns exemplos de doenças respiratórias que são contagiosas, algumas delas você já deve conhecer, outras talvez não. Vamos lá!</p>
        <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Você já ouviu falar em <b>pneumonia</b>, <b>tuberculose</b>, <b>H1N1</b>, <b>bronquiolite</b>, <b>influenza</b>, <b>coqueluche</b>, <b>COVID-19</b></p>
        <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">Vamos compartilhar aqui de uma forma muito simples, como esta pesquisa está acontecendo e os seus resultados. Ela está sendo realizada com o apoio do Ministério da Saúde, CNPq... <b>Ver mais</b> </p>
        <p id="text_projeto2" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">O objetivo da pesquisa é: <b>Propor soluções para que a população seja capaz de aumentar a prevenção dessas doenças respiratórias contagiosas</b>.</p>
    </div>
    {{--  --}}
</section>

{{-- OBJETIVO --}}
<section id="cronicas" class="w-[100%] mb-[40px] inline-block">
    {{--  --}}
    <div id="objetivo"  id="text_solucoes"  class="w-[80%] pr-[650px] pl-[75px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[20px] mt-[310px] pl-[20px] border-l-[3px] border-l-[#00FF8C]"> Objetivo da pesquisa</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px] text-justify">Propor soluções para que a população seja capaz de aumentar a sua adesão às medidas de prevenção e controle da COVID-19 e outras doenças respiratórias contagiosas.</p>

    </div>
    {{--  --}}
    <div id="cx_azul_solucao" class="w-[20%] inline-block float-left h-[700px] bg-[#5CD1FF]">
        {{--  --}}
        <div id="cx_cinza_solucao" class="w-[800px] h-[440px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
    </div>
</section>

<section id="agudas" class="w-[100%] inline-block">
    {{--  --}}
    <div id="caixa_cinza_projeto2-1" class="w-[20%] inline-block float-left h-[700px] bg-[#fafafa]">
        {{--  --}}
        <div id="caixa_cinza_projeto2-1" class="w-[800px] h-[440px] bg-[silver] absolute mt-[10%]"></div>
    </div>
    {{--  --}}
    <div id="text_projeto_resultado" class="w-[80%] pl-[580px] pr-[80px] inline-block float-left h-[700px] bg-[#ffffff]">
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
</section>

{{-- RESULTADOS --}}
<section id="cronicas" class="w-[100%] mb-[40px] inline-block">
    {{--  --}}
    <div id="objetivo"  id="text_solucoes"  class="w-[80%] pr-[650px] pl-[75px] inline-block float-left h-[700px] bg-[#ffffff]">
        {{--  --}}
        <p id="text_projeto2_resultado" class="text-[25px] font-bold mb-[40px] mt-[80px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Resultados</p>
        {{--  --}}
        {{-- REMOVER ESSA PARTE --}}
        {{-- @if ($count3 > 0) --}}
            {{--  --}}
            {{-- <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">{{ $texto_resultado1 }}</p> --}}
            {{--  --}}
            {{-- @if (isset($texto_resultado2) AND !empty($texto_resultado2)) --}}
            {{-- <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">{{ $texto_resultado2 }}</p> --}}
            {{-- @endif --}}
            {{--  --}}
            {{-- @if (isset($texto_resultado3) AND !empty($texto_resultado3)) --}}
            {{-- <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">{{ $texto_resultado3 }}</p> --}}
            {{-- @endif --}}
            {{--  --}}
            {{-- @if (isset($texto_resultado4) AND !empty($texto_resultado4)) --}}
            {{-- <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">{{ $texto_resultado4 }}</p> --}}
            {{-- @endif --}}
            {{--  --}}
            {{-- @if (isset($texto_resultado5) AND !empty($texto_resultado5)) --}}
            {{-- <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">{{ $texto_resultado5 }}</p> --}}
            {{-- @endif --}}
        {{-- @endif --}}
        {{-- SUBSTITUIR  POR TEXTO DO RESUMO DO PROJETO 2 --}}
        <p id="text_projeto2_resultado" class="mb-[20px] text-justify text-[{{ $numb_font }}px]">TEXTO AQUI</p>
    </div>
    {{--  --}}
    <div id="cx_azul_solucao" class="w-[20%] inline-block float-left h-[700px] bg-[#5CD1FF]">
        {{--  --}}
        <div id="cx_cinza_solucao" class="w-[800px] h-[440px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
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
                    <a href="{{ route('pesquisadores_projeto_2', ['tipo' => 'professor', 'nome' => 'thayla']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                    <a href="{{ route('pesquisadores_projeto_2', ['tipo' => 'colaboradora_externa', 'nome' => 'gabriela']) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>

            {{-- MODAL --}}
            @if(isset($pesquisador) AND !empty($pesquisador))
            {{--  --}}
            <div class="modal_pesquisadores">
                {{--  --}}
                <div class="w-[1000px] h-[500px] mt-[10%] mx-auto bg-[#ffffff] p-[40px]">

                    {{-- CONTEÚDO SARAH --}}
                    @if($pesquisador == "tacito")
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold text-[20px]">Tácito Zaildo</p>
                            {{--  --}}
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto2') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                    </div>
                    {{--  --}}
                    <div class="w-[80%] mx-[10%] inline-block">
                        <center>
                            {{--  --}}
                            <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-50px] rounded-[100px] bg-[silver]"></div>
                        </center>
                        {{--  --}}
                        <div class="w-[100%] overflow-scroll inline-block mt-[20px] h-[170px]">
                            {{--  --}}
                            <p class="text-center leading-[17px] text-justify">Tácito Santos é Fisioterapeuta graduado pela Universidade Estadual da Paraíba (UEPB), Mestre em Fisioterapia na área de Avaliação e Intervenção nos Sistemas Cardiovascular e Respiratório (UFRN), Doutorando em Fisioterapia pela UFRN. Possui pós-graduação lato-sensu em Saúde Coletiva (FIP-PB), pós-graduação lato sensu em Terapia Intensiva (CEFAPP-PE). Especialista profissional em Terapia Intensiva Neonatal e Pediátrica pelo COFFITO/ASSOBRAFIR. Servidor público estatutário no Hospital Pediátrico Maria Alice Fernandes SESAP/RN. Possui experiências adicionais como docente em educação superior pública e privada na área de avaliação e intervenção em Fisioterapia Cardiovascular e Respiratória/Terapia Intensiva, ministrando disciplinas teórico-práticas como: Terapia Intensiva, Respiratória, Cardiovascular, Ética e Deontologia em Fisioterapia na Atenção Primária. Linhas de interesse para pesquisa: avaliação cinético-funcional e intervenção não farmacológica em doenças cardiovasculares, neuromusculares e respiratórias pediátricas. Participa como colaborador de projetos de pesquisa e extensão na área de Avaliação e Intervenção em Fisioterapia Respiratória, desenvolvimento, tradução, adaptação transcultural e avaliação das propriedades psicométricas de instrumentos de medida em saúde.</p>
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[60px]">
                            <center>
                                {{--  --}}
                                <ul class="mt-[30px] ml-[20px]">
                                    <li class="inline-block mr-[20px]"><a href="http://lattes.cnpq.br/0614300074220357" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Currículo Lattes</button></a></li>
                                    <li class="inline-block mr-[20px]"><a href="https://orcid.org/my-orcid?orcid=0000-0002-9495-7078" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Link ORCID</button></a></li>
                                </ul>
                            </center>
                        </div>
                    </div>
                    @endif

                    {{-- CONTEÚDO THAYLA --}}
                    @if($pesquisador == "thayla")
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold text-[20px]">Thayla Amorim Santino</p>
                            {{--  --}}
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                    </div>
                    {{--  --}}
                    <div class="w-[80%] mx-[10%] inline-block">
                        <center>
                            {{--  --}}
                            <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-50px] rounded-[100px] bg-[silver]"></div>
                        </center>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[170px]">
                            {{--  --}}
                            <p class="text-center leading-[17px] text-justify mt-[20px]">Thayla Amorim Santino é fisioterapeuta formada pela Universidade Estadual da Paraíba, especialista em Fisioterapia Respiratória (ASSOBRAFIR/COFFITO) e em Informática em Saúde pela Universidade Federal de São Paulo, mestre e doutora pelo Programa de Pós-Graduação em Fisioterapia pela Universidade Federal do Rio Grande do Norte. Atualmente é professora do Departamento de Fisioterapia da Universidade Estadual da Paraíba e pesquisadora do Instituto de Pesquisa Professor Joaquim Amorim Neto. Participa como colaboradora de projetos de pesquisa e extensão na área de Avaliação e Intervenção em Fisioterapia Respiratória, desenvolvimento, tradução, adaptação transcultural e avaliação das propriedades psicométricas de instrumentos de medida em saúde. Além disso, é pesquisadora colaboradora no Person-Centred Health Informatics Research Lab vinculado à McGill University (Montreal, Canadá).</p>
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[60px]">
                            <center>
                                {{--  --}}
                                <ul class="mt-[30px] ml-[20px]">
                                    <li class="inline-block mr-[20px]"><a href="http://lattes.cnpq.br/7500827180804952" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Currículo Lattes</button></a></li>
                                    <li class="inline-block mr-[20px]"><a href="https://orcid.org/0000-0002-5514-762X" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Link ORCID</button></a></li>
                                </ul>
                            </center>
                        </div>
                    </div>
                    @endif

                    {{-- CONTEÚDO THAYLA --}}
                    @if($pesquisador == "gabriela")
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold text-[20px]">Gabriela Chaves</p>
                            {{--  --}}
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                    </div>
                    {{--  --}}
                    <div class="w-[80%] mx-[10%] inline-block">
                        <center>
                            {{--  --}}
                            <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-50px] rounded-[100px] bg-[silver]"></div>
                        </center>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[170px]">
                            {{--  --}}
                            <p class="text-center leading-[17px] text-justify mt-[20px]">Gabriela Chaves, fisioterapeuta formada pela UFRN. Mestrado em Fisioterapia pela UFRN, Doutorado em Ciências da Reabilitação pela UFMG. Pós doutorado em dor e envelhecimento pela York University (Toronto/Canadá). Atualmente trabalha como pesquisadora na empresa Myant Inc. (Toronto/Canadá). Colaboradora nas Revisões Sistemáticas e metanálises na área de avaliação e intervenção em Fisioterapia respiratória.</p>
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[60px]">
                            <center>
                                {{--  --}}
                                <ul class="mt-[30px] ml-[20px]">
                                    <li class="inline-block mr-[20px]"><a href="http://lattes.cnpq.br/7725252810522161" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Currículo Lattes</button></a></li>
                                    <li class="inline-block mr-[20px]"><a href="https://orcid.org/0000-0002-7737-8015" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Link ORCID</button></a></li>
                                </ul>
                            </center>
                        </div>
                    </div>
                    @endif

                    {{-- CONTEÚDO THAYLA --}}
                    @if($pesquisador == "nome_pesquisador_aqui")
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold text-[20px]">Nome Pesquisador Aqui</p>
                            {{--  --}}
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                    </div>
                    {{--  --}}
                    <div class="w-[80%] mx-[10%] inline-block">
                        <center>
                            {{--  --}}
                            <div style="background: url('/img/pesquisadores/imagem.png'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-50px] rounded-[100px] bg-[silver]"></div>
                        </center>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[170px]">
                            {{--  --}}
                            <p class="text-center leading-[17px] text-justify mt-[20px]">DESCRIÇÃO DO PESQUISADOR AQUI.</p>
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[60px]">
                            <center>
                                {{--  --}}
                                <ul class="mt-[30px] ml-[20px]">
                                    <li class="inline-block mr-[20px]"><a href="LINK1" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Currículo Lattes</button></a></li>
                                    <li class="inline-block mr-[20px]"><a href="LINK2" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Link ORCID</button></a></li>
                                </ul>
                            </center>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endif
        </div>
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
<!--patrocinadores-->
<section class="w-[100%] h-[600px] inline-block bg-[#ffffff]">
    {{--  --}}
    <div class="w-[90%] mx-[5%] mt-[10%] inline-block">
        {{--  --}}
        <center>
            {{--  --}}
            <ul>
                 <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/9.png" alt=""></li>
                 <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/6.png" alt=""></li>
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/ppgfis.png" alt=""></li>
                 <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/7.png" alt=""></li>
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/2.png" alt=""></li> --}}
                <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/4.png" alt=""></li>
                {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/10.png" alt=""></li> --}}
            </ul>
        </center>
    </div>
</section>

@endsection
