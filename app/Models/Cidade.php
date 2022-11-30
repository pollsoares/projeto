<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'tb_cidadeslogradouros';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'cod_logradouro';
    protected $fillable = ['cod_logradouro', 'desc_logradouro'];
}
