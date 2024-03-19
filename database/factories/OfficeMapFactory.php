<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OfficeMap>
 */
class OfficeMapFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->jobTitle(),
            'building' => fake()->randomElement(['regional', 'msc', 'witel']),
            'floor' => fake()->buildingNumber(),
            'desc' => fake()->sentence(),
        ];
    }
}
