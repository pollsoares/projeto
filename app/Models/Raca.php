<?php

namespace App\Models;
use App\Models\Pessoa;

use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    protected $primaryKey = 'cod_raca';
    protected $table = 'tb_racas';
    protected $fillable = ['cod_raca', 'desc_raca'];
}
