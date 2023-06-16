<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class ConteudoRespira extends Model
{
    protected $fillable = ['projeto', 'posicao', 'titulo', 'descricao', 'imagem', 'video', 'audio', 'titulo_ing', 'descricao_ing'];
}
