<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TbRacasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Verifica se tabela está vazia
        if(DB::table('tb_racas')->get()->count() == 0){

            DB::table('tb_racas')->insert([
                'cod_raca'     => '1',
                'desc_raca'    => 'Branca'
            ]);

            DB::table('tb_racas')->insert([
                    'cod_raca'     => '2',
                    'desc_raca'    => 'Preta'
            ]);
            DB::table('tb_racas')->insert([
                'cod_raca'     => '3',
                'desc_raca'    => 'Parda'
                ]);
            DB::table('tb_racas')->insert([
                'cod_raca'     => '4',
                'desc_raca'    => 'Amarela'
            ]);
            DB::table('tb_racas')->insert([
                'cod_raca'     => '5',
                'desc_raca'    => 'Indigena'
            ]);

            DB::table('tb_racas')->insert([
                'cod_raca'     => '99',
                'desc_raca'    => 'Sem Informacao'
            ]);

        } else{echo "\e[31mTabela possui dados";}

    }
}
