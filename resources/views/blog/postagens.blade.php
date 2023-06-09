@extends('blog.layout.main')
@section('titulo', 'Blog | Home')
@section('conteudo')

{{--  --}}
<section id="x1" class="w-[100%] bg-[#ffffff] inline-block">
    {{--  --}}
    <div class="w-[60%] mx-[20%] mt-[100px] h-[250px] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[70%] mt-[50px] inline-block float-left">
                {{-- CATEGORIA --}}
                <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Novidades</p>
                {{--  --}}
                <a href=""><p class="text-[#212121] text-[40px] leading-[40px] font-bold">Semana Nacional de Mobilização e Luta Contra a Tuberculose.</p></a>
            </div>
            {{--  --}}
            <div class="w-[30%] mt-[50px] pl-[30px] inline-block float-left">
                {{--  --}}
                <div class="inline-block">
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <div class="rounded-[100px] w-[40px] bg-[silver] h-[40px]"></div>
                    </div>
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <p class="text-[#212121] ml-[10px] font-bold mt-[2px] text-[14px]">Laire</p>
                        {{--  --}}
                        <p class="text-[#212121] ml-[10px] text-[12px]"></p>
                    </div>
                </div>
                {{--  --}}
                <ul class="mt-[20px]">
                    <li class="flex mb-[20px] mx-[10px]"><img src="/img/facebook.png" class="w-[20px]"></li>
                    <li class="flex mb-[20px] mx-[10px]"><img src="/img/twitter.png" class="w-[20px]"></li>
                </ul>
            </div>
        </div>
    </div>
</section>
{{--  --}}
<section class="mt-[10px] w-[60%] mx-[20%]">
    {{--  --}}
    <img class="w-[100%] rounded-[5px]" src="/img/337652415_1238057860420451_9019069562162149452_n.jpg">
    {{--  --}}
    <p class="mt-[40px]">Conscientizar a população sobre as devastadoras condições de saúde, sociais e econômicas da tuberculose (TB) e intensificar os esforços para acabar com a epidemia global de tuberculose, são os objetivos da data que marca o dia em que, em 1882, o Dr. Robert Koch anunciou que havia descoberto a bactéria que causa a tuberculose, abrindo caminho para o diagnóstico e a cura dessa doença.</p>
    {{--  --}}
    <p class="mt-[40px]">A partir de hoje vamos produzir um conteúdo especial para a Semana Nacional de Mobilização e Luta Contra a Tuberculose. Fique ligado nos próximos posts!</p>
</section>
{{--  --}}

{{--  --}}
<section class="w-[90%] inline-block mx-[5%]">
    {{--  --}}
    <div id="novidades" class="w-[100%] inline-block px-[60px] py-[80px] bg-[#00FF8C] rounded-[10px] mt-[80px]">
        {{--  --}}
        <div id="spacex" class="w-[60%] mx-[20%] inline-block">
            {{--  --}}
            <p id="text_model" class="font-bold text-[50px] text-center leading-[50px] text-[#080E45]">Que tal sugerir um tema para nosso blog?</p>
            {{--  --}}
            <p class="text-[14px] mt-[40px] text-center text-[#080E45]">Agora você pode nos ajudar, com sugestões de temas que tem mais interesse em obter informações, informe brevemente um tema de seu interesse, e ele será analisado e quem sabe sua sugestão se torna um de nossos posts.</p>
        </div>
        {{--  --}}
        <div id="spacex" class="w-[50%] mx-[25%] mt-[20px]">
            {{--  --}}
            <form action="" method="">
                {{--  --}}
                <input class="w-[100%] h-[40px] rounded-[100px] pl-[20px] border-[0px] mt-[30px]" type="text" name="email">
            </form>
        </div>
    </div>
</section>

@endsection
