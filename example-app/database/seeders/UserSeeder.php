<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),    
                'birthdate' => '1999-10-16',
                'cc' => '123456789',
                'role'=>1
            ],
            [
                'name' => 'user',
                'email' => 'usertest@gmail.com',
                'password' => Hash::make('usertest'),    
                'birthdate' => '2000-05-12',
                'cc' => '123467214',
                'role'=>2
            ]
       ]);
    }
}
