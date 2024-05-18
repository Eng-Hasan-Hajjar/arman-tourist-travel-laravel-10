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
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
               \App\Models\Arman::create([
                'name' => 'Ararat',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
              \App\Models\Arman::create([
                'name' => 'Armavir',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
              \App\Models\Arman::create([
                'name' => 'Gegharkunik',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
              \App\Models\Arman::create([
                'name' => 'Kotayk',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
              \App\Models\Arman::create([
                'name' => 'Lori',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
              \App\Models\Arman::create([
                'name' => 'Shirak',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
              \App\Models\Arman::create([
                'name' => 'Syunik',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
              \App\Models\Arman::create([
                'name' => 'Tavush',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
              \App\Models\Arman::create([
                'name' => 'Vayots Dzor',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
              \App\Models\Arman::create([
                'name' => 'Yerevan',
                'description' => 'description',
                'location'=>'123456789',
                'image' => 'Test User 3',
                'airport' => 'description',

              ]);
    }
}
