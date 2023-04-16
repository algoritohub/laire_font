@extends('respirasaude.layout.main')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

@php
    // FUNÇÃO DE FONT
    $session_font  = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }

    // BUSCAR DOENCAS RESPIRATÓRIAS AGUDAS
    //$doenca_agudas   = Illuminate\Support\Facades\DB::select("SELECT * FROM doencas WHERE tipo = 1");

    // BUSCAR DOENCAS RESPIRATÓRIAS CRÔNICAS
    //$doenca_cronicas = Illuminate\Support\Facades\DB::select("SELECT * FROM doencas WHERE tipo = 2");

@endphp
{{--  --}}
<section class="w-[100%] inline-block mt-[100px]">
    {{--  --}}
    <div class="w-[90%] mx-[5%] bg-[#ffffff] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block float-left">
            {{--  --}}
            <div class="w-[97%] mx-[1.5%] inline-block">
                {{--  --}}
                <p class="text-[30px] font-bold mt-[30px] pl-[15px] border-l-[3px] border-l-[#00FF8C]">Mapa do site</p>
            </div>
            {{--  --}}
            <div class="w-[100%] mt-[50px] mb-[30px] inline-block">
                {{--  --}}
                <div class="w-[47%] mx-[1.5%] border-[1px] rounded-[10px] border-[#cdcdcd] p-[30px] float-left inline-block">
                    {{--  --}}
                    <p class="text-[20px] font-bold pl-[15px] border-l-[3px] border-l-[#00FF8C]">Laire</p>
                    {{--  --}}
                    <ul id="menu_mapa" class="mt-[30px] float-left">
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] font-bold float-left mr-[5px]">Home</p></a> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] font-bold float-left mr-[5px]">Laboratório</p></a> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] font-bold float-left mr-[5px]">Equipe</p></a> </li>
                            {{--  --}}
                            <ul class="">
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">Professor</p></a></li>
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">Pesquisador internacional</p></a></li>
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">Aluno de iniciação científica</p></a></li>
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">Aluno de mestrado</p></a></li>
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">Aluno de doutorado</p></a></li>
                            </ul>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] font-bold float-left mr-[5px]">Parceiros</p></a> </li>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] font-bold float-left mr-[5px]">Pesquisas</p></a> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                    </ul>
                    <ul id="menu_mapa" class="mt-[30px] ml-[60px] float-left">
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] font-bold float-left mr-[5px]">Eventos</p></a> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                            {{--  --}}
                            <ul class="">
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">Encerrados</p></a></li>
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">Futuros</p></a></li>
                            </ul>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] font-bold float-left mr-[5px]">Notícias</p></a> <img src="/img/audio.png" class="w-[23px] float-left"> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] font-bold float-left mr-[5px]">Contato</p></a> </li>
                    </ul>
                </div>
                {{--  --}}
                <div class="w-[47%] mx-[1.5%] rounded-[10px] border-[1px] border-[#cdcdcd] p-[30px] float-left inline-block">
                    {{--  --}}
                    <p class="text-[20px] font-bold pl-[15px] border-l-[3px] border-l-[#00FF8C]">RespiraSaúde</p>
                    {{--  --}}
                    <ul id="menu_mapa" class="mt-[30px] float-left">
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] float-left font-bold mr-[5px]">Home</p></a> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] float-left font-bold mr-[5px]">Missão</p></a> <img src="/img/audio.png" class="w-[23px] float-left"> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] float-left font-bold mr-[5px]">Doenças respiratórias agudas</p></a> <img src="/img/audio.png" class="w-[23px] float-left"> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                            {{--  --}}
                           {{--< <ul class="">
                                @foreach ($doenca_agudas as $agudas)
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">{{ $agudas->nome }}</p></a></li>
                                @endforeach
                            </ul>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] float-left font-bold mr-[5px]">Doenças respiratórias crônicas</p></a> <img src="/img/audio.png" class="w-[23px] float-left"> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                            {{--  --}}
                          {{--  <ul class="">
                                @foreach ($doenca_cronicas as $cronicas)
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">{{ $cronicas->nome }}</p></a></li>
                                @endforeach
                            </ul>--}}


                            <ul class="">

                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]"></p>nome da Doença</p></a></li>

                            </ul>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] float-left font-bold mr-[5px]">Doenças respiratórias crônicas</p></a> <img src="/img/audio.png" class="w-[23px] float-left"> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                            {{--  --}}
                           <ul class="">

                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">nome da doença </p></a></li>

                            </ul>
                    </ul>
                    {{--  --}}
                    <ul class="mt-[30px] ml-[50px] float-left">
                        {{--  --}}
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] float-left font-bold mr-[5px]">Eventos</p></a> </li>
                            {{--  --}}
                            <ul class="">
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">Encerrados</p></a></li>
                                <li class="mb-[15px] ml-[20px] flex"><a href=""><p class="text-[15px] float-left mr-[5px]">Futuros</p></a></li>
                            </ul>
                        <li class="mb-[15px] flex"><a href=""><p class="text-[15px] float-left font-bold mr-[5px]">Projetos de extenção</p></a> <img src="/img/libra.png" class="w-[23px] float-left"></li>
                    </ul>
                </div>
                {{--  --}}
                <div style="display: none" class="w-[20.3%] mx-[1.5%] h-[600px] border-[1px] border-[#cdcdcd] p-[30px] float-left inline-block">
                    {{--  --}}
                    <p class="text-[20px] font-bold pl-[15px] border-l-[3px] border-l-[#00FF8C]">Blog</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
