@php
    // CONTROLE DE FONTE
    $session_font    = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font   = session('font');
    }
    else{
        $numb_font   = 15;
    }

    // RESGATE DE ID PESQUISADOR
    @$get_pesquisadr = $_GET['pesquisador'];

    // URL DE RETORNO
    @$return_link    = $_SERVER["REQUEST_URI"];
    @$explode_link   = explode("/", $return_link);
    @$pagina_projet  = $explode_link[3];

    // RESGATE DE PESQUISADORES
    // $pesquis_conct   = Illuminate\Support\Facades\DB::select("SELECT * FROM conect_pesquisas WHERE pesquisa = '$pagina_projet'");
    // $count_conects   = count($pesquis_conct);

    // PDO
    $name_banco      = "laire_temp";
    $conectDB        = 'mysql:host=db4free.net;dbname='.$name_banco;
    $name_user       = "laire_ufrn";
    $pass_banco      = "Laire@2023";

    $conn            = new PDO($conectDB, $name_user, $pass_banco);

    // PDO RESGATE DE CONTEÚDO
    $stmt            = $conn->prepare('SELECT * FROM conect_pesquisas WHERE pesquisa = :pesquisa');
    $stmt->execute(array('pesquisa' => $pagina_projet));
    $pesquis_conct   = $stmt->fetchAll();
    $count_conects   = count($pesquis_conct);

@endphp
{{--  --}}
@if ($count_conects > 0)
{{--  --}}
<section  class="w-[100%] inline-block">
    {{--  --}}
    <div class="w-[95%] h-[600px] mx-[2.5%] my-[40px] inline-block">
        {{--  --}}
        <center>
            <p id="pesquisadores" class="font-bold text-[#212121] text-[30px] border-b-[1px] w-[200px] pb-[20px]">Pesquisadores</p>
            {{--  --}}
            <div class="w-[100%] inline-block">
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
            {{--  --}}
            @foreach ($pesquis_conct as $conexoes)
            @php
                // ID DO PESQUISADOR DA PESQUISA
                $id_pesquisadr = $conexoes['pesquisador'];

                // BUSCA DE PESQUISADORES DA PESQUISA
                // $pesquisador   = Illuminate\Support\Facades\DB::select("SELECT * FROM pesquisadors WHERE id = '$id_pesquisadr'");

                // PDO RESGATE DE CONTEÚDO
                $stmt = $conn->prepare('SELECT * FROM pesquisadors WHERE id = :id');
                $stmt->execute(array('id' => $id_pesquisadr));
                $sony = $stmt->fetchAll();

                foreach ($sony as $pesquisador) {}

            @endphp
            {{-- CARD PESQUISADOR --}}
            <div id="pesquisador1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] bg-[#fafafa] shadow-lg h-[350px] inline-block border-t-[5px] border-t-[orange]">
                    {{--  --}}
                    <div style="background: url('/img/pesquisadores/{{ $pesquisador['imagem'] }}'); background-size: 100%; background-position: center;" class="w-[150px] h-[150px] rounded-[100px] mt-[50px] bg-[#FFC122] mx-auto transform hover:scale-110 transition duration-300 border-[1px]"></div>
                    {{--  --}}
                    <div class="w-[90%] mx-[5%] mt-[20px] inline-block">
                        {{--  --}}
                        <p class="font-bold text-center text-[15px]">{{ $pesquisador['nome'] }}</p>
                        {{--  --}}
                        @if (isset($pesquisador['referencia']) AND !empty($pesquisador['referencia']))
                            {{--  --}}
                            <p class="text-[#212121] text-center text-[16px]">{{ $pesquisador['referencia'] }}</p>
                        @endif
                    </div>
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="{{ route('modal_pesquisador', ['id' => $pesquisador['id'], 'pag' => $pagina_projet]) }}#pesquisadores"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">ver bio ➜</p></a>
                </div>
            </div>
            @endforeach
            {{-- MODAL PESQUISADORES --}}
            @if (isset($get_pesquisadr) AND !empty($get_pesquisadr))
            {{--  --}}
            @php
                // BUSCA DE PESQUISADORES DA PESQUISA
                // $info_pesquisador = Illuminate\Support\Facades\DB::select("SELECT * FROM pesquisadors WHERE id = '$get_pesquisadr'");

                // PDO RESGATE DE CONTEÚDO
                $stmt = $conn->prepare('SELECT * FROM pesquisadors WHERE id = :id');
                $stmt->execute(array('id' => $get_pesquisadr));
                $info_pesquisador = $stmt->fetchAll();

            @endphp
            {{--  --}}
            <div class="modal_pesquisadores">
                {{--  --}}
                <div class="w-[1000px] h-[500px] mt-[10%] mx-auto bg-[#ffffff] p-[40px]">
                    {{--  --}}
                    <div class="w-[100%] inline-block">
                        {{--  --}}
                        <div class="w-[80%] inline-block float-left">
                            {{--  --}}
                            <p class="font-bold text-[20px]">{{ $info_pesquisador['nome'] }}</p>
                            {{--  --}}
                            @if ($info_pesquisador['categoria'] == "professor")
                            {{--  --}}
                            <p class="text-[15px]">Professor</p>
                            {{--  --}}
                            @elseif($info_pesquisador['categoria'] == "pesquisador")
                            {{--  --}}
                            <p class="text-[15px]">Pesquisador</p>
                            {{--  --}}
                            @elseif($info_pesquisador['categoria'] == "aic")
                            {{--  --}}
                            <p class="text-[15px]">Aluno de Iniciação Científica</p>
                            {{--  --}}
                            @elseif($info_pesquisador['categoria'] == "am")
                            {{--  --}}
                            <p class="text-[15px]">Aluno de Mestrado</p>
                            {{--  --}}
                            @elseif($info_pesquisador['categoria'] == "ad")
                            {{--  --}}
                            <p class="text-[15px]">Aluno de Doutorado</p>
                            @endif
                        </div>
                        {{--  --}}
                        <div class="w-[20%] inline-block float-left"><a href="{{ route('projeto1') }}#pesquisadores"><p class="float-right text-[16px] cursor-pointer">✕</p></a></div>
                    </div>
                    {{--  --}}
                    <div class="w-[80%] mx-[10%] inline-block">
                        <center>
                            {{--  --}}
                            <div style="background: url('/img/pesquisadores/{{ $info_pesquisador['imagem'] }}'); background-size: 100%;" class="w-[150px] h-[150px] mt-[-50px] rounded-[100px] bg-[silver]"></div>
                        </center>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[170px]">
                            {{--  --}}
                            <p class="text-center leading-[17px] text-justify mt-[20px]">{{ $info_pesquisador['descricao'] }}</p>
                        </div>
                        {{--  --}}
                        <div class="w-[100%] inline-block h-[60px]">
                            <center>
                                {{--  --}}
                                <ul class="mt-[30px] ml-[20px]">
                                    <li class="inline-block mr-[20px]"><a href="{{ $info_pesquisador['link_lattes'] }}" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Currículo Lattes</button></a></li>
                                    <li class="inline-block mr-[20px]"><a href="{{ $info_pesquisador['link_orcid'] }}" target="blank_"><button class="px-[30px] h-[40px] rounded-[100px] text-[13px] text-[#080E45] bg-[#00FF8C]">Link ORCID</button></a></li>
                                </ul>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>
@endif
