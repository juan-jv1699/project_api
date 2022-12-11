<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PublicationSeeder extends Seeder
{
    public function run()
    {
        DB::table('publications')->insert([
            [
                'title' => 'Se busca Recolector',
                'content' => 'En la finca "La hacienda" se necesita un recolector para la temporada de cosecha',
                'user_id' => 8,
                'image'=>'https://apollo-virginia.akamaized.net/v1/files/vzk97ajtyd0e1-CO/image'
            ],
            [
                'title' => 'Derrumbe cerca de la entrada a Anserma',
                'content' => 'El dia del 30 de febrero de 2023, se evidencio un fuerte derrumbe en plena carretera, debido a las fuertes lluvias. Afortunadamente, nadie salio herido',
                'user_id' => 6,
                'image'=>'https://apollo-virginia.akamaized.net/v1/files/vzk97ajtyd0e1-CO/image'
            ],
            [
                'title' => 'Venta de Café La Amada',
                'content' => 'Hoy te queremos ofrecer un delicios cafe con las raices de nuestra region, contactanos al numero 3105283234 y ordena el tuyo, no te quedes sin degustarlo',
                'user_id' => 10,
                'image'=>'https://www.bolsadirecta.es/wp-content/uploads/2021/10/Coffee_Bags_015-1.jpg'
            ]
            ]);
    }
}
