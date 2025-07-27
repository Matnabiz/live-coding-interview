<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Topic;
use Illuminate\Support\Str;

class TopicFactory extends Factory
{
    protected $model = Topic::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->words(2, true),
            'description' => $this->faker->sentence(),
            'path' => $this->faker->unique()->randomElement([
                'Primary/Math/Algebra',
                'Primary/Math/Geometry',
                'Secondary/Calculus/Limit theorem',
                'Secondary/Calculus/Derivatives',
                'Secondary/Physics/Kinematics',
            ]),
            'parent_id' => null,
        ];
    }
}


