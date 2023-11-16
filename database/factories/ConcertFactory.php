<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concert>
 */
class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'concert_name' => $this->faker->cityPrefix(),
            'city' => $this->faker->city(),
            'address' => $this->faker->streetAddress(),
            'date' => $this->faker->dateTimeThisDecade(),
            'price' => $this->faker->numberBetween(100, 600)
        ];
    }
}
