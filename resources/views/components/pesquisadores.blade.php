@php
    // CONTROLE DE FONTE
    $session_font    = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font   = session('font');
    }
    else{
        $numb_font   = 15;
    }
@endphp
{{--  --}}
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
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'aluno_de_doutorado', 'nome' => 'sarah']) }}"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
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
                    <a href="{{ route('pesquisadores_projeto_1', ['tipo' => 'professor', 'nome' => 'thayla']) }}"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>

            {{-- MODAL --}}
            @if(isset($pesquisador) AND !empty($pesquisador))
            {{--  --}}
            <div class="modal_pesquisadores">
                {{--  --}}
                <div class="w-[1000px] h-[500px] mt-[10%] mx-auto bg-[#ffffff] p-[40px]">
                    @if($pesquisador == "thayla")
                    {{-- CONTEÚDO THAYLA --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold text-[20px]">Thayla Amorim Santino</p>
                            {{--  --}}
                            <p class="text-[13px] uppercase">{{ $categoria }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left"><a href=""><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
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
                            <p class="text-center leading-[17px] text-justify mt-[20px]">Fisioterapeuta graduada pela Universidade Federal do Rio Grande do Norte (UFRN) (2017), possui residência em Terapia Intensiva pelo Hospital Dom Helder Câmara (HDH) (2019), Mestrado acadêmico em Fisioterapia (UFRN) (2021) e Título de Especialista Profissional em Fisioterapia em Terapia Intensiva (ASSOBRAFIR/COFFITO) (2022). Atualmente cursa Doutorado em Fisioterapia pela UFRN, integrante do Laboratório de Avaliação e Intervenção Respiratória (LAIRE), ocupa o cargo público de fisioterapeuta no Hospital Barão de Lucena (HBL) - Secretaria Estadual de Saúde de Pernambuco (SES-PE), ocupa cargo de gestão como Coordenadora da equipe de Fisioterapia do Hospital Dom Helder Câmara. Tem experiência em pesquisas de tradução, adaptação transcultural e avaliação psicométrica de instrumentos em saúde; e revisões sistemáticas em saúde.</p>
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[60px]">
                            <center>
                                {{--  --}}
                                <ul class="mt-[30px] ml-[20px]">
                                    <li class="inline-block mr-[20px]"><a href="" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Currículo Lattes</button></a></li>
                                    <li class="inline-block mr-[20px]"><a href="" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Link ORCID</button></a></li>
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
