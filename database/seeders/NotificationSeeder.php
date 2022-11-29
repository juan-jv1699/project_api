<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        DB::table('notifications')->insert([
            [   
                'content' => 'Alguien le ha dado me gusta a tu publicación',
                'type_notification_id' => 1,
                'receiver_id' => 5,
                'transmitter_id' => 7,

            ],
            [   
                'content' => 'Alguien ha aplicado a tu oferta de trabajo',
                'type_notification_id' => 2,
                'receiver_id' => 3,
                'transmitter_id' => 10,

            ],
            [   
                'content' => 'Alguien esta intersado en uno de tus productos publicados',
                'type_notification_id' => 3,
                'receiver_id' => 8,
                'transmitter_id' => 9,

            ],
            [   
                'content' => 'Alguuien ha comentado en una de tus publicaciones',
                'type_notification_id' => 1,
                'receiver_id' => 3,
                'transmitter_id' => 6,

            ],
            [   
                'content' => 'Alguien esta interesado en contratarte',
                'type_notification_id' => 2,
                'receiver_id' => 2,
                'transmitter_id' => 8,

            ],
        ]);
    }
}
