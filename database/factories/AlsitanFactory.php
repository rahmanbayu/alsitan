<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alsitan>
 */
class AlsitanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Traktor Roda Dua',
            'no_alat' => $this->faker->numberBetween(1,5000),
            'no_rangka' => $this->faker->numberBetween(1,5000),
            'no_mesin' => $this->faker->numberBetween(1,5000),
            'kode' => fake()->unique()->uuid(),
        ];
    }
}
