<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();      
            //$table->string('nome');       
            //$table->integer('sexo')->nullable();
            //$table->integer('raca')->nullable();  
            //$table->date('data_nasc')->nullable();
            //$table->string('cidade_nasc')->nullable();
            //$table->integer('cep')->nullable();
            //$table->integer('logradouro')->nullable();
            //$table->string('endereco')->nullable();  
            //$table->integer('numero')->nullable();
            //$table->string('complemento')->nullable(); 
            //$table->string('bairro')->nullable();
            //$table->string('cidade')->nullable();
            //$table->string('estado')->nullable();                               
            //$table->string('email')->nullable();  
            //$table->foreign('sexo')->references('cod_sexo')->on('tb_sexos');                                        
            //$table->foreign('raca')->references('cod_raca')->on('tb_racas');
            //$table->foreign('cidade_nasc')->references('chave_ibge')->on('tb_cidades');
            //$table->foreign('logradouro')->references('cod_logradouro')->on('tb_logradouros');

  
            $table->string('nome');       
            $table->string('sexo')->nullable();
            $table->string('raca')->nullable();  
            $table->date('data_nasc')->nullable();
            $table->string('cidade_nasc')->nullable();
            $table->integer('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('endereco')->nullable();  
            $table->integer('numero')->nullable();
            $table->string('complemento')->nullable(); 
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();                               
            $table->string('email')->nullable()->unique();            
            
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
        Schema::dropIfExists('pessoas');
    }
}
