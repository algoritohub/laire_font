@extends('respirasaude.layout.main')
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
<section class="w-[100%] mt-[100px] inline-block bg-[#5CD1FF]">
    {{--  --}}
    <div class="w-[90%] py-[30px] mx-[5%] inline-block">
        {{--  --}}
        <p class="text-[#ffffff] text-[40px] font-bold">Eventos Encerrados</p>
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
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                    {{--  --}}
                    <div  class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[200px] p-[20px] inline-block">
                        {{--  --}}
                        <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit</p>
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
            <div id="eventos1"   class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                    {{--  --}}
                    <div class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[200px] p-[20px] inline-block">
                        {{--  --}}
                        <p class="text-center mt-[20px] mb-[8px] text-[15px]text-[{{ $numb_font }}px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit</p>
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
            <div id="eventos1"  class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                    {{--  --}}
                    <div class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[200px] p-[20px] inline-block">
                        {{--  --}}
                        <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit</p>
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
            <div id="eventos1"  class="w-[20%] mx-[2.5%] float-left">
                {{--  --}}
                <div class="w-[100%] inline-block bg-[#fafafa] shadow-lg inline-block ">
                    {{--  --}}
                    <div class="w-[100%] h-[150px] bg-[gray] mx-auto"></div>
                    {{--  --}}
                    <div class="w-[100%] h-[200px] p-[20px] inline-block">
                        {{--  --}}
                        <p class="text-center mt-[20px] mb-[8px] text-[15px] text-[{{ $numb_font }}px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet consectetur adipisicing elit</p>
                    </div>
                    {{--  --}}
                </div>
                {{--  --}}
                <div class="w-[100%] inline-block h-[150px]">
                    {{--  --}}
                    <a href=""><p class="text-center uppercase text-[15px] mt-[25px] font-bold">VER MAIS➜</p></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{--  --}}
@endsection
