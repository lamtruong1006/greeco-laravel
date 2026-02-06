<?php

namespace Database\Factories;

use App\Models\CourseModule;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseModuleFactory extends Factory
{
    protected $model = CourseModule::class;

    public function definition(): array
    {
        return [
            'course_id' => Course::factory(),
            'title' => fake()->sentence(3),
            'content' => fake()->paragraph(2),
            'lessons' => [
                ['title' => fake()->sentence(4), 'duration' => '30 phút'],
                ['title' => fake()->sentence(4), 'duration' => '45 phút'],
            ],
            'order' => fake()->numberBetween(1, 10),
            'is_active' => true,
        ];
    }
}
