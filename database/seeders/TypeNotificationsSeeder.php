<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class TypeNotificationsSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('type_notifications')->insert([
            [
                'name' => 'Social',
                'description' => 'publicaciones de indole general o social'
            ],
            [
                'name' => 'Trabajo',
                'description' => 'publicaciones de indole laboral, en donde se busca generar trabajo y fomentar la comunidad'
            ],
            [
                'name' => 'Comercial',
                'description' => 'publicaciones de indole mercantil, para venta y compra de bienes y servicios'
            ]
            ]);
    }
}
