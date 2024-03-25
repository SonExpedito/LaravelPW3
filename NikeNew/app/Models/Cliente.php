<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nome',
        'Endereco',
        'Bairro',
        'CEP',
        'Cidade',
        'Estado',

    ];
}
