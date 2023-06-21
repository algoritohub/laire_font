@extends('dashboard.layout.main')
@section('titulo', 'RespiraAdmin | Informações')
@section('conteudo')

<section class="w-[100%] inline-block p-[30px]">
    {{--  --}}
    <div class="w-[100%] mt-[10px] inline-block">
        {{--  --}}
        <div class="w-[22%] h-[160px] bg-[#5CD1FF] p-[20px] rounded-[20px] inline-block float-left mx-[1.5%]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="w-[40%] float-left inline-block">
                    {{--  --}}
                    <p class="text-[#080E45] font-bold text-[18px]">Visitas</p>
                    {{--  --}}
                    <p class="text-bold text-[13px] text-[#080E45]">Blog</p>
                </div>
                {{--  --}}
                <div class="w-[60%] float-left inline-block">
                    {{--  --}}
                    <p class="text-[30px] float-right font-bold text-[#080E45]">0</p>
                </div>
                {{--  --}}
                <button id="bt1_ds" class="w-[100%] text-[11px] h-[30px] bg-[#080E45] text-[#5CD1FF] mt-[40px] rounded-[100px]">Visitas por página</button>
            </div>
        </div>
        {{--  --}}
        <div class="w-[22%] h-[160px] bg-[#5CD1FF] p-[20px] rounded-[20px] inline-block float-left mx-[1.5%]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="w-[40%] float-left inline-block">
                    {{--  --}}
                    <p class="text-[#080E45] font-bold text-[18px]">Publicações</p>
                    {{--  --}}
                    <p class="text-bold text-[13px] text-[#080E45]">Gerais</p>
                </div>
                {{--  --}}
                <div class="w-[60%] float-left inline-block">
                    {{--  --}}
                    <p class="text-[30px] float-right font-bold text-[#080E45]">0</p>
                </div>
                {{--  --}}
                <button id="bt2_ds" class="w-[100%] text-[11px] h-[30px] bg-[#080E45] text-[#5CD1FF] mt-[40px] rounded-[100px]">Publicações por página</button>
            </div>
        </div>
        {{--  --}}
        <div class="w-[22%] h-[160px] bg-[#5CD1FF] p-[20px] rounded-[20px] inline-block float-left mx-[1.5%]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="w-[40%] float-left inline-block">
                    {{--  --}}
                    <p class="text-[#080E45] font-bold text-[18px]">Blog</p>
                    {{--  --}}
                    <p class="text-bold text-[13px] text-[#080E45]">Postagens</p>
                </div>
                {{--  --}}
                <div class="w-[60%] float-left inline-block">
                    {{--  --}}
                    <p class="text-[30px] float-right font-bold text-[#080E45]">0</p>
                </div>
                {{--  --}}
                <button id="bt3_ds" class="w-[100%] text-[11px] h-[30px] bg-[#080E45] text-[#5CD1FF] mt-[40px] rounded-[100px]">Publicar algo novo</button>
            </div>
        </div>
        {{--  --}}
        <div class="w-[22%] h-[160px] bg-[#5CD1FF] p-[20px] rounded-[20px] inline-block float-left mx-[1.5%]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div class="w-[40%] float-left inline-block">
                    {{--  --}}
                    <p class="text-[#080E45] font-bold text-[18px]">Pesquisadores</p>
                    {{--  --}}
                    <p class="text-bold text-[13px] text-[#080E45]">Total</p>
                </div>
                {{--  --}}
                <div class="w-[60%] float-left inline-block">
                    {{--  --}}
                    <p class="text-[30px] float-right font-bold text-[#080E45]">0</p>
                </div>
                {{--  --}}
                <button id="bt4_ds" class="w-[100%] text-[11px] h-[30px] bg-[#080E45] text-[#5CD1FF] mt-[40px] rounded-[100px]">Pesquisadores por projeto</button>
            </div>
        </div>
    </div>
    {{--  --}}
    <div class="w-[100%] inline-block mt-[30px]">
        {{--  --}}
        <div class="w-[47%] h-[350px] bg-[#f1f1f1] rounded-[5px] inline-block float-left mx-[1.5%] border-[1px] border-[#cdcdcd]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div style="border-radius: 5px 5px 0px 0px;" class="bg-[#080E45] w-[100%] h-[40px] py-[10px] px-[20px]">
                    {{--  --}}
                    <p class="text-[#5CD1FF] font-bold">Mensagens</p>
                </div>
                {{--  --}}
                <div class="w-[100%] h-[40vh] p-[30px] inline-block">
                    {{--  --}}
                    <table class="w-[100%]">
                        <tr>
                            <td class="w-[50%]"><p class="font-bold text-[13px]">E-mail</p></td>
                            <td class="w-[25%]"><p class="font-bold text-[13px]">Data</p></td>
                            <td class="w-[25%]"></td>
                        </tr>
                    </table>
                    {{--  --}}
                    <hr class="my-[5px]">
                    {{--  --}}
                    <table class="w-[100%]">
                        {{--  --}}
                        <tr>
                            <td class="w-[50%]"><p class="text-[13px]">exemplo@gmail.com</p></td>
                            <td class="w-[25%]"><p class="text-[13px]">20/04/1991</p></td>
                            <td class="w-[25%]"><button class="w-[80%] float-right rounded-[8px] text-[11px] h-[25px] bg-[#00FF8C] text-[#080E45]">Ver</button></td>
                        </tr>
                    </table>
                    <hr class="my-[5px]">
                    {{--  --}}
                    <table class="w-[100%]">
                        {{--  --}}
                        <tr>
                            <td class="w-[50%]"><p class="text-[13px]">exemplo@gmail.com</p></td>
                            <td class="w-[25%]"><p class="text-[13px]">20/04/1991</p></td>
                            <td class="w-[25%]"><button class="w-[80%] float-right rounded-[8px] text-[11px] h-[25px] bg-[#00FF8C] text-[#080E45]">Ver</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        {{--  --}}
        <div class="w-[47%] h-[350px] bg-[#f1f1f1] rounded-[5px] inline-block float-left mx-[1.5%] border-[1px] border-[#cdcdcd]">
            {{--  --}}
            <div class="w-[100%] inline-block">
                {{--  --}}
                <div style="border-radius: 5px 5px 0px 0px;" class="bg-[#080E45] w-[100%] h-[40px] py-[10px] px-[20px]">
                    {{--  --}}
                    <p class="text-[#5CD1FF] font-bold">Publicações</p>
                </div>
                {{--  --}}
                <div class="w-[100%] h-[40vh] p-[30px] inline-block">
                    {{--  --}}
                    <p class="text-[13px] mt-[15%] text-center">Sem publicações recentes no momento!</p>
                    {{--  --}}
                    <center>
                        <button class="px-[40px] mt-[20px] h-[40px] rounded-[100px] bg-[#5CD1FF] text-[#080E45] font-bold">Publique algo!</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
