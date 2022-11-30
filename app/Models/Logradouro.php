<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logradouro extends Model
{
    protected $table = 'tb_logradouros';
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'cod_logradouro';
    protected $fillable = ['cod_logradouro', 'desc_logradouro'];
}
