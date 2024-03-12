<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'user_id' => fake()->randomElement(User::pluck('id')),
            'in' => fake()->time(),
            'out' => fake()->time(),
            'note' => fake()->sentence(),
            'approved' => fake()->boolean(),
        ];
    }
}
