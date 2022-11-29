<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  
    public function run()
    {
        $this->call([
            UserSeeder::class,
            UserDataSeeder::class,
            TypeNotificationsSeeder::class,
            NotificationSeeder::class,
            PublicationSeeder::class,
            CommentSeeder::class,
            ReportSeeder::class,
            TypeRoleSeeder::class,
            Role_User_Seeder::class,
            TypePublicationsSeeder::class,
            TypePublicationsSeeder::class,
            LikeSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
    }
}
