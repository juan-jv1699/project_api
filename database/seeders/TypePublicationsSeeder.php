<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class TypePublicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_publications')->insert([
            [
                'name' => 'social',
                'description' => 'publicaciones de indole general o social'
            ],
            [
                'name' => 'trabajo',
                'description' => 'publicaciones de indole laboral, en donde se busca generar trabajo y fomentar la comunidad'
            ],
            [
                'name' => 'comercial',
                'description' => 'publicaciones de indole mercantil, para venta y compra de bienes y servicios'
            ],
            [
                'name' => 'Informativa',
                'description' => 'publicaciones de indole informativa, o noticias que son de interes de la comunidad campesina'
            ]
            ]);
    }
}
