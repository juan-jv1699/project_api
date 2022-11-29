<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class LikeSeeder extends Seeder
{
    public function run()
    {
        DB::table('likes')->insert([
            [
                'user_id' => 3,
                'publication_id' => 1
            ],
            [
                'user_id' => 4,
                'publication_id' => 1
            ]
            ]);
    }
}
