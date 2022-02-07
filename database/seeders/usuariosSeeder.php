<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' => 'user1', //Nombre de usuario
            'email' => 'user1'.'@correo.net', //Correo del usuario
            'password' => Hash::make('user1'), //Contraseña usuario

        ]);

        DB::table('users')->insert([

            'name' => 'user2', //Nombre de usuario
            'email' => 'user2'.'@correo.net', //Correo del usuario
            'password' => Hash::make('user2'), //Contraseña usuario

        ]);
    }
}
