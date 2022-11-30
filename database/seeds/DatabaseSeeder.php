<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        //$this->call(MembrosTableSeeder::class);
        $this->call(TbSexosTableSeeder::class);
        $this->call(LogradourosTableSeeder::class);
        $this->call(TbRacasTableSeeder::class);

    }
}
