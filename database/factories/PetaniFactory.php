<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Petani>
 */
class PetaniFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nik' => $this->faker->nik(),
            'nama_kelompok' => $this->faker->sentence(2),
            'alamat' => $this->faker->address(),
            'luas_lahan' => $this->faker->numberBetween(1,10),
            'job' => fake()->randomElement(['Petani', 'Dokter', 'PNS']),
        ];
    }
}
