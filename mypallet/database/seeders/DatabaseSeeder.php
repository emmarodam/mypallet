<?php

namespace Database\Seeders;

use App\Models\TransportUnit;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Opret 10 trucks
        TransportUnit::factory(10)->create([
            'type' => 'truck',
        ]);

        // Opret 10 trailers
        TransportUnit::factory(10)->create([
            'type' => 'trailer',
        ]);
    }
}
