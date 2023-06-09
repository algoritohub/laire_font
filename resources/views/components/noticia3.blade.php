
@php
    // FUNÇÃO FONT
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
    <section id="carrossel_pro3" class="w-[100%] inline-block bg-[#5CD1FF]">
        {{--  --}}
        <div class="w-[90%] mx-[5%] inline-block">
            {{--  --}}
            <div id="bloco_nulo3" class="w-[50%] h-[600px] inline-block float-left">

            </div>
            {{--  --}}
            <div id="base_geral3" class="w-[50%] h-[600px] pt-[80px] inline-block float-left">
                {{--  --}}
                <div id="base_text_home_rs" class="inline-block bg-[#ffffff] rounded-[20px] opacity-[0.9] p-[50px] shadow-lg">
                    {{--  --}}
                    <div id="button_max3" class="w-[100px] rounded-[100px] h-[100px] bg-[#5CD1FF] ml-[-100px] absolute">
                        {{--  --}}
                        <p class="text-[#080E45] text-[11px] text-center mt-[45%] uppercase font-bold">ver mais</p>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] mb-[30px] float-right inline-block">
                        {{--  --}}
                        <p class="text-right text-[20px] text-[#080E45] pr-[20px] border-r-[2px] border-r-[#080E45]">Novidades</p>
                    </div>
                    {{--  --}}
                    <div class="w-[100%] float-right inline-block">
                        {{--  --}}
                        <p id="max_box3" class="font-bold text-[#080E45] float-right w-[500px] text-[30px] leading-[34px] text-right">Projeto de Extensão!</p>
                        {{--  --}}
                        <p id="max_loc3" class="mt-[50px] w-[600px] text-[{{ $numb_font }}px] text-[#080E45] float-right text-right ">Este projeto de extensão tem o objetivo de levar Educação Popular em Saúde Respiratória para todos! Aqui utilizamos formatos atrativos, linguagem simples, acessibilidade e informações de qualidade sobre a prevenção e controle das principais doenças respiratórias.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
