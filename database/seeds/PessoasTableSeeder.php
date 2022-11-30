<?php

use Illuminate\Database\Seeder;

class MembrosTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('Pessoas')->insert([
            'nome'  => 'Paulo Roberto Soares',
            'sexo'  => '1',
            'raca'=>'2',
            'data_nasc'=>'06/11/1977',
            'cidade_nasc'=>'Maua',
            'cep'=>'13086736',
            'logradouro'=>'4',
            'endereco'=>'Mario Pinheiro',
            'numero'=>'125',
            'complemento'=>'Casa',
            'bairro'=>'Bosque das Palmeiras',
            'cidade'=>'Campinas',
            'estado'=>'SP',
            'email'=>'soares.si@gmail.com'

        ]);
    }
}
