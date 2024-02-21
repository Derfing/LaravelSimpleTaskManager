<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('ru_RU')->jobTitle(),
            'description' => fake()->text(256),
            'body' => fake()->text(256),
            'deadline' => fake()->dateTimeThisMonth(),
            'completed' => fake()->boolean(),
        ];
    }
}
