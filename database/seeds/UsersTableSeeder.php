<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'Paulo Roberto Soares',
            'email'    => 'soares.si@gmail.com',
            'password' => bcrypt('123')
        ]);

        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'admin@admin.com',
            'password' => bcrypt('123')
        ]);
    }
}
