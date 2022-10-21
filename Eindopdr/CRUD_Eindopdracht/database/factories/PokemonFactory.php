<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pokemon;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class PokemonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Pokemon::class;
    public function definition()
    {
        return [
            'pokemon' => $this->faker->pokemonName,
            'type' => $this->faker->pokemonType
        ];
    }
}
