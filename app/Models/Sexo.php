<?php

namespace App\Models;
use App\Models\Pessoa;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table = 'tb_sexos';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'cod_sexo';
    protected $fillable = ['cod_sexo', 'desc_sexo', 'sexo_nascimento'];
}
