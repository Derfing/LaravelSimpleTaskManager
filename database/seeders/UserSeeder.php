<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Table;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::factory()->count(10)->create();
        $users = User::factory()->count(100)->create();
        $tables = Table::factory()->count(300)->create();
        Task::factory()->count(1000)->create();

        foreach ($tables as $table) {
            $usersIds = $users->random(5)->pluck('id');
            $table->users()->attach($usersIds);
        }
    }
}
