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
    <section id="box-master-component" class="background-carrossel-2">
        {{--  --}}
        <div class="w-[90%] mx-[5%] inline-block">
            {{--  --}}
            <div id="block-one" class="w-[30%] inline-block float-left">

            </div>
            {{--  --}}
            <div id="block-two" class="w-[70%] pt-[80px] inline-block float-left">
                {{--  --}}
                <div id="box-prime-content-carrossel" class="inline-block bg-[#ffffff] rounded-[20px] opacity-[0.9] p-[50px] shadow-lg">
                    {{--  --}}
                    <div id="button-plus">
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
                    <div class="w-[100%] mt-[15px] inline-block">
                        {{--  --}}
                        <div class="w-[300px] float-right ml-[30px]"><img class="w-[300px]" src="/img/10.png"></div>
                        {{--  --}}
                        {{-- <div class="w-[120px] float-right ml-[30px]"><img class="w-[120px] mt-[10px]" src="/img/ppgfis.png"></div> --}}
                        {{--  --}}
                        <div class="w-[100px] float-right ml-[30px]"><img class="w-[100px] mt-[10px]" src="/img/6.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
