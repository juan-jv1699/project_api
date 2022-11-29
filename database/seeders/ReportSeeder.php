<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    public function run()
    {
        DB::table('reports')->insert([
            [
                'reasons' => 'El trabajo es falso',
                'publication_id' => 1,
                'validate' => 1,
            ],
           
            ]);
    }
}
