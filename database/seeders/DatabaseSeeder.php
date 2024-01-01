<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'name' => 'Pos Store',
             'email' => 'dirga@email.com',
             'password' => Hash::make('12345678'),
         ]);

         $this->call([
            ProductSeeder::class,
         ]);
    }
}
