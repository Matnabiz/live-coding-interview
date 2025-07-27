<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        return [
            'content' => $this->faker->sentence(),
            'optionA' => $this->faker->word(),
            'optionB' => $this->faker->word(),
            'optionC' => $this->faker->word(),
            'optionD' => $this->faker->word(),
            'correctOption' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'topic_id' => Topic::inRandomOrder()->first()?->id ?? Topic::factory(),
        ];
    }
}
