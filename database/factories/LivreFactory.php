<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Auteur;
use App\Models\Livre;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Livre::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence(),
            'isbn' => $this->faker->unique()->isbn13(),
            'resume' => $this->faker->paragraph(),
            'date_publication' => $this->faker->date(),
            'couverture' => $this->faker->imageUrl(640, 480, 'books', true),
            'auteur_id' => Auteur::inRandomOrder()->first()->id, // Sélectionne un auteur aléatoire
        ];
    }
}
