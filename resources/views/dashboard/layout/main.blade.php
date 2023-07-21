<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RespiraAdmin | Informações</title>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@1/dist/tinymce-jquery.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.0.0.js"></script> --}}
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script src="/js/function-mask.js" defer></script>
    <script src="/js/script.js"></script>
</head>
{{--  --}}
@php
    $session_usuario = session('admin')['id'];
    $resgate_user    = Illuminate\Support\Facades\DB::select("SELECT * FROM admins WHERE id = '$session_usuario'");
@endphp
{{--  --}}
<body class="w-[100%] h-[99vh] inline-block">
    {{-- BARRA LATERAL --}}
    <aside class="w-[20%] h-[100vh] bg-[#080E45] shadow-lg float-left inline-block">
        {{--  --}}
        <div class="w-[100%] p-[40px] inline-block">
            {{-- LOGO --}}
            <img class="w-[30%] mx-[35%]" src="/img/rs_logo.png" alt="">
            {{--  --}}
            <p class="text-[18px] text-[#ffffff] text-center mt-[15px]"><b>Respira</b>Admin</p>
            {{--  --}}
            <ul id="menu_adm" class="mt-[30px]">
                <li><a href="{{ route('admin.painel_geral') }}"><button class="w-[100%] mb-[5px] h-[50px] rounded-[100px] px-[20px] bg-[#080E45]"><img src="/img/home.png" class="w-[20px] float-left"> <p class="text-[#99E2FF] text-[13px] ml-[10px] float-left">Geral</p></button></a></li>

                <li><button disabled class="w-[100%] mb-[5px] h-[50px] rounded-[100px] px-[20px] bg-[#080E45] opacity-[0.5]"><img src="/img/public.png" class="w-[20px] float-left"> <p class="text-[#99E2FF] text-[13px] ml-[10px] float-left">Laire</p></button></li>

                <li><a href="{{ route('admin.respirasaude.pag') }}"><button class="w-[100%] mb-[5px] h-[50px] rounded-[100px] px-[20px] bg-[#080E45]"><img src="/img/public.png" class="w-[20px] float-left"> <p class="text-[#99E2FF] text-[13px] ml-[10px] float-left">RespiraSaúde</p></button></a></li>

                <li><a href="{{ route('admin.painel_blog') }}"><button class="w-[100%] mb-[5px] h-[50px] rounded-[100px] px-[20px] bg-[#080E45]"><img src="/img/spot.png" class="w-[20px] mt-[2px] float-left"> <p class="text-[#99E2FF] text-[13px] ml-[10px] float-left">Blog</p></button></a></li>

                <li><a href="{{ route('admin.doencas.pag') }}"><button class="w-[100%] mb-[5px] h-[50px] rounded-[100px] px-[20px] bg-[#080E45]"><img src="/img/public.png" class="w-[20px] float-left"> <p class="text-[#99E2FF] text-[13px] ml-[10px] float-left">Doenças</p></button></a></li>

                <li><a href="{{ route('admin.pesquisadores.pag') }}"><button class="w-[100%] mb-[5px] h-[50px] rounded-[100px] px-[20px] bg-[#080E45]"><img src="/img/user.png" class="w-[20px] float-left"> <p class="text-[#99E2FF] ml-[10px] text-[13px] float-left">Perquisadores</p></a></button></li>

                <li><a href="{{ route('admin.eventos.pag') }}"><button class="w-[100%] mb-[5px] h-[50px] rounded-[100px] px-[20px] bg-[#080E45]"><img src="/img/user.png" class="w-[20px] float-left"> <p class="text-[#99E2FF] ml-[10px] text-[13px] float-left">Notícias e Eventos</p></button></a></li>
            </ul>
            {{--  --}}
            <ul id="menu_adm" class="mt-[0px]">
                <li><a href="{{ route('admin.painel_config') }}"><button class="w-[100%] mb-[5px] h-[50px] rounded-[100px] px-[20px] bg-[#080E45]"><img src="/img/config.png" class="w-[20px] float-left"> <p class="text-[#99E2FF] text-[13px] ml-[10px] float-left">Configurações</p></button></a></li>

                <li><a href="{{ route('admin.logout') }}"><button class="w-[100%] mb-[5px] h-[50px] rounded-[100px] px-[20px] bg-[#080E45]"><img src="/img/quit.png" class="w-[17px] float-left"> <p class="text-[#99E2FF] text-[13px] ml-[10px] float-left">Sair</p></button></a></li>
            </ul>
            {{--  --}}
            {{-- <p class="mt-[20px] text-[13px] text-[#ffffff] ml-[20px]">Versão 1.0.1</p> --}}
        </div>
    </aside>
    {{-- CORPO --}}
    <section class="w-[80%] h-[100vh] bg-[#fafafa] float-left inline-block">
        {{-- TOPO --}}
        <header>
            {{--  --}}
            <div class="w-[100%] px-[30px] bg-[#99E2FF] inline-block">
                {{--  --}}
                <div class="w-[70%] float-left inline-block h-[60px]"></div>
                {{--  --}}
                <div class="w-[30%] float-left inline-block h-[60px]">
                    {{--  --}}
                    <div style="background: url(/img/person.png); background-size: 100%;" class="w-[40px] float-right mt-[10px] border-[1px] border-[#00FF8C] h-[40px] rounded-[100px] bg-[#080E45] ml-[15px]"></div>
                    {{--  --}}
                    <p class="mt-[21px] float-right text-[12px] text-[#080E45]">{{ $resgate_user[0]->nome }}</p>
                </div>
            </div>
        </header>
        {{-- CORPO BLOCO --}}
        <article class="w-[100%] h-[650px] inline-block overflow-scroll">
            @yield('conteudo')
        </article>
    </section>
    <!-- PWA -->
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
    {{-- TEXTAREA --}}
    <script src="/js/textarea.js"></script>
</body>
</html>
