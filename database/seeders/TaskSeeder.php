<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Mengerjakan PR',
            'description' => 'Lorem ipsum dolor sit amet consectetur.',
            'is_completed' => false
        ]);

        Task::create([
            'title' => 'Mengerjakan Coding',
            'description' => 'Lorem ipsum dolor sit amet consectetur.',
            'is_completed' => false
        ]);
    }
}
