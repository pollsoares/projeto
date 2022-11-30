<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    public $fillable = [
        'nome',
        'sexo',
        'raca',
        'data_nasc',
        'cidade_nasc',
        'cep',
        'logradouro',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'email'
    ];

    public static function pesquisa($pesquisar){
        return static::where('nome', 'LIKE', '%' . $pesquisar . '%')
        ->orWhere('email', 'LIKE', '%' . $pesquisar . '%')
        ->paginate(10);
    }

    public function getRaca() {
        return $this->belongsTo('App\Models\Raca', 'raca');
    }
    public function getSexo() {
        return $this->belongsTo('App\Models\Sexo', 'sexo');
    }
    public function getLogradouro() {
        return $this->belongsTo('App\Models\Logradouro', 'logradouro');
    }
}
