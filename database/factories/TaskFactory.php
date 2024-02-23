<?php

namespace Database\Factories;

use App\Models\Table;
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
        $tableId = Table::all()->pluck('id')->random();
        return [
            'table_id' => $tableId,
            'name' => fake('ru_RU')->jobTitle(),
            'description' => fake()->text(256),
            'body' => fake()->text(256),
            'created_at' => fake()->dateTimeThisMonth(),
            'updated_at' => fake()->dateTimeThisMonth(),
            'deadline' => fake()->dateTimeThisMonth(),
            'completed' => fake()->boolean(),
        ];
    }
}
