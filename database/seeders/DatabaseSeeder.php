<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //uesr
        \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=>'123456789',
          ]);
          \App\Models\User::create([
              'name' => 'Test User 2',
              'email' => 'test2@example.com',
              'password'=>'123456789',
            ]);
            \App\Models\User::create([
              'name' => 'Test User 3',
              'email' => 'test3@example.com',
              'password'=>'123456789',
            ]);

            // armen
            \App\Models\Arman::create([
                'name' => 'Aragatsotn',
                'description' => 'description',
                'location'=>'Aragatsotn',
                'image' => 'Aragatsotn.jpeg',
                'airport' => 'Aragatsotn',

              ]);
               \App\Models\Arman::create([
                'name' => 'Ararat',
                'description' => 'description',
                'location'=>'Ararat',
                'image' => 'Ararat.jpeg',
                'airport' => 'Ararat',

              ]);
              \App\Models\Arman::create([
                'name' => 'Armavir',
                'description' => 'description',
                'location'=>'Armavir',
                'image' => 'Armavir.jpeg',
                'airport' => 'Armavir',

              ]);
              \App\Models\Arman::create([
                'name' => 'Gegharkunik',
                'description' => 'description',
                'location'=>'Gegharkunik',
                'image' => 'Gegharkunik.jpeg',
                'airport' => 'Gegharkunik',

              ]);
              \App\Models\Arman::create([
                'name' => 'Kotayk',
                'description' => 'description',
                'location'=>'Kotayk',
                'image' => 'Kotayk.jpeg',
                'airport' => 'Kotayk',

              ]);
              \App\Models\Arman::create([
                'name' => 'Lori',
                'description' => 'description',
                'location'=>'Lori',
                'image' => 'Lori.jpeg',
                'airport' => 'Lori',

              ]);
              \App\Models\Arman::create([
                'name' => 'Shirak',
                'description' => 'description',
                'location'=>'Shirak',
                'image' => 'Shirak.jpeg',
                'airport' => 'Shirak',

              ]);
              \App\Models\Arman::create([
                'name' => 'Syunik',
                'description' => 'description',
                'location'=>'Syunik',
                'image' => 'Syunik.jpeg',
                'airport' => 'Syunik',

              ]);
              \App\Models\Arman::create([
                'name' => 'Tavush',
                'description' => 'description',
                'location'=>'Tavush',
                'image' => 'Tavush.jpeg',
                'airport' => 'Tavush',

              ]);
              \App\Models\Arman::create([
                'name' => 'Vayots Dzor',
                'description' => 'description',
                'location'=>'Vayots Dzor',
                'image' => 'Vayots Dzor.jpeg',
                'airport' => 'Vayots Dzor',

              ]);
              \App\Models\Arman::create([
                'name' => 'Yerevan',
                'description' => 'description',
                'location'=>'Yerevan',
                'image' => 'Yerevan.jpeg',
                'airport' => 'Yerevan',

              ]);
    }
}
