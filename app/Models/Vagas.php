<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'vagas',
        'data_termino',
        'palavras_chave',
        'requisitos',
        'estado',
        'qualificacoes',
    ];
}
