<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisador extends Model
{
    protected $fillable = ['categoria', 'nome', 'referencia', 'link_lattes', 'link_orcid', 'descricao', 'imagem'];
}
