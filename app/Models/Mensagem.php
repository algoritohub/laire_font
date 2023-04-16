<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $fillable = ['origem', 'nome', 'email', 'tipo', 'mensagem', 'data', 'stts'];
}
