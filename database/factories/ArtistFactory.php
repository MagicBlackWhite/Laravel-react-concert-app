<?php

namespace Database\Factories;


use App\Models\Concert;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['S', 'G']);
        $artist_name = $type == 'S' ? $this->faker->name() : $this->faker->company();
        $genre = $this->faker->randomElement(["Rock", "Pop", "Classical", "Electro", "House", "Punk", "Jazz"]);

        return [
            'concert_id' => Concert::factory(),
            'artist_name' => $artist_name,
            'genre' => $genre,
            'type' => $type
        ];
    }
}
