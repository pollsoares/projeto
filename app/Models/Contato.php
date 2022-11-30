<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $table = 'contatos';

    protected $fillable = [
        'id',
        'tipo_fone',
        'ddd_fone',
        'numero_fone',
        'membro_id_fone'
    ];

  
}
