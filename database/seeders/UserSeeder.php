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
        //TODOS YA contraseña 12345
       DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),    
                'birthdate' => '1999-10-16',
                'cc' => '123456789',
                'role'=>1,
                'image'=>'https://img.freepik.com/vector-premium/cool-boss-pig-lleva-ilustracion-anteojos_188898-36.jpg?w=2000'
            ],
            [
                'name' => 'user',
                'email' => 'usertest@gmail.com',
                'password' => Hash::make('usertest'),    
                'birthdate' => '2000-05-12',
                'cc' => '123467214',
                'role'=>2,
                'image'=>'https://p16-va-default.akamaized.net/img/musically-maliva-obj/1665282759496710~c5_720x720.jpeg'
            ],
            [
                'name' => 'employer',
                'email' => 'laboral@gmail.com',
                'password' => Hash::make('employer'),    
                'birthdate' => '2003-05-12',
                'cc' => '123467218',
                'role'=>3,
                'image' => 'https://st2.depositphotos.com/1874171/8061/v/600/depositphotos_80619618-stock-illustration-hands-broken-chains-freedom-concept.jpg'
            ],
            [
                'name' => 'Juanito Peréz',
                'email' => 'jp@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1980-11-08',
                'cc' => '123555218',
                'role'=>2,
                'image' => 'https://bogota.gov.co/sites/default/files/styles/1050px/public/2020-08/campesino-bogota-rural.jpg'
            ],
            [
                'name' => 'Esmeralda Garcia',
                'email' => 'esga@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1989-01-20',
                'cc' => '123444218',
                'role'=>2,
                'image'=>'http://elcampesino.co/wp-content/uploads/2020/06/IMAGEN-ARTICULO-CORTESIA-REVISTA-SEMANA.jpg'
            ],
            //5
            [
                'name' => 'Aleyda Versalles',
                'email' => 'alve@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1978-08-08',
                'cc' => '123222218',
                'role'=>2,
                'image'=>'https://s3.amazonaws.com/elcomun/imagenes/1552071933.jpg'
            ],
            [
                'name' => 'Carmensa Guitierrez',
                'email' => 'cagu@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1966-07-17',
                'cc' => '123111218',
                'role'=>2,
                'image'=>'https://cloudfront-us-east-1.images.arcpublishing.com/prisaradioco/T4LIGH3L2JKDRENXS3VJVL2MBM.jpg'
            ],
            [
                'name' => 'Alonso Velarde',
                'email' => 'alonso@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1955-07-17',
                'cc' => '123000218',
                'role'=>3,
                'image'=>'https://web.comisiondelaverdad.co/images/zoo/noticias/images/Campesinos-foto-luna1.jpg'
            ],
            [
                'name' => 'Carlos Florez',
                'email' => 'carflo@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '2005-09-13',
                'cc' => '123654218',
                'role'=>3,
                'image'=>'https://p16-va-default.akamaized.net/img/musically-maliva-obj/1665282759496710~c5_720x720.jpeg'
            ],
            [
                'name' => 'Blaca Caro Calvo',
                'email' => 'blanca@gmail.com',
                'password' => Hash::make('12345'),    
                'birthdate' => '1984-02-27',
                'cc' => '123777218',
                'role'=>3,
                'image'=>'https://p16-va-default.akamaized.net/img/musically-maliva-obj/1665282759496710~c5_720x720.jpeg'
            ],
       ]);
    }
}
