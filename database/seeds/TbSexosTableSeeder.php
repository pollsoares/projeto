<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbSexosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tb_sexos')->insert([
            'cod_sexo'     => '1',
            'desc_sexo'    => 'Masculino',
            'sexo_nascimento'    => 'M'
        ]);

        DB::table('tb_sexos')->insert([
            'cod_sexo'     => '2',
            'desc_sexo'    => 'Feminino',
            'sexo_nascimento'    => 'F'
        ]);
    }
}
