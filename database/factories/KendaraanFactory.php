<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noPol' => strtoupper(fake()->bothify('??####??')),
            'jenis_kendaraan' => fake()->randomElement(['Toyota', 'Honda', 'Ford', 'Chevrolet', 'Nissan']),
            'BBM' => fake()->randomElement(['Pertalite', 'Pertamax', 'Pertamax Turbo'])
        ];
    }
}
