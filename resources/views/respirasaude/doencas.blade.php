@extends('respirasaude.layout.main_doenca')
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

    // RESGATE DE INFOMAÇÃO DA DOENÇA
    //$info_doenca   = Illuminate\Support\Facades\DB::select("SELECT * FROM doencas WHERE id = '$doenca'");

@endphp
{{-- SECTION --}}
<section class="w-[100%] mt-[-20px] inline-block">
    {{--  --}}
    <div id="missao" class="w-[100%] h-[110px]"></div>
    {{--  --}}
    <section class="w-[100%] inline-block">
        {{--  --}}
        <div id="caixa-cinza-1" class="w-[100%] bg-[#eeeeee] inline-block">
            {{--  --}}
            <div id="texto" class="w-[50%] pl-[5%] h-[600px] inline-block float-left">
                {{--  --}}
                <div id="box_audio" style="background: url('/img/TUBERCULOSE 01.jpg'); background-size: 100%; background-repeat: no-repeat;" class="w-[750px] mt-[140px] inline-block absolute h-[450px]"></div>
                {{--  --}}
                <div class="mt-[10%]"  style="display: none;" id="box_libra" class="w-[780px] inline-block absolute h-[450px]">
                    {{--  --}}
                    <video id="video_missao" class="w-[780px]" controls="controls">
                        <source src="/img/" type="video/mp4">
                    </video>
                </div>
                {{--  --}}
                <div class="w-[100%] h-[40px] mt-[50px]">
                    <ul class="">
                        <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                        <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                    </ul>
                </div>
            </div>
            {{--  --}}
            <div id="caixa_text_missao" class="w-[50%] pr-[5%] h-[700px] pt-[70px] inline-block float-left bg-[#5CD1FF]">
                {{--  --}}
                <p id="text_missao_RS" class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#0C3D7F]">{{ $info_doenca->nome }}</p>
                {{--  --}}
                <p id="text_missao_RS" class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-justify w-[550px] text-[#212121]">{{ $info_doenca->definicao }}</p>
            </div>
        </div>
    </section>

</section>
{{-- CONTROLE --}}
@if(isset($info_doenca->controle) AND !empty($info_doenca->controle))
<x-controle-doenca/>
@endif
{{-- TRATAMENTO --}}
@if(isset($info_doenca->tratamento) AND !empty($info_doenca->tratamento))
<x-doenca-tratamento/>
@endif
{{-- PUBLICAÇÕES --}}
<x-publicacoes-doencas/>
{{--  --}}
@endsection
