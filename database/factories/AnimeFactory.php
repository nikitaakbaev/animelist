<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\Anime>
 */
class AnimeFactory extends Factory
{
    protected $model = \App\Models\Anime::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'cover' => 'https://via.placeholder.com/200x300',
            'rating' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph(),
            'review' => $this->faker->paragraph(),
        ];
    }
}
