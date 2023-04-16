<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $fillable = ['pagina', 'bloco', 'posicao', 'titulo', 'subtitulo', 'texto', 'imagem', 'publicador', 'registro', 'texto2', 'texto3', 'texto4', 'texto5', 'titulo_eng', 'subtitulo_eng', 'texto_eng', 'texto2_eng', 'texto3_eng', 'texto4_eng', 'texto5_eng'];
}
