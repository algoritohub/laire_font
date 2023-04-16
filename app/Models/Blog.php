<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['titulo', 'subtitulo', 'categoria', 'imagem', 'texto', 'autor', 'registro', 'views', 'stts', 'texto2', 'texto3', 'texto4', 'texto5'];
}
