<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('comments')->insert([
            [
                'content' => 'Me interesa',
                'user_id' => 5,
                'publication_id' => 3
            ],
            [
                'content' => 'Si, fue terrible',
                'user_id' => 7,
                'publication_id' => 2
            ],
           
            ]);
    }
}
