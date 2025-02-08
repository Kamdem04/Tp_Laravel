<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Auteur;
use App\Models\Livre;

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

        // Créer 10 auteurs
        Auteur::factory(4)->create();

        // Créer 100 livres
        Livre::factory(100)->create();

        $this->call([
            UserSeeder::class,
        ]);
    }
}
