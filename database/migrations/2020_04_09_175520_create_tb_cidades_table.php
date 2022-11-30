<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cidades', function (Blueprint $table) {                       
            $table->string('chave_ibge',6);
            $table->integer('cod_estado_ibge');
            $table->integer('cod_cidade_ibge');
            $table->string('dsc_cidade_ibge',100);
            $table->string('dsc_estado_ibge',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cidades');
    }
}
