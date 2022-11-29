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
        //TODOS YA
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
            ],
            [
                'name' => 'employer',
                'email' => 'laboral@gmail.com',
                'password' => Hash::make('employer'),    
                'birthdate' => '2003-05-12',
                'cc' => '123467218',
                'role'=>3
            ],
            [
                'name' => 'Juanito Peréz (12345)',
                'email' => 'jp@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1980-11-08',
                'cc' => '123555218',
                'role'=>2
            ],
            [
                'name' => 'Esmeralda Garcia (12345)',
                'email' => 'esga@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1989-01-20',
                'cc' => '123444218',
                'role'=>2
            ],
            //5
            [
                'name' => 'Aleyda Versalles (12345)',
                'email' => 'alve@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1978-08-08',
                'cc' => '123222218',
                'role'=>2
            ],
            [
                'name' => 'Carmensa Guitierrez (12345)',
                'email' => 'cagu@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1966-07-17',
                'cc' => '123111218',
                'role'=>2
            ],
            [
                'name' => 'Alonso Velarde (12345)',
                'email' => 'alonso@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1955-07-17',
                'cc' => '123000218',
                'role'=>3
            ],
            [
                'name' => 'Carlos Florez (12345)',
                'email' => 'carflo@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '2005-09-13',
                'cc' => '123654218',
                'role'=>3
            ],
            [
                'name' => 'Blaca Caro Calvo (12345)',
                'email' => 'blanca@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1984-02-27',
                'cc' => '123777218',
                'role'=>3
            ],
       ]);
    }
}
