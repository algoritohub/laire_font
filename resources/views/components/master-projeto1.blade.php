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


<div  class="component">
    {{-- SECTION --}}
    <section id="carrossel_prox1" class="w-[100%] mt-[100px] inline-block bg-[#5CD1FF]">
        {{--  --}}
        <div class="w-[90%] mx-[5%] inline-block">
            {{--  --}}
            <div id="bloco_nulo1" class="w-[30%] h-[600px] inline-block float-left">
                {{--  --}}
            </div>
            {{--  --}}
            <div id="base_geral1" class="w-[70%] h-[600px] pt-[80px] inline-block float-left">
                {{--  --}}
                <div id="base_text_home_rs" class="inline-block bg-[#ffffff] rounded-[20px] opacity-[0.9] p-[50px] shadow-lg">
                    {{--  --}}
                    <div id="button_max1" class="w-[100px] rounded-[100px] h-[100px] bg-[#5CD1FF] ml-[-100px] absolute">
                        {{--  --}}
                        <p class="text-[#080E45] text-[11px] text-center mt-[45%] uppercase font-bold">ver mais</p>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mb-[30px] float-right inline-block">
                        {{--  --}}
                        <p class="text-right text-[20px] text-[#080E45] pr-[20px] border-r-[2px] border-r-[#080E45]">SAÚDE</p>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] float-right inline-block">
                        {{--  --}}
                        <p id="max_box1" class="font-bold text-[#080E45] float-right text-[30px] leading-[34px] text-right text-[{{ $numb_font }}px]">Efeitos da atenção domiciliar para adultos com doenças respiratórias crônicas e síndrome pós-covid-19 na rotatividade hospitalar: uma revisão sistemática com metanálise</p>
                        {{--  --}}
                        <p id="max_loc1" class="mt-[30px] text-[{{ $numb_font }}px] text-[#080E45] float-right text-right text-[{{ $numb_font }}px]">Mundialmente as doenças respiratórias crônicas têm uma alta taxa de internação hospitalar e mortalidade. Alguns exemplos importantes dessas doenças são a Doença Pulmonar Obstrutiva Crônica (DPOC), a asma, a fibrose cística, a bronquiectasia e a fibrose pulmonar.</p>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mt-[15px] inline-block">
                        {{--  --}}
                        <div class="w-[300px] float-right ml-[30px]"><img class="w-[300px]" src="/img/10.png"></div>
                        {{--  --}}
                        <div class="w-[100px] float-right ml-[30px]"><img class="w-[100px] mt-[10px]" src="/img/6.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
