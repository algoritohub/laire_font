{{-- FONT --}}
@php
    @$modal_cron  = $_GET['modal'];
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

<section id="cronicas" class="w-[100%] inline-block">
    {{--  --}}
    <div class="w-[80%] pr-[650px] pl-[75px] inline-block float-left h-[1300px] bg-[#ffffff]">
        {{--  --}}
        <p class="text-[25px] font-bold mb-[20px] mt-[180px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Doenças respiratórias crônicas</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px]"><b>Conheça as principais </b> </p>

        <ul id="lista" class="ml-[-10px]">
            <li class="mb-[10px] flex"><a href="?modal=asma#cronicas"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Asma</p></a></li>
            <li class="mb-[10px] flex"><a href="?modal=fibrose_cística#cronicas"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Fibrose Cística</p></a></li>
            <li class="mb-[10px] flex"><a href="?modal=dpoc#cronicas"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">DPOC</p></a></li>
            <li class="mb-[10px] flex"><a href="?modal=bronquiectasia#cronicas"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Bronquiectasia</p></a></li>
            <li class="mb-[10px] flex"><a href="?modal=fibrose_pulmonar#cronicas"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Fibrose pulmonar</p></a></li>
            <li class="mb-[10px] flex"><a href="?modal=sinusite#cronicas"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Sinusite</p></a></li>
            <li class="mb-[10px] flex"><a href="?modal=hipertensão_pulmonar#cronicas"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Hipertensão pulmonar</p></a></li>
            <li class="mb-[10px] flex"><a href="?modal=sindrome_pos_covid#cronicas"><p class="ml-[10px] float-left">●</p> <p class="ml-[10px] float-left text-[{{ $numb_font }}px]">Síndrome pós-COVID-19 </p></a></li>
        </ul>

        {{-- <div class="w-[55%] bg-[silver] h-[2px] mt-[50px]"></div> --}}

        <!--como controlar os sintomas-->

        {{-- <p class="text-[25px] font-bold mb-[20px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Como controlar os sintomas</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px]"><b></b></p>

        <ul id="lista" class="ml-[-10px]">
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=hin1#agudas"> <p class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Fibrose Cística</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=covid#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">DPOC</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=tuberculose#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Bronquiectasia</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=influenza#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Sinusite</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=influenza#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Hipertensão pulmonar </p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=influenza#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Síndrome pós-COVID-19  </p></a></li>

        </ul> --}}

        {{-- <div class="w-[55%] bg-[silver] h-[2px] mt-[50px]"></div> --}}

        <!--Tratamento-->

        {{-- <p class="text-[25px] font-bold mb-[20px] mt-[100px] pl-[20px] border-l-[3px] border-l-[#00FF8C]">Tratamento</p>

        <p class="mb-[20px] text-[{{ $numb_font }}px]"><b></b></p>

        <ul id="lista" class="ml-[-10px]">
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=hin1#agudas"> <p class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Fibrose Cística</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=covid#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">DPOC</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=tuberculose#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Bronquiectasia</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=influenza#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Sinusite</p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=influenza#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Hipertensão pulmonar </p></a></li>
            <li class="mb-[10px] flex"><p class="ml-[10px] float-left">●</p> <a href="?modal=influenza#agudas"> <p id="" class="cursor-pointer ml-[10px] float-left text-[{{ $numb_font }}px]">Síndrome pós-COVID-19  </p></a></li>

        </ul> --}}

        {{-- <button class="px-[30px] mt-[20px] h-[40px] bg-[#080E45] text-[#00FF8C]">MAIS INFORMAÇÕES</button> --}}
    </div>
    {{--  --}}
    {{-- <div class="w-[20%] inline-block float-left h-[1200px] bg-[#5CD1FF]"> --}}
        {{--  --}}
        {{-- <div id="caixa-cinza" class="w-[800px] h-[1200px] ml-[-570px] bg-[silver] absolute mt-[10%]"></div>
    </div> --}}
    {{--  --}}
    @if (!empty($modal_cron))
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
                    <a href="{{ route('home.respira_saude') }}#cronicas"><p class="float-right text-[16px] cursor-pointer">✕</p></a>
                </div>
            </div>
        </div>
    </div>
    @endif
</section>
