<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doenca extends Model
{
    protected $fillable = ['nome', 'definicao', 'controle', 'tratamento', 'imagem1', 'imagem2', 'imagem3', 'tipo', 'video', 'audio'];
}
