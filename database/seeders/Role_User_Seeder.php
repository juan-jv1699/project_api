<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class Role_User_Seeder extends Seeder
{
    public function run()
    {
        //Tabla Pivot
        DB::table('role_user')->insert([
            [
                'user_id' => 1,
                'role_id' => 1
            ],
            [
                'user_id' => 2,
                'role_id' => 2
            ],
            [
                'user_id' => 3,
                'role_id' => 3
            ],
            [
                'user_id' => 4,
                'role_id' => 2
            ],
            [
                'user_id' => 5,
                'role_id' => 2
            ],
            [
                'user_id' => 6,
                'role_id' => 2
            ],
            [
                'user_id' => 7,
                'role_id' => 2
            ],
            [
                'user_id' => 8,
                'role_id' => 3
            ],
            [
                'user_id' => 9,
                'role_id' => 3
            ],
            [
                'user_id' => 10,
                'role_id' => 3
            ],
            ]);
    }
}
