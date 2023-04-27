@extends('laire.layout.main')
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

{{-- SECTION --}}
<section class="w-[100%] mt-[120px] inline-block bg-[#5CD1FF]">
    {{--  --}}
    <div id="pilot" class="w-[90%] py-[30px] mx-[5%] inline-block">
        {{--  --}}
        <p id="text_pilot" class="text-[#ffffff] text-[40px] font-bold">Feed de notícias</p>
    </div>
</section>
{{-- CONTROLE --}}
<section class="w-[100%] mt-[100px] inline-block">
    {{--  --}}
    <div class="w-[95%] mx-[2.5%] inline-block">
        {{--  --}}
        <div id="caixa_evt" class="w-[100%] mt-[20px] inline-block">
            {{--  --}}
            <div id="eventos1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div style="border-radius: 20px;" class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                    {{--  --}}
                    <div style="border-radius: 20px 20px 0px 0px; background: url('/img/carrossel1.png'); background-size: 100%;" class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[200px] p-[20px] inline-block">
                        {{--  --}}
                        <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Ponte entre a ciência e a sociedade valorizando a acessibilidade, comunicação simples e educação em saúde.</p>
                    </div>
                    {{--  --}}
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="eventos1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div style="border-radius: 20px;" class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                    {{--  --}}
                    <div style="border-radius: 20px 20px 0px 0px; background: url('/img/carrossel2.png'); background-size: 100%;" class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[200px] p-[20px] inline-block">
                        {{--  --}}
                        <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Acompanhe aqui novidades e informações confiáveis para manter sua saúde respiratória</p>
                    </div>
                    {{--  --}}
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS➜</p></a>
                </div>
            </div>
            {{--  --}}
            <div id="eventos1" class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div style="border-radius: 20px;" class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                    {{--  --}}
                    <div style="border-radius: 20px 20px 0px 0px; background: url('/img/carrossel3.png'); background-size: 100%;" class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[200px] p-[20px] inline-block">
                        {{--  --}}
                        <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Acompanhe nossos projetos de extensões e fique por dentro de todos os resultados de nossa pesquisa!</p>
                    </div>
                    {{--  --}}
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href="/respira-saude#projeto_extensao"><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS➜</p></a>
                </div>
            </div>
        </div>
    </div>
</section>
{{--  --}}
@endsection
