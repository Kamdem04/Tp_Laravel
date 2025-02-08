<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Auteur;

class AuteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Auteur::insert([
            [
                'nom' => 'Hugo',
                'prenom' => 'Victor',
                'biographie' => 'Écrivain français, célèbre pour "Les Misérables".',
                'date_naissance' => '1802-02-26',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Dumas',
                'prenom' => 'Alexandre',
                'biographie' => 'Auteur de "Les Trois Mousquetaires".',
                'date_naissance' => '1802-07-24',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Orwell',
                'prenom' => 'George',
                'biographie' => 'Auteur de "1984" et "La Ferme des animaux".',
                'date_naissance' => '1903-06-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Camus',
                'prenom' => 'Albert',
                'biographie' => 'Est un philosophe, écrivain, journaliste militant, romancier, dramaturge, essayiste et nouvelliste français, lauréat du prix Nobel de littérature en 1957.',
                'date_naissance' => '1913-11-07',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Zola',
                'prenom' => 'Émile',
                'biographie' => 'est un écrivain et journaliste français, né le 2 avril 1840 à Paris et mort le 29 septembre 1902 dans la même ville',
                'date_naissance' => '1840-02-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Balzac',
                'prenom' => 'Honoré',
                'biographie' => 'Auteur de "La Comédie humaine".',
                'date_naissance' => '1799-05-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
