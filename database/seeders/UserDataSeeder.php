<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserDataSeeder extends Seeder
{
    public function run()
    {
       DB::table('user_data')->insert([
            [
                'preferences' => 'Informativa, Campo, Deporte',
                'photo' => 'admin.png',
                'gender' => 'Male',    
                'description' => "I'm a god",
                'user_id' => 1,
                'docs' => "Nothing",
                'location'=> "Chinchina"
            ],

            [
                'preferences' => 'Estudio, Deporte, Laboral',
                'photo' => 'slave.png',
                'gender' => 'Male',    
                'description' => "I'm a poor slave",
                'user_id' => 2,
                'docs' => "Nothing",
                'location'=> "Manizales"
            ],

            [
                'preferences' => 'Laboral, Campo, Social',
                'photo' => 'employer.png',
                'gender' => 'Male',    
                'description' => "I'm a Boss",
                'user_id' => 3,
                'docs' => "Nothing",
                'location'=> "Aguadas"
            ],
            [
                'preferences' => 'Laboral, Campo, Social, deporte',
                'photo' => 'nophoto.png',
                'gender' => 'Male',    
                'description' => "I'm a farmer, everyday I try to keep my family, and improve my products in my farm",
                'user_id' => 4,
                'docs' => "Nothing",
                'location'=> "Neira"
            ],
            [
                'preferences' => 'Laboral, Campo, Social, deporte',
                'photo' => 'nophoto.png',
                'gender' => 'Female',    
                'description' => "I'm a youg woman, Who lives in Aguadas, with my husband We have two children, and everyday we work with them",
                'user_id' => 5,
                'docs' => "Nothing",
                'location'=> "Filadelfia"
            ],
            [
                'preferences' => 'Laboral, Campo, Social, Cuidado del Hogar',
                'photo' => 'nophoto.png',
                'gender' => 'Female',    
                'description' => "I'm from filadelfia, and in my farm we sow a lot of coffee, and we export it",
                'user_id' => 6,
                'docs' => "Nothing",
                'location'=> "La dorada"
            ],
            [
                'preferences' => 'Cuidado del Hogar, Social',
                'photo' => 'nophoto.png',
                'gender' => 'Female',    
                'description' => "I'm from anserma, and in my field, we have whatever thing that do you want",
                'user_id' => 7,
                'docs' => "Nothing",
                'location'=> "Anserma"
            ],
            [
                'preferences' => 'Everything',
                'photo' => 'nophoto.png',
                'gender' => 'Male',    
                'description' => "Nothing to say",
                'user_id' => 8,
                'docs' => "Nothing",
                'location'=> "Manizales"
            ],
            [
                'preferences' => 'Social, Laboral',
                'photo' => 'nophoto.png',
                'gender' => 'Male',    
                'description' => "Nothing to say",
                'user_id' => 9,
                'docs' => "Nothing",
                'location'=> "La dorada"
            ],
            [
                'preferences' => 'Social, Laboral',
                'photo' => 'nophoto.png',
                'gender' => 'Female',    
                'description' => "Nothing to say",
                'user_id' => 10,
                'docs' => "Nothing",
                'location'=> "La dorada"
            ],
            
       ]);
    }
}
