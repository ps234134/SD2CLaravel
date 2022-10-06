<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Songs>
 */
class SongsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'singer' => $this->faker->singer,
            'created_at' => $this->faker->created_at,
            'updated_at' => $this->faker->updated_at,
        ];
    }
}
