<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PremioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('premios')->insert([

            'anio' => '2020', 
            'autor' => 'Javier de Isusi', 
            'comic' => 'La divina comedia de Oscar Wilde',
            'portada' => 'ladivinacomedia_baja.jpg',
            'user_id' => 1

        ]);



        DB::table('premios')->insert([

            'anio' => '2021', 
            'autor' => 'Magius', 
            'comic' => 'Primavera para madrid',
            'portada' => 'primavera.jpg',
            'user_id' => 1

        ]);
    }
}
