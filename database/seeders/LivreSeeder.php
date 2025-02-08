<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livre;
use App\Models\Auteur;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $auteur1 = Auteur::where('nom', 'Hugo')->first();
        $auteur2 = Auteur::where('nom', 'Dumas')->first();
        $auteur3 = Auteur::where('nom', 'Orwell')->first();
        $auteur4 = Auteur::where('nom', 'Camus')->first();
        $auteur5 = Auteur::where('nom', 'Zola')->first();
        $auteur6 = Auteur::where('nom', 'Balzac')->first();


        Livre::insert([
            [
                'titre' => 'Les Misérables',
                'isbn' => '9781234567890',
                'resume' => 'Un roman historique qui explore la justice sociale.',
                'date_publication' => '1862-04-03',
                'couverture' => 'public/covers/les_miserables.jpg',
                'auteur_id' => $auteur1->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Le Comte de Monte-Cristo',
                'isbn' => '9782345678901',
                'resume' => 'Un classique sur la vengeance et la rédemption.',
                'date_publication' => '1844-08-28',
                'couverture' => 'public/covers/monte_cristo.jpg',
                'auteur_id' => $auteur2->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => '1984',
                'isbn' => '9783456789012',
                'resume' => 'Un roman dystopique sur le totalitarisme.',
                'date_publication' => '1949-06-08',
                'couverture' => 'public/covers/1984.jpg',
                'auteur_id' => $auteur3->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'La Ferme des animaux',
                'isbn' => '9784567890123',
                'resume' => 'Un roman sur la politique et la bourgeoisie.',
                'date_publication' => '1945-01-01',
                'couverture' => 'public/covers/la_ferme_des_animaux.jpg',
                'auteur_id' => $auteur4->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Le Rêve',
                'isbn' => '9785678901234',
                'resume' => 'Un roman sur la vie et la mort.',
                'date_publication' => '1869-02-01',
                'couverture' => 'public/covers/le_reve.jpg',
                'auteur_id' => $auteur5->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Les Misérables',
                'isbn' => '9786789012345',
                'resume' => 'Un roman sur la rédemption et la justice sociale.',
                'date_publication' => '1862-03-01',
                'couverture' => 'public/covers/les_miserables.jpg',
                'auteur_id' => $auteur6->id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
