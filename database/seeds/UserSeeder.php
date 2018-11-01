<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'nameuser' => 'admin',
            'email' => 'admin@gmail.com',
            'city' => 'Bogotá',
            'profile' => 'A',
            'password' => bcrypt('secret'),
            'hobbies' => str_random(10)

        ]);
    }
}
