@extends('respirasaude.layout.main')
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

<div id="sobre" class="w-[100%] h-[110px]"></div>
{{--  --}}
<section class="w-[100%] inline-block">
    {{--  --}}
    <div class="w-[100%] bg-[#eeeeee] inline-block">
        {{--  --}}
        <div id="texto" class="w-[50%] pl-[5%] h-[600px] inline-block float-left">
            {{--  --}}
            <div id="box_audio" class="w-[650px] mt-[80px] inline-block bg-[blue] absolute h-[450px]"></div>
            <div style="display: none;" id="box_libra" class="w-[780px] mt-[80px] inline-block bg-[green] absolute h-[450px]"></div>
            {{--  --}}
            <div class="w-[100%] h-[40px] mt-[30px]">
                <ul class="">
                    <li class="mr-[2px] inline-block"><img id="audios" class="w-[39px] cursor-pointer" title="Escute o texto" src="/img/audio.png"></li>
                    <li class="mr-[2px] inline-block"><img id="libras" class="w-[40px] cursor-pointer" title="Ver libras" src="/img/libra.png"></li>
                </ul>
            </div>
        </div>
        {{--  --}}
        <div class="w-[50%] pr-[5%] h-[600px] pt-[70px] inline-block float-left bg-[#080E45]">
            {{--  --}}
            <p  class="text-[30px] leading-[30px] float-right text-right w-[500px] font-bold text-[#ffffff]">MISSÃO</p>
            {{--  --}}
            <p  class="text-right mt-[40px] text-[{{ $numb_font }}px] float-right text-right w-[550px] text-[#ffffff]">O RespiraSaúde é uma ponte entre o conhecimento produzido, através da ciência, e a comunicação com a sociedade. </p>
            <p class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-right w-[550px] text-[#ffffff]">A nossa missão é comunicar de forma simples e acessível, para todas as pessoas, os resultados de pesquisas importantes. Normalmente, os resultados de grandes pesquisas são publicados em jornais científicos e na grande maioria das vezes, em outros idiomas. Saiba aqui no RespiraSaúde como elas acontecem e compreenda os seus resultados. </p>
            <p class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-right w-[550px] text-[#ffffff]">Aqui, no RespiraSaúde estão disponíveis informações importantes e atualizadas sobre as principais doenças respiratórias agudas e crônicas. </p>
            <p class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-right w-[550px] text-[#ffffff]">Queremos que você entenda como elas acontecem no nosso corpo, e como podem ser prevenidas e tratadas.
                Neste canal você terá ainda, informações sobre os eventos abertos para a comunidade, além das oportunidades para participar de projetos de pesquisa e projetos de extensão no Laboratório de Avaliação e Intervenção Respiratória!
                </p>
            <p class="mt-[20px] text-right text-[{{ $numb_font }}px] float-right text-right w-[550px] text-[#ffffff]">Nossa missão acima de tudo é promover educação em saúde e contribuir com a sua Saúde Respiratória!</p>
        </div>
    </div>
</section>

@endsection
