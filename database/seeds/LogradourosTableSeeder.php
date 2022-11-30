<?php

use Illuminate\Database\Seeder;

class LogradourosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_logradouros')->insert([
            'cod_logradouro'     => '1',
            'desc_logradouro'    => 'Avenida',
        ]);

        DB::table('tb_logradouros')->insert([
            'cod_logradouro'     => '2',
            'desc_logradouro'    => 'Praça',
        ]);

        DB::table('tb_logradouros')->insert([
            'cod_logradouro'     => '3',
            'desc_logradouro'    => 'Viela',
        ]);

        DB::table('tb_logradouros')->insert([
            'cod_logradouro'     => '4',
            'desc_logradouro'    => 'Rua',
        ]);
    }
}
