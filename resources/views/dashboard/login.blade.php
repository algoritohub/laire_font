<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;600;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
    <script src="/js/script.js"></script>
</head>



{{--  --}}
<body>
    {{--  --}}
    <article>
        {{--  --}}
        <section>
            {{--  --}}
            <div class="w-[100%] h-[99vh] inline-block">
                {{--  --}}
                <div class="w-[60%] h-[100vh] bg-[#080E45] inline-block float-left">
                    {{--  --}}
                    <div class="inline-block w-[100%] h-[85vh]"></div>
                    {{--  --}}
                    <div class="inline-block w-[100%] h-[13vh] px-[5%]">
                        {{--  --}}
                        <p class="text-[25px] text-[#ffffff]"><b>Respira</b>Admin</p>
                        {{--  --}}
                        <p class="text-[12px] text-[#ffffff]">Bem-vindo ao seu acesso administrativo</p>
                    </div>
                </div>
                {{--  --}}
                <div class="w-[40%] h-[100vh] bg-[#fafafa] inline-block float-left">
                    {{-- ALERTAS DE ERROS --}}
                    @if (isset($erro))
                    <div id="model_alert" class="w-[40%] h-[100%] inline-block absolute">
                        {{--  --}}
                        <div id="exit_alert" class="w-[90%] mx-[5%] cursor-pointer mt-[30px] rounded-[10px] shadow-lg p-[20px] inline-block bg-[#FFC122]">
                            {{--  --}}
                            <p class="text-[#080E45] text-center text-[13px]">{{ $erro }}</p>
                        </div>
                    </div>
                    @endif
                    {{-- ERROS DE VALIDAÇÃO --}}
                    @if($errors->any())
                    <div id="model_alert" class="w-[40%] h-[100%] inline-block absolute">
                        {{--  --}}
                        <div id="exit_alert" class="w-[90%] mx-[5%] cursor-pointer mt-[30px] rounded-[10px] shadow-lg p-[20px] inline-block bg-[#FFC122]">
                            {{--  --}}
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li><p class="text-[#080E45] text-center text-[13px]">{{ $error }}</p></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                    {{--  --}}
                    <div class="w-[100%] mt-[15%] px-[25%] inline-block">
                        {{--  --}}
                        <img class="w-[50%] mx-[25%]" src="/img/rs_logo.png" alt="">
                        {{--  --}}
                        <p class="text-[25px] text-[#080E45] text-center mt-[15px]"><b>Respira</b>Admin</p>
                        {{--  --}}
                        <form class="mt-[20%]" action="/php/conect_db.php" method="POST">
                            @csrf
                            <table class="w-[100%]">
                                {{--  --}}
                                <tr>
                                    <td>
                                        <p class="">E-mail</p>
                                    </td>
                                </tr>
                                {{--  --}}
                                <tr>
                                    <td>
                                        <input class="w-[100%] pl-[10px] border-[2px] border-[#00FF8C] mt-[5px] mb-[5px] h-[40px] rounded-[6px]" type="text" name="email">
                                    </td>
                                </tr>
                                {{--  --}}
                                <tr>
                                    <td>
                                        <p class="">Senha</p>
                                    </td>
                                </tr>
                                {{--  --}}
                                <tr>
                                    <td>
                                        <input class="w-[100%] pl-[10px] border-[2px] border-[#00FF8C] mt-[5px] mb-[10px] h-[40px] rounded-[6px]" type="password" name="senha">
                                    </td>
                                </tr>
                                {{--  --}}
                                <tr>
                                    <td>
                                        <p class="text-center text-[12px]">Esqueceu sua senha?</p>
                                    </td>
                                </tr>
                                {{--  --}}
                                <tr>
                                    <td>
                                        <button class="w-[100%] h-[40px] mt-[10px] bg-[#00FF8C] font-bold text-[#080E45] rounded-[6px]">Entrar</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </article>
</body>
</html>
{{-- FONT --}}
@php
    $session_font = session('font');
    if (isset($session_font) AND !empty($session_font)) {
        $numb_font = session('font');
    }
    else{
        $numb_font = 13;
    }
@endphp
{{--  --}}
