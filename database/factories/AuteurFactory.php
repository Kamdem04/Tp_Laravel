<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Auteur;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Auteur>
 */
class AuteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Auteur::class;
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName(),
            'prenom' => $this->faker->firstName(),
            'biographie' => $this->faker->paragraph(),
            'date_naissance' => $this->faker->date(),
        ];
    }
}
