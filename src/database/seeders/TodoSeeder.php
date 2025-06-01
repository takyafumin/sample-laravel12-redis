<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

/**
 * Todo Seeder
 */
class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::factory()->count(10)->create();
    }
}
