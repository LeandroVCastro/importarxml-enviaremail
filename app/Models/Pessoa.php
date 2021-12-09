<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'documento',
        'cep',
        'endereco',
        'bairro',
        'cidade',
        'uf',
        'telefone',
        'email',
        'ativo'
    ];
}
