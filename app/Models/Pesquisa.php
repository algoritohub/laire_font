<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisa extends Model
{
    protected $fillable = ['categoria', 'nome', 'descricao', 'imagem', 'stts', 'apelido'];
}
