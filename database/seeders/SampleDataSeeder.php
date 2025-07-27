<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Question;

class SampleDataSeeder extends Seeder
{
    public function run(): void
    {
        $topics = [
            ['title' => 'Algebra', 'path' => 'Primary/Math/Algebra'],
            ['title' => 'Geometry', 'path' => 'Primary/Math/Geometry'],
            ['title' => 'Limit Theorem', 'path' => 'Secondary/Calculus/Limit theorem'],
            ['title' => 'Derivatives', 'path' => 'Secondary/Calculus/Derivatives'],
            ['title' => 'Kinematics', 'path' => 'Secondary/Physics/Kinematics'],
        ];

        foreach ($topics as $data) {
            Topic::factory()->create($data);
        }

        Question::factory(50)->create();
    }
}

