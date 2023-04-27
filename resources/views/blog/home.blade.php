@extends('blog.layout.main')
@section('titulo', 'RespiraSaude | Home')
@section('conteudo')

{{--  --}}
<section id="x1" class="w-[100%] bg-[#080E45] inline-block">
    {{--  --}}
    <div class="w-[60%] mx-[20%] mt-[150px] h-[250px] inline-block">
        {{--  --}}
        <div class="w-[100%] inline-block">
            {{--  --}}
            <div class="w-[70%] mt-[50px] inline-block float-left">
                {{-- CATEGORIA --}}
                <p class="uppercase text-[14px] text-[#ffffff] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Novidades</p>
                {{--  --}}
                <a href="{{ route('postagem_blog') }}"><p id="titulo_resumido" class="text-[#ffffff] mt-[20px] text-[40px] leading-[40px] font-bold">Semana Nacional de Mobilização e Luta Contra a Tuberculose.</p></a>
            </div>
            {{--  --}}
            <div class="w-[30%] mt-[50px] pl-[30px] inline-block float-left">
                {{--  --}}
                <div class="inline-block">
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <div class="rounded-[100px] w-[40px] bg-[#5CD1FF] h-[40px]"></div>
                    </div>
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <p id="logos_read" class="text-[#ffffff] ml-[10px] font-bold mt-[2px] text-[14px]">Laire</p>
                        {{--  --}}
                        {{-- <p class="text-[#ffffff] ml-[10px] text-[12px]">20 de abril de 2023</p> --}}
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
<section class="mt-[30px] w-[60%] mx-[20%]">
    {{--  --}}
    <div id="x2" class="w-[100%]">
        {{--  --}}
        <img class="w-[100%] rounded-[5px]" src="">
    </div>
    {{--  --}}
    <p class="mt-[40px]">Conscientizar a população sobre as devastadoras condições de saúde, sociais e econômicas da tuberculose (TB) e intensificar os esforços para acabar com a epidemia global de tuberculose, são os objetivos da data que marca o dia em que, em 1882, o Dr. Robert Koch anunciou que havia descoberto a bactéria que causa a tuberculose, abrindo caminho para o diagnóstico e a cura dessa doença.</p>
    {{--  --}}
    <p class="mt-[40px]">A partir de hoje vamos produzir um conteúdo especial para a Semana Nacional de Mobilização e Luta Contra a Tuberculose. Fique ligado nos próximos posts!</p>
    {{--  --}}
    <a href="{{ route('postagem_blog') }}"><button class="w-[100%] h-[40px] mt-[40px] bg-[#5CD1FF] text-[13px] text-[#212121] rounded-[100px] inline-block">Continuar lendo</button></a>
</section>
{{--  --}}
<section  class="w-[100%] mt-[30px] inline-block">
    {{--  --}}
    <div class="w-[90%] mx-[5%] inline-block">
        {{--  --}}
        <div class="">
            {{--  --}}
            <p id="artigos_rescentes" class="text-center font-bold mt-[30px] text-[30px] mb-[50px]">Artigos Recentes</p>

            {{--  --}}
            <div class="w-[20%] mx-[1.5%] inline-block float-left">
                {{--  --}}
                <div id="img-blog" style="background: url(/img/337652415_1238057860420451_9019069562162149452_n.jpg); background-size: 100%;" class="w-[120%] shadow-lg h-[200px] rounded-[5px] mb-[30px] border-[1px] border-[#cdcdcd] bg-[silver]"></div>
                {{-- CATEGORIA --}}
                <p class="uppercase text-[14px] text-[#212121] pl-[10px] mb-[10px] font-bold border-l-[3px] border-l-[#5CD1FF]">Novidades</p>
                {{--  --}}
                {{-- <a  href=""><p id="text_caixaverde_blog" class="font-bold text-[25px] leading-[22px]">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p></a> --}}
                {{--  --}}
                <p class="mt-[30px] text-[14px] leading-[16px]">Semana Nacional de Mobilização e Luta Contra a Tuberculose.</p>
                {{--  --}}
                <div class="inline-block mt-[30px]">
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <div class="rounded-[100px] w-[40px] bg-[#5CD1FF] h-[40px]"></div>
                    </div>
                    {{--  --}}
                    <div class="inline-block float-left">
                        {{--  --}}
                        <p class="ml-[10px] font-bold mt-[0px] text-[14px]">Laire</p>
                        {{--  --}}
                        <p class="ml-[10px] text-[12px]">20 de abril</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
