{{-- FONT --}}
@php
    @$modal_agud  = $_GET['modal'];
    $return_link  = $_SERVER["REQUEST_URI"];
    $session_font = session('font');

    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 15;
    }
@endphp
{{--  --}}

{{-- BLOCO DE INFORMATIVO --}}
<section id="agudas" class="w-[100%] inline-block">
    {{--  --}}
    <div class="w-[20%] inline-block float-left h-[700px] bg-[#fafafa]">
        {{--  --}}
        {{-- <div id="div_lateral_comoprevinir" class="w-[800px] h-[680px] bg-[silver] absolute mt-[10%]"></div> --}}
    </div>
    {{--  --}}
    <div class="w-[80%] pl-[580px] pr-[60px] inline-block float-left h-[900px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[20px] mt-[180px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Doenças respiratórias agudas</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px]"></p>

        <ul id="lista" class="ml-[-10px]">
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=hin1#agudas"> <p class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">H1N1</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=covid#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">COVID-19</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=tuberculose#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Tuberculose</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=influenza#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Influenza</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=pneumonia#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Pneumonia</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=bronquiolite#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Bronquiolite</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=coqueluxe#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Coqueluxe</p></a></li>
        </ul>

        {{-- <div class="w-[55%] bg-[silver] h-[2px] mt-[50px]"></div> --}}

        <!--como previnir-->

        {{-- <p class="text-[25px] font-bold mb-[20px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Como Previnir</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px]"><b></b></p>

        <ul id="lista" class="ml-[-10px]">
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=hin1#agudas"> <p class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">H1N1</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=covid#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Vacina</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=tuberculose#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Higienização das mãos</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=influenza#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Uso de máscara faciais</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=influenza#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Isolamento social </p></a></li>

        </ul> --}}
        <!-- BARREIRA-->





        {{-- <button class="px-[30px] mt-[20px] h-[40px] bg-[#080E45] text-[#00FF8C]">More information</button> --}}
    </div>
    {{--  --}}
    @if (!empty($modal_agud))
    {{--  --}}
    <div class="modal_doenca">
        {{--  --}}
        <div class="w-[1200px] h-[550px] bg-[#ffffff] mx-auto mt-[7%] shadow-lg">
            {{--  --}}
            <div class="w-[100%] inline-block p-[30px]">
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <p class="font-bold text-[20px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">H1N1</p>
                </div>
                {{--  --}}
                <div class="float-left w-[50%]">
                    {{--  --}}
                    <a href="{{ route('home.respira_saude') }}#agudas"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
        </div>
    </div>
    @endif

</section>
