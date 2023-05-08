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

<div class="component">
    {{-- SECTION --}}
    <section id="carrossel_prox2" class="w-[100%] mt-[100px] inline-block bg-[#5CD1FF]">
        {{--  --}}
        <div class="w-[90%] mx-[5%] inline-block">
            {{--  --}}
            <div id="bloco_nulo2" class="w-[30%] h-[600px] inline-block float-left">

            </div>
            {{--  --}}
            <div id="base_geral2" class="w-[70%] h-[600px] pt-[80px] inline-block float-left">
                {{--  --}}
                <div id="base_text_home_rs" class="inline-block bg-[#ffffff] rounded-[20px] opacity-[0.9] p-[50px] shadow-lg">
                    {{--  --}}
                    <div id="button_max2" class="w-[100px] rounded-[100px] h-[100px] bg-[#5CD1FF] ml-[-100px] absolute">
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
                        <p id="max_box2" class="font-bold text-[#080E45] float-right text-[30px] leading-[34px] text-right">Soluções para aumentar a aceitabilidade, adesão e cumprimento das medidas de prevenção e controle da covid-19 na população</p>
                        {{--  --}}
                        <p id="max_loc2" class="mt-[50px] text-[{{ $numb_font }}px] text-[#080E45] float-right text-right">Algumas doenças respiratórias infecciosas matam milhares de brasileiros todos os anos, pois elas são contagiosas e passam de uma pessoa para outra muito facilmente através da respiração, tosse, espirros e mãos contaminadas.</p>
                    </div>
                     {{--  --}}
                     <ul class="logos_carrossel">
                        {{--  --}}
                         {{-- <li class="inline-block mx-[30px] my-[10px]"><img src="/img/9.png" alt=""></li> --}}
                        {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/8.png" alt=""></li> --}}
                        <li class="inline-block ml-[30px] mt-[15px]"><img src="/img/6.png" alt=""></li>
                        {{-- <li class="inline-block ml-[30px] mt-[15px]"><img src="/img/7.png" alt=""></li> --}}
                        <li class="inline-block mx-[30px] my-[10px]"><img src="/img/ppgfis.png" alt=""></li>
                        <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/10.png" alt=""></li>
                        {{-- <li class="inline-block mx-[30px] my-[10px]"><img class="w-[210px]" src="/img/10.png" alt=""></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
